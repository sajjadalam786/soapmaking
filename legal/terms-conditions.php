<?php
require_once __DIR__ . '/../includes/config.php';
session_start();
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
define('PAGE_TITLE', 'Terms & Conditions | CSDO Soap Making Workshop Chandigarh');
define('PAGE_DESC',  'Terms and Conditions for CSDO\'s 3-Day Soap Making Business Masterclass in Chandigarh. Read our workshop policies, payment terms, and participant guidelines.');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= PAGE_TITLE ?></title>
  <meta name="description" content="<?= PAGE_DESC ?>">
  <meta name="robots" content="index, follow">
  <link rel="canonical" href="https://<?= WEBSITE ?>/legal/terms-conditions.php">

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
    <div class="breadcrumb"><a href="/">Home</a> <i class="fas fa-chevron-right"></i> <span>Terms &amp; Conditions</span></div>
    <h1>Terms &amp; Conditions</h1>
    <p>Last updated: <?= date('d F Y') ?> &nbsp;|&nbsp; Please read before registering</p>
  </div>
</div>

<main class="legal-body">
  <div class="container legal-container">

    <div class="legal-toc">
      <h4><i class="fas fa-list"></i> Contents</h4>
      <ol>
        <li><a href="#acceptance">Acceptance of Terms</a></li>
        <li><a href="#workshop-info">Workshop Information</a></li>
        <li><a href="#registration">Registration &amp; Seat Booking</a></li>
        <li><a href="#payment">Payment Terms</a></li>
        <li><a href="#cancellation">Cancellation &amp; Rescheduling</a></li>
        <li><a href="#conduct">Participant Conduct</a></li>
        <li><a href="#ip">Intellectual Property</a></li>
        <li><a href="#liability">Limitation of Liability</a></li>
        <li><a href="#photos">Photography &amp; Media</a></li>
        <li><a href="#governing">Governing Law</a></li>
        <li><a href="#contact-terms">Contact</a></li>
      </ol>
    </div>

    <div class="legal-content">

      <div class="legal-intro">
        <p>These Terms and Conditions ("Terms") govern your registration and participation in workshops, courses and training programs offered by <strong><?= BUSINESS_FULL_NAME ?> ("CSDO")</strong>. By submitting an enquiry, registering, or attending any CSDO workshop, you confirm that you have read, understood, and agreed to these Terms.</p>
      </div>

      <section id="acceptance">
        <h2>1. Acceptance of Terms</h2>
        <p>By accessing this website or registering for any CSDO program, you agree to be bound by these Terms and Conditions, our Privacy Policy, and any additional guidelines posted on this website. If you do not agree, please do not proceed with registration.</p>
      </section>

      <section id="workshop-info">
        <h2>2. Workshop Information</h2>
        <p>CSDO's <strong>3-Day Soap Making Business Masterclass</strong> is an offline, practical skill training program. Key details:</p>
        <ul>
          <li>Duration: 3 consecutive days</li>
          <li>Location: <?= WORKSHOP_CITY ?>, India (exact venue shared upon registration)</li>
          <li>Mode: In-person, hands-on practical training</li>
          <li>Language: Hindi / English (as per batch requirement)</li>
          <li>Batch Size: Limited — confirmed on first-come, first-served basis</li>
        </ul>
        <p>CSDO reserves the right to make changes to the workshop schedule, content, venue, or trainer due to operational requirements, without prior notice, while maintaining the overall learning objectives.</p>
      </section>

      <section id="registration">
        <h2>3. Registration &amp; Seat Booking</h2>
        <ul>
          <li>Registration is complete only upon receipt of the registration fee (as communicated by CSDO).</li>
          <li>Submitting an enquiry form does not guarantee a seat. A seat is confirmed only after fee payment and written/verbal confirmation from CSDO.</li>
          <li>CSDO may reject any registration at its sole discretion without obligation to provide a reason.</li>
          <li>Participants must be 18 years or older, or accompanied by a guardian.</li>
          <li>Accurate personal information must be provided during registration. CSDO is not responsible for communication failures due to incorrect details.</li>
        </ul>
      </section>

      <section id="payment">
        <h2>4. Payment Terms</h2>
        <ul>
          <li>Workshop fees are communicated directly by CSDO at the time of enquiry and are subject to change per batch.</li>
          <li>Payment must be completed as per the schedule communicated by CSDO (full payment or deposit as applicable).</li>
          <li>Fees are to be paid via bank transfer, UPI, or other methods shared by CSDO at time of registration.</li>
          <li>Fee once paid is non-transferable to another person without prior written approval from CSDO.</li>
          <li>All fees are inclusive of GST where applicable, unless stated otherwise.</li>
        </ul>
        <div class="legal-notice warning">
          <i class="fas fa-exclamation-triangle"></i>
          <p>Participants are advised to keep payment confirmation receipts safely for their records.</p>
        </div>
      </section>

      <section id="cancellation">
        <h2>5. Cancellation &amp; Rescheduling</h2>
        <h3>5.1 Cancellation by Participant</h3>
        <ul>
          <li><strong>More than 7 days before workshop:</strong> Full refund or transfer to next batch (processing fee may apply)</li>
          <li><strong>3–7 days before workshop:</strong> 50% refund or transfer to next batch</li>
          <li><strong>Less than 3 days / No-show:</strong> No refund. Rescheduling subject to seat availability in the next batch at CSDO's discretion</li>
        </ul>
        <h3>5.2 Cancellation or Postponement by CSDO</h3>
        <p>If CSDO cancels or postpones a workshop due to unavoidable circumstances (natural calamity, government orders, health emergency, insufficient registrations, or force majeure), registered participants will be offered:</p>
        <ul>
          <li>A full transfer to the next available batch, <strong>or</strong></li>
          <li>A full refund within 7 working days</li>
        </ul>
        <p>CSDO shall not be liable for any travel, accommodation, or other expenses incurred by the participant as a result of such cancellation.</p>
      </section>

      <section id="conduct">
        <h2>6. Participant Conduct</h2>
        <p>All participants are expected to maintain a respectful and professional environment during the workshop. The following are not permitted:</p>
        <ul>
          <li>Disruptive or aggressive behaviour towards trainers or fellow participants</li>
          <li>Recording of workshop sessions (video/audio) without prior written consent from CSDO</li>
          <li>Sharing, reproducing or distributing CSDO's proprietary training material</li>
          <li>Attending under the influence of substances</li>
        </ul>
        <p>CSDO reserves the right to remove any participant whose conduct is deemed disruptive or inappropriate, without refund.</p>
      </section>

      <section id="ip">
        <h2>7. Intellectual Property</h2>
        <p>All workshop content, study materials, recipes, methods, branding, and documentation provided by CSDO are the exclusive intellectual property of <strong><?= BUSINESS_FULL_NAME ?></strong>. Participants are granted a personal, non-commercial licence to use the knowledge gained. You may not:</p>
        <ul>
          <li>Reproduce, distribute, or resell CSDO's training materials</li>
          <li>Use CSDO's name, logo, or branding without written permission</li>
          <li>Create derivative training programs based on CSDO's proprietary content for commercial use</li>
        </ul>
      </section>

      <section id="liability">
        <h2>8. Limitation of Liability</h2>
        <p>CSDO's workshops are educational in nature. We do not guarantee specific business results, income, or outcomes from applying the skills learned. Business success depends on individual effort, market conditions, and multiple other factors.</p>
        <ul>
          <li>CSDO is not liable for any direct, indirect, or incidental loss resulting from participation or non-participation in the workshop</li>
          <li>CSDO is not responsible for personal injury, loss, or damage to personal property during the workshop, except in cases of CSDO's direct negligence</li>
          <li>Maximum liability of CSDO under any circumstance shall not exceed the workshop fee paid by the participant</li>
        </ul>
      </section>

      <section id="photos">
        <h2>9. Photography &amp; Media</h2>
        <p>CSDO may photograph or record workshop sessions for educational and promotional purposes. By attending, participants consent to their image being used in CSDO's marketing materials (website, social media, brochures). If you wish to opt out, please notify us in writing at least 48 hours before the workshop begins.</p>
      </section>

      <section id="governing">
        <h2>10. Governing Law</h2>
        <p>These Terms are governed by the laws of India. Any dispute arising out of or related to these Terms shall be subject to the exclusive jurisdiction of the courts located in <strong>New Delhi, India</strong>. Parties agree to attempt resolution through mutual discussion before initiating legal proceedings.</p>
      </section>

      <section id="contact-terms">
        <h2>11. Contact Us</h2>
        <p>For any questions about these Terms &amp; Conditions:</p>
        <div class="legal-contact-box">
          <p><strong><?= BUSINESS_FULL_NAME ?></strong></p>
          <p><i class="fas fa-envelope"></i> <a href="mailto:<?= EMAIL ?>"><?= EMAIL ?></a></p>
          <p><i class="fas fa-phone"></i> <a href="tel:+<?= PHONE ?>"><?= PHONE_DISPLAY ?></a></p>
          <p><i class="fab fa-whatsapp"></i> <a href="https://wa.me/<?= WHATSAPP_NUMBER ?>" target="_blank" rel="noopener">WhatsApp: <?= PHONE_DISPLAY ?></a></p>
        </div>
      </section>

    </div>
  </div>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>
