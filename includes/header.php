<?php require_once __DIR__ . '/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- ── SEO ───────────────────────────────────────────────────────────────── -->
  <title><?= META_TITLE ?></title>
  <meta name="description" content="<?= META_DESC ?>">
  <meta name="keywords"    content="<?= META_KEYWORD ?>">
  <meta name="robots"      content="index, follow">
  <link rel="canonical"    href="https://<?= WEBSITE ?>/">

  <!-- ── Open Graph ────────────────────────────────────────────────────────── -->
  <meta property="og:type"        content="website">
  <meta property="og:title"       content="<?= META_TITLE ?>">
  <meta property="og:description" content="<?= META_DESC ?>">
  <meta property="og:image"       content="<?= OG_IMAGE ?>">
  <meta property="og:url"         content="https://<?= WEBSITE ?>/">

  <!-- ── GTM Head ──────────────────────────────────────────────────────────── -->
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','<?= GTM_ID ?>');</script>
  <!-- End Google Tag Manager -->

  <!-- ── Fonts ─────────────────────────────────────────────────────────────── -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- ── Icons ─────────────────────────────────────────────────────────────── -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdab5F8tMn4L1i2sSSVXdCjwk4SvGJWuVzZhASijxz3XfGnzwaBEefNF8PuK0fVhyB+w==" crossorigin="anonymous" referrerpolicy="no-referrer">

  <!-- ── Stylesheet ────────────────────────────────────────────────────────── -->
  <link rel="stylesheet" href="/assets/css/style.css">

  <!-- ── Structured Data ───────────────────────────────────────────────────── -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "EducationEvent",
    "name": "<?= WORKSHOP_NAME ?>",
    "description": "<?= META_DESC ?>",
    "organizer": {
      "@type": "Organization",
      "name": "<?= BUSINESS_FULL_NAME ?>",
      "telephone": "<?= PHONE ?>",
      "email": "<?= EMAIL ?>"
    },
    "location": {
      "@type": "Place",
      "name": "<?= WORKSHOP_CITY ?>"
    },
    "eventStatus": "https://schema.org/EventScheduled",
    "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode"
  }
  </script>
</head>

<body>
  <!-- ── GTM Body ───────────────────────────────────────────────────────────── -->
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?= GTM_ID ?>"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <!-- ═══════════════════════════════════════════════════════ NAVIGATION ════ -->
  <header id="site-header">
    <div class="nav-container">
      <!-- Logo -->
      <a href="#hero" class="nav-logo" aria-label="CSDO Home">
        <span class="logo-badge">CSDO</span>
        <span class="logo-text">Soap Masterclass</span>
      </a>

      <!-- Hamburger (mobile) -->
      <button class="nav-toggle" id="navToggle" aria-label="Toggle navigation" aria-expanded="false">
        <span></span><span></span><span></span>
      </button>

      <!-- Nav Links -->
      <nav class="nav-menu" id="navMenu" role="navigation" aria-label="Main navigation">
        <a href="#about"      class="nav-link">About Us</a>
        <a href="#workshop"   class="nav-link">Workshop</a>
        <a href="#curriculum" class="nav-link">Curriculum</a>
        <a href="#outcomes"   class="nav-link">Outcomes</a>
        <a href="#gallery"    class="nav-link">Gallery</a>
        <a href="#faq"        class="nav-link">FAQ</a>
        <a href="#contact"    class="nav-link">Contact</a>
        <a href="#book"       class="nav-cta-btn">Book Seat</a>
      </nav>
    </div>
  </header>
