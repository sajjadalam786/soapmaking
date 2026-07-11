<?php
require_once __DIR__ . '/../includes/config.php';
session_start();
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
define('PAGE_TITLE', 'Disclaimer | CSDO Soap Making Workshop');
define('PAGE_DESC',  'Read CSDO\'s Disclaimer for the 3-Day Soap Making Business Masterclass. Understand the scope of our training, income claims, and limitation of liability.');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= PAGE_TITLE ?></title>
  <meta name="description" content="<?= PAGE_DESC ?>">
  <meta name="robots" content="index, follow">
  <link rel="canonical" href="https://<?= WEBSITE ?>/legal/disclaimer.php">

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
    <div class="breadcrumb"><a href="/">Home</a> <i class="fas fa-chevron-right"></i> <span>Disclaimer</span></div>
    <h1>Disclaimer</h1>
    <p>Last updated: <?= date('d F Y') ?> &nbsp;|&nbsp; Important — please read carefully</p>
  </div>
</div>

<main class="legal-body">
  <div class="container legal-container">

    <div class="legal-toc">
      <h4><i class="fas fa-list"></i> Contents</h4>
      <ol>
        <li><a href="#general">General Disclaimer</a></li>
        <li><a href="#no-income">No Income or Earnings Guarantee</a></li>
        <li><a href="#testimonials-disc">Testimonials Disclaimer</a></li>
        <li><a href="#health-safety">Health &amp; Safety</a></li>
        <li><a href="#results">Results Vary</a></li>
        <li><a href="#accuracy">Website Content Accuracy</a></li>
        <li><a href="#external-links">External Links</a></li>
        <li><a href="#professional-advice">Not Professional/Legal Advice</a></li>
        <li><a href="#contact-disc">Contact</a></li>
      </ol>
    </div>

    <div class="legal-content">

      <div class="legal-intro">
        <p>This Disclaimer applies to all information, content, services, and training programs offered by <strong><?= BUSINESS_FULL_NAME ?> ("CSDO")</strong> through this website and its workshops. Please read this carefully before using this website or participating in any CSDO program.</p>
      </div>

      <section id="general">
        <h2>1. General Disclaimer</h2>
        <p>The information provided on this website is for <strong>general informational and educational purposes only</strong>. While CSDO makes every effort to keep the information accurate and up to date, we make no representations or warranties of any kind, express or implied, about the completeness, accuracy, reliability, suitability, or availability of the information, products, services, or related material.</p>
        <p>Any reliance you place on such information is therefore strictly at your own risk.</p>
      </section>

      <section id="no-income">
        <h2>2. No Income or Earnings Guarantee</h2>
        <div class="legal-notice warning">
          <i class="fas fa-exclamation-triangle"></i>
          <p><strong>Important:</strong> CSDO does not guarantee any specific income, revenue, business success, or financial results from attending our workshops.</p>
        </div>
        <p>Our 3-Day Soap Making Business Masterclass teaches practical product-making skills, basic business knowledge, costing guidance, and packing ideas. However:</p>
        <ul>
          <li>Business success depends on individual effort, market conditions, capital investment, local demand, competition, and many other factors beyond CSDO's control</li>
          <li>Any mention of earning potential on this website or during workshops is illustrative in nature and represents general industry possibilities, not guaranteed outcomes</li>
          <li>CSDO is not responsible for any business decisions made by participants based on information provided in our training programs</li>
        </ul>
      </section>

      <section id="testimonials-disc">
        <h2>3. Testimonials Disclaimer</h2>
        <p>Any testimonials or success stories shared on this website or in our marketing materials represent individual experiences. These results are <strong>not typical</strong> and may not reflect the experience of all participants.</p>
        <ul>
          <li>Testimonials are provided voluntarily by past students</li>
          <li>CSDO does not claim that every participant will achieve similar results</li>
          <li>Individual results will vary based on effort, application, and individual circumstances</li>
        </ul>
      </section>

      <section id="health-safety">
        <h2>4. Health &amp; Safety</h2>
        <p>Soap making involves the use of chemicals, fragrances, and other materials that may cause reactions in sensitive individuals. CSDO takes reasonable precautions to ensure workshop safety; however:</p>
        <ul>
          <li>Participants with known allergies or skin sensitivities must inform CSDO before attending</li>
          <li>CSDO trainers follow safety protocols, especially for Cold Process soap (lye handling), but participants follow all instructions at their own risk</li>
          <li>Participants are advised to follow all safety instructions provided during the workshop without exception</li>
          <li>CSDO shall not be liable for any adverse reactions, injuries, or health issues arising from workshop participation, provided reasonable safety instructions were given and available</li>
        </ul>
      </section>

      <section id="results">
        <h2>5. Results Vary</h2>
        <p>The knowledge and skills taught in CSDO workshops are intended to provide a foundation for soap making and related business activities. The quality of products made by participants post-workshop may vary based on:</p>
        <ul>
          <li>Quality of raw materials sourced independently</li>
          <li>Individual skill development after training</li>
          <li>Adherence to techniques taught</li>
          <li>Local environmental conditions (humidity, temperature)</li>
        </ul>
        <p>CSDO does not guarantee that all participants will produce products of identical quality to those demonstrated during training.</p>
      </section>

      <section id="accuracy">
        <h2>6. Website Content Accuracy</h2>
        <p>While CSDO endeavours to keep website content current and accurate, information such as workshop dates, fees, venue details, and curriculum content may be subject to change. Always contact CSDO directly for the most up-to-date information before making any decisions or payments.</p>
      </section>

      <section id="external-links">
        <h2>7. External Links</h2>
        <p>This website may contain links to external websites (e.g., Google Maps). These links are provided for convenience only. CSDO has no control over the content of those sites and accepts no responsibility for them or for any loss or damage that may arise from your use of them.</p>
      </section>

      <section id="professional-advice">
        <h2>8. Not Professional or Legal Advice</h2>
        <p>Nothing on this website constitutes legal, financial, medical, or professional business advice. The business guidance, costing examples, and vendor information provided during CSDO workshops are for general educational reference only. You should seek appropriate professional advice before making any significant business or financial decisions.</p>
      </section>

      <section id="contact-disc">
        <h2>9. Contact Us</h2>
        <p>If you have questions about this Disclaimer:</p>
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
