<?php
require_once __DIR__ . '/../includes/config.php';
session_start();
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
define('PAGE_TITLE', 'Refund Policy | CSDO Soap Making Workshop Chandigarh');
define('PAGE_DESC',  'CSDO\'s Refund and Cancellation Policy for the 3-Day Soap Making Business Masterclass. Understand our refund timelines, cancellation process, and workshop rescheduling terms.');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= PAGE_TITLE ?></title>
  <meta name="description" content="<?= PAGE_DESC ?>">
  <meta name="robots" content="index, follow">
  <link rel="canonical" href="https://<?= WEBSITE ?>/legal/refund-policy.php">

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

<?php include __DIR__ . '/../includes/header.php'; ?>

<div class="legal-hero">
  <div class="container">
    <div class="breadcrumb"><a href="/">Home</a> <i class="fas fa-chevron-right"></i> <span>Refund Policy</span></div>
    <h1>Refund &amp; Cancellation Policy</h1>
    <p>Last updated: <?= date('d F Y') ?> &nbsp;|&nbsp; Applies to all CSDO workshop registrations</p>
  </div>
</div>

<main class="legal-body">
  <div class="container legal-container">

    <div class="legal-toc">
      <h4><i class="fas fa-list"></i> Contents</h4>
      <ol>
        <li><a href="#overview">Policy Overview</a></li>
        <li><a href="#refund-schedule">Refund Schedule</a></li>
        <li><a href="#how-cancel">How to Request a Cancellation</a></li>
        <li><a href="#reschedule">Rescheduling to Next Batch</a></li>
        <li><a href="#csdo-cancel">If CSDO Cancels the Workshop</a></li>
        <li><a href="#non-refundable">Non-Refundable Situations</a></li>
        <li><a href="#process">Refund Processing</a></li>
        <li><a href="#disputes">Dispute Resolution</a></li>
        <li><a href="#contact-refund">Contact for Refunds</a></li>
      </ol>
    </div>

    <div class="legal-content">

      <div class="legal-intro">
        <p>At <strong><?= BUSINESS_FULL_NAME ?> (CSDO)</strong>, we understand that plans can change. This Refund and Cancellation Policy outlines the process and timelines for refunds and rescheduling for our workshop registrations. We encourage you to read this policy carefully before registering.</p>
      </div>

      <section id="overview">
        <h2>1. Policy Overview</h2>
        <p>This policy applies to all registrations for CSDO's <strong>3-Day Soap Making Business Masterclass</strong> and any other workshops offered by CSDO. The policy is designed to be fair to both participants and CSDO, given the advance preparation involved in organising hands-on training sessions.</p>
        <div class="legal-notice">
          <i class="fas fa-info-circle"></i>
          <p>A seat is confirmed only after payment is received. Enquiry form submission alone does not constitute registration or entitle you to a refund.</p>
        </div>
      </section>

      <section id="refund-schedule">
        <h2>2. Refund Schedule</h2>
        <p>The following refund schedule applies from the date of your written cancellation request to CSDO, relative to the workshop start date:</p>

        <div class="refund-table-wrapper">
          <table class="refund-table">
            <thead>
              <tr>
                <th>Cancellation Timeline</th>
                <th>Refund Entitlement</th>
                <th>Rescheduling Option</th>
              </tr>
            </thead>
            <tbody>
              <tr class="green-row">
                <td><strong>More than 7 days before workshop</strong></td>
                <td>Full refund (minus payment processing fee, if any)</td>
                <td>Yes — free transfer to next batch</td>
              </tr>
              <tr class="yellow-row">
                <td><strong>3 to 7 days before workshop</strong></td>
                <td>50% refund of workshop fee paid</td>
                <td>Yes — with 10% admin fee</td>
              </tr>
              <tr class="red-row">
                <td><strong>Less than 3 days before workshop</strong></td>
                <td>No refund</td>
                <td>Subject to seat availability in next batch</td>
              </tr>
              <tr class="red-row">
                <td><strong>No-show / Absent without notice</strong></td>
                <td>No refund</td>
                <td>No</td>
              </tr>
            </tbody>
          </table>
        </div>
        <p class="table-note"><i class="fas fa-info-circle"></i> "Workshop start date" refers to Day 1 of the specific batch you registered for. All timelines are calculated in calendar days.</p>
      </section>

      <section id="how-cancel">
        <h2>3. How to Request a Cancellation</h2>
        <p>To request a cancellation or refund, please follow these steps:</p>
        <ol class="ordered-steps">
          <li><strong>Contact CSDO in writing</strong> — Send an email to <a href="mailto:<?= EMAIL ?>"><?= EMAIL ?></a> or send a WhatsApp message to <a href="https://wa.me/<?= WHATSAPP_NUMBER ?>" target="_blank" rel="noopener"><?= PHONE_DISPLAY ?></a></li>
          <li><strong>Include your details:</strong> Full name, registered mobile number, workshop date, and reason for cancellation</li>
          <li><strong>Provide payment proof:</strong> Attach your payment receipt or screenshot</li>
          <li><strong>Await confirmation:</strong> CSDO will acknowledge your cancellation request within 48 working hours</li>
        </ol>
        <div class="legal-notice warning">
          <i class="fas fa-exclamation-triangle"></i>
          <p>Cancellation requests must be made in writing (email or WhatsApp message). Verbal requests made by phone alone will not be accepted as formal cancellation notices.</p>
        </div>
      </section>

      <section id="reschedule">
        <h2>4. Rescheduling to Next Batch</h2>
        <p>If you are unable to attend your registered batch but would like to attend a future session, you may request a batch transfer subject to the following conditions:</p>
        <ul>
          <li>Transfer request must be made at least 3 days before the workshop start date</li>
          <li>Transfer is subject to seat availability in the next batch</li>
          <li>One free transfer is permitted if requested more than 7 days in advance</li>
          <li>A second transfer or late transfer may incur an admin fee of ₹500 or 10% of workshop fee (whichever is higher)</li>
          <li>Transferred registrations cannot be further transferred to another person</li>
          <li>If no suitable batch is available within 6 months, CSDO will process a refund as per the applicable schedule above</li>
        </ul>
      </section>

      <section id="csdo-cancel">
        <h2>5. If CSDO Cancels or Postpones the Workshop</h2>
        <p>In the event that CSDO cancels or postpones a workshop due to circumstances including but not limited to: insufficient registrations, natural disaster, government orders, public health emergency, or venue unavailability — registered participants will receive:</p>
        <ul>
          <li><strong>Option A:</strong> Full transfer to the next available batch at no additional cost</li>
          <li><strong>Option B:</strong> Full refund of the workshop fee paid, processed within 7–10 working days</li>
        </ul>
        <p>CSDO will notify all registered participants via phone/WhatsApp/email as soon as practicable.</p>
        <div class="legal-notice warning">
          <i class="fas fa-exclamation-triangle"></i>
          <p>CSDO shall not be liable for travel, accommodation, or other third-party expenses incurred by participants in connection with attending the workshop.</p>
        </div>
      </section>

      <section id="non-refundable">
        <h2>6. Non-Refundable Situations</h2>
        <p>The following situations are <strong>not eligible</strong> for refunds under any circumstances:</p>
        <ul>
          <li>Failure to attend without prior cancellation notice</li>
          <li>Participant removal due to misconduct or violation of workshop rules</li>
          <li>Participant dissatisfaction based on personal expectations that are not aligned with the published workshop curriculum</li>
          <li>Partial attendance (e.g., attending Day 1 only) — no partial refunds are issued</li>
          <li>Changes in personal circumstances that do not constitute a force majeure event</li>
        </ul>
      </section>

      <section id="process">
        <h2>7. Refund Processing</h2>
        <ul>
          <li>Approved refunds will be processed within <strong>7–10 working days</strong> from the date of approval</li>
          <li>Refunds will be issued to the original payment method (bank account / UPI ID) used at the time of registration</li>
          <li>CSDO is not responsible for delays caused by banking systems, payment gateways, or incorrect bank details provided by the participant</li>
          <li>Any payment gateway or transaction processing fees deducted at the time of original payment are non-refundable</li>
        </ul>
      </section>

      <section id="disputes">
        <h2>8. Dispute Resolution</h2>
        <p>In case of any dispute regarding refunds or cancellations:</p>
        <ul>
          <li>The participant should first contact CSDO directly to resolve the matter amicably</li>
          <li>CSDO will respond to all formal refund disputes within 5 working days</li>
          <li>If unresolved, disputes shall be governed by the laws of India and subject to the jurisdiction of courts in New Delhi</li>
        </ul>
      </section>

      <section id="contact-refund">
        <h2>9. Contact for Refund Requests</h2>
        <p>For all refund and cancellation requests, please contact CSDO directly:</p>
        <div class="legal-contact-box">
          <p><strong><?= BUSINESS_FULL_NAME ?></strong></p>
          <p><i class="fas fa-envelope"></i> <a href="mailto:<?= EMAIL ?>"><?= EMAIL ?></a></p>
          <p><i class="fas fa-phone"></i> <a href="tel:+<?= PHONE ?>"><?= PHONE_DISPLAY ?></a></p>
          <p><i class="fab fa-whatsapp"></i> <a href="https://wa.me/<?= WHATSAPP_NUMBER ?>" target="_blank" rel="noopener">WhatsApp: <?= PHONE_DISPLAY ?></a></p>
          <p class="contact-hours"><i class="fas fa-clock"></i> Available: Monday – Saturday, 10:00 AM – 6:00 PM IST</p>
        </div>
      </section>

    </div>
  </div>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>
