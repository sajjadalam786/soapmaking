<?php
/**
 * process.php – Form Handler
 * CRM endpoint: update CRM_ENDPOINT in config.php when ready.
 * Fallback: sends email via PHP mail().
 */
require_once __DIR__ . '/includes/config.php';

header('Content-Type: application/json');

// ── Only accept POST ──────────────────────────────────────────────────────────
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed.']);
    exit;
}

// ── CSRF check (basic) ───────────────────────────────────────────────────────
session_start();
if (empty($_POST['csrf_token']) || $_POST['csrf_token'] !== ($_SESSION['csrf_token'] ?? '')) {
    http_response_code(403);
    echo json_encode(['success' => false, 'message' => 'Invalid request.']);
    exit;
}

// ── Sanitise inputs ───────────────────────────────────────────────────────────
$name    = htmlspecialchars(strip_tags(trim($_POST['name']    ?? '')), ENT_QUOTES, 'UTF-8');
$phone   = htmlspecialchars(strip_tags(trim($_POST['phone']   ?? '')), ENT_QUOTES, 'UTF-8');
$email   = filter_var(trim($_POST['email']   ?? ''), FILTER_SANITIZE_EMAIL);
$city    = htmlspecialchars(strip_tags(trim($_POST['city']    ?? '')), ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars(strip_tags(trim($_POST['message'] ?? '')), ENT_QUOTES, 'UTF-8');
$source  = 'Landing Page – Soap Masterclass Chandigarh';

// ── Validate required fields ──────────────────────────────────────────────────
$errors = [];
if (empty($name))                              $errors[] = 'Name is required.';
if (!preg_match('/^[6-9]\d{9}$/', $phone))    $errors[] = 'Valid 10-digit Indian mobile number required.';
if ($email && !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Invalid email address.';

if (!empty($errors)) {
    echo json_encode(['success' => false, 'message' => implode(' ', $errors)]);
    exit;
}

// ── Rate limiting (basic session) ─────────────────────────────────────────────
if (!empty($_SESSION['last_submit']) && (time() - $_SESSION['last_submit']) < 60) {
    echo json_encode(['success' => false, 'message' => 'Please wait a moment before submitting again.']);
    exit;
}
$_SESSION['last_submit'] = time();

$submitted = false;

// ── Route 1: Send to CRM endpoint ────────────────────────────────────────────
if (defined('CRM_ENDPOINT') && CRM_ENDPOINT !== '') {
    $payload = json_encode([
        'name'    => $name,
        'phone'   => $phone,
        'email'   => $email,
        'city'    => $city,
        'message' => $message,
        'source'  => $source,
        'time'    => date('Y-m-d H:i:s'),
    ]);

    $ch = curl_init(CRM_ENDPOINT);
    curl_setopt_array($ch, [
        CURLOPT_POST           => true,
        CURLOPT_POSTFIELDS     => $payload,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT        => 10,
        CURLOPT_HTTPHEADER     => ['Content-Type: application/json'],
        CURLOPT_SSL_VERIFYPEER => !DEBUG_MODE,
    ]);
    $response  = curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    $submitted = ($http_code >= 200 && $http_code < 300);
}

// ── Route 2: Fallback email ──────────────────────────────────────────────────
if (!$submitted) {
    $to      = FORM_FALLBACK_EMAIL;
    $subject = "New Enquiry – Soap Masterclass | $name";
    $body    = "New lead from the Soap Making Workshop Landing Page:\n\n"
             . "Name    : $name\n"
             . "Phone   : $phone\n"
             . "Email   : $email\n"
             . "City    : $city\n"
             . "Message : $message\n"
             . "Source  : $source\n"
             . "Time    : " . date('Y-m-d H:i:s') . "\n";

    $headers = "From: noreply@" . parse_url(WEBSITE, PHP_URL_HOST) . "\r\n"
             . "Reply-To: $email\r\n"
             . "X-Mailer: PHP/" . phpversion();

    $submitted = mail($to, $subject, $body, $headers);
}

// ── Respond ───────────────────────────────────────────────────────────────────
if ($submitted) {
    echo json_encode([
        'success' => true,
        'message' => 'Thank you! We have received your enquiry. Our team will contact you within 24 hours.',
    ]);
} else {
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'Something went wrong. Please call us directly at ' . PHONE_DISPLAY,
    ]);
}
exit;
