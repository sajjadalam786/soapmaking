<?php
require_once __DIR__ . '/../includes/config.php';
session_start();
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// Override SEO for this page
define('PAGE_TITLE', 'Privacy Policy | CSDO Soap Making Workshop');
define('PAGE_DESC',  'Read CSDO\'s Privacy Policy. Learn how we collect, use, and protect your personal information when you enquire about our Soap Making Workshop in Chandigarh.');
?>
<?php
// Inline partial header for legal pages
require_once __DIR__ . '/../includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= PAGE_TITLE ?></title>
  <meta name="description" content="<?= PAGE_DESC ?>">
  <meta name="robots" content="index, follow">
  <link rel="canonical" href="https://<?= WEBSITE ?>/legal/privacy-policy.php">

  <!-- GTM Head -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','<?= GTM_ID ?>');</script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer">
  <link rel="stylesheet" href="/assets/css/style.css">
  <link rel="stylesheet" href="/assets/css/legal.css">
</head>
<body>
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?= GTM_ID ?>" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<?php include __DIR__ . '/../includes/header.php'; // nav only — reuse existing ?>

<div class="legal-hero">
  <div class="container">
    <div class="breadcrumb"><a href="/">Home</a> <i class="fas fa-chevron-right"></i> <span>Privacy Policy</span></div>
    <h1>Privacy Policy</h1>
    <p>Last updated: <?= date('d F Y') ?> &nbsp;|&nbsp; Effective immediately</p>
  </div>
</div>

<main class="legal-body">
  <div class="container legal-container">

    <div class="legal-toc">
      <h4><i class="fas fa-list"></i> Contents</h4>
      <ol>
        <li><a href="#info-collect">Information We Collect</a></li>
        <li><a href="#how-use">How We Use Your Information</a></li>
        <li><a href="#sharing">Sharing of Information</a></li>
        <li><a href="#cookies">Cookies &amp; Tracking</a></li>
        <li><a href="#data-security">Data Security</a></li>
        <li><a href="#your-rights">Your Rights</a></li>
        <li><a href="#third-party">Third-Party Links</a></li>
        <li><a href="#children">Children's Privacy</a></li>
        <li><a href="#changes">Changes to This Policy</a></li>
        <li><a href="#contact-privacy">Contact Us</a></li>
      </ol>
    </div>

    <div class="legal-content">

      <div class="legal-intro">
        <p><strong><?= BUSINESS_FULL_NAME ?> ("CSDO", "we", "us", or "our")</strong> is committed to protecting your privacy. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website or enquire about our workshops. Please read this policy carefully.</p>
        <p>By submitting an enquiry form or using our website, you agree to the collection and use of information in accordance with this policy. This policy is governed by the <strong>Information Technology Act, 2000</strong> and the <strong>Information Technology (Reasonable Security Practices and Procedures and Sensitive Personal Data or Information) Rules, 2011</strong> of India.</p>
      </div>

      <section id="info-collect">
        <h2>1. Information We Collect</h2>
        <h3>1.1 Information You Provide Directly</h3>
        <p>When you fill our enquiry or booking form, we may collect:</p>
        <ul>
          <li><strong>Full Name</strong> — to address you personally</li>
          <li><strong>Mobile Number</strong> — to contact you about your enquiry</li>
          <li><strong>Email Address</strong> — optional, for sending workshop details</li>
          <li><strong>City</strong> — to understand your travel requirements</li>
          <li><strong>Message / Questions</strong> — to respond to specific queries</li>
        </ul>

        <h3>1.2 Automatically Collected Information</h3>
        <p>When you visit our website, we may automatically collect:</p>
        <ul>
          <li>IP address and browser type</li>
          <li>Pages visited and time spent on the website</li>
          <li>Referring website or traffic source</li>
          <li>Device type (mobile, desktop, tablet)</li>
        </ul>
        <p>This information is collected via <strong>Google Tag Manager (GTM)</strong> and associated tools like Google Analytics.</p>
      </section>

      <section id="how-use">
        <h2>2. How We Use Your Information</h2>
        <p>We use the information we collect to:</p>
        <ul>
          <li>Respond to your enquiry about the workshop</li>
          <li>Send you workshop schedule, fee details and registration information</li>
          <li>Share course updates, batch dates or relevant training opportunities</li>
          <li>Improve our website and communication</li>
          <li>Comply with legal obligations</li>
        </ul>
        <div class="legal-notice">
          <i class="fas fa-shield-alt"></i>
          <p>We will <strong>never</strong> send you unsolicited commercial messages unrelated to CSDO's training programs. You may opt out of any communication at any time by contacting us.</p>
        </div>
      </section>

      <section id="sharing">
        <h2>3. Sharing of Information</h2>
        <p>We do <strong>not</strong> sell, rent, or trade your personal information to any third party. We may share your data only in these limited circumstances:</p>
        <ul>
          <li><strong>Service Providers:</strong> Trusted tools we use to operate our website (e.g., email service, CRM platform), bound by confidentiality agreements</li>
          <li><strong>Legal Compliance:</strong> When required by law, court order, or government authority</li>
          <li><strong>Business Transfers:</strong> In the event of a merger or acquisition, data may transfer to the new entity under the same privacy terms</li>
        </ul>
      </section>

      <section id="cookies">
        <h2>4. Cookies &amp; Tracking Technologies</h2>
        <p>Our website uses cookies and similar tracking technologies through <strong>Google Tag Manager</strong>. These may include:</p>
        <ul>
          <li><strong>Session Cookies:</strong> Temporary cookies that expire when you close your browser</li>
          <li><strong>Analytics Cookies:</strong> Google Analytics cookies to understand website traffic</li>
          <li><strong>Advertising Cookies:</strong> If Google Ads is active, conversion tracking cookies may be placed</li>
        </ul>
        <p>You can instruct your browser to refuse all cookies or indicate when a cookie is being sent. However, some features of the website may not function properly without cookies.</p>
      </section>

      <section id="data-security">
        <h2>5. Data Security</h2>
        <p>We implement reasonable administrative, technical and physical security measures to protect your personal information from unauthorised access, disclosure, alteration or destruction. These include:</p>
        <ul>
          <li>CSRF token protection on all forms</li>
          <li>PHP input sanitisation using <code>htmlspecialchars</code> and <code>filter_var</code></li>
          <li>HTTPS encryption for data in transit</li>
          <li>Restricted server access</li>
        </ul>
        <p>However, no method of transmission over the internet is 100% secure. While we strive to protect your data, we cannot guarantee absolute security.</p>
      </section>

      <section id="your-rights">
        <h2>6. Your Rights</h2>
        <p>Under applicable Indian law, you have the right to:</p>
        <ul>
          <li>Access the personal data we hold about you</li>
          <li>Request correction of inaccurate data</li>
          <li>Request deletion of your personal data (subject to legal obligations)</li>
          <li>Withdraw your consent for communication at any time</li>
        </ul>
        <p>To exercise any of these rights, contact us at <a href="mailto:<?= EMAIL ?>"><?= EMAIL ?></a>.</p>
      </section>

      <section id="third-party">
        <h2>7. Third-Party Links</h2>
        <p>Our website may contain links to third-party websites (e.g., Google Maps). We are not responsible for the privacy practices of those sites. We encourage you to review the privacy policy of every website you visit.</p>
      </section>

      <section id="children">
        <h2>8. Children's Privacy</h2>
        <p>Our website and services are not directed at individuals under the age of 18. We do not knowingly collect personal information from minors. If we become aware that a minor has submitted personal data, we will delete it promptly.</p>
      </section>

      <section id="changes">
        <h2>9. Changes to This Policy</h2>
        <p>We reserve the right to update this Privacy Policy at any time. Changes will be posted on this page with an updated "Last Updated" date. Your continued use of the website after changes are posted constitutes acceptance of the revised policy.</p>
      </section>

      <section id="contact-privacy">
        <h2>10. Contact Us</h2>
        <p>If you have questions or concerns about this Privacy Policy, please contact:</p>
        <div class="legal-contact-box">
          <p><strong><?= BUSINESS_FULL_NAME ?></strong></p>
          <p><i class="fas fa-envelope"></i> <a href="mailto:<?= EMAIL ?>"><?= EMAIL ?></a></p>
          <p><i class="fas fa-phone"></i> <a href="tel:+<?= PHONE ?>"><?= PHONE_DISPLAY ?></a></p>
          <p><i class="fab fa-whatsapp"></i> <a href="https://wa.me/<?= WHATSAPP_NUMBER ?>" target="_blank" rel="noopener">WhatsApp: <?= PHONE_DISPLAY ?></a></p>
          <p><i class="fas fa-globe"></i> <a href="https://<?= WEBSITE ?>" target="_blank" rel="noopener"><?= WEBSITE ?></a></p>
        </div>
      </section>

    </div><!-- /.legal-content -->
  </div><!-- /.legal-container -->
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>
