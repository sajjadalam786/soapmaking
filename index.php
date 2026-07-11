<?php
require_once __DIR__ . '/includes/config.php';
session_start();

// Generate CSRF token
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
$csrf = $_SESSION['csrf_token'];
?>
<?php include __DIR__ . '/includes/header.php'; ?>

<!-- ═══════════════════════════════════════════════════════════ HERO ═════════ -->
<section id="hero" class="hero-section">
  <div class="hero-bg">
    <!-- IMAGE PLACEHOLDER: Replace with hero workshop photo (1920×1080 recommended) -->
    <div class="hero-img-placeholder" aria-hidden="true">
      <span>Hero Image — Workshop in Action</span>
    </div>
    <div class="hero-overlay"></div>
  </div>

  <div class="container hero-content">
    <!-- Trust Badge -->
    <div class="trust-badge animate-fadeInDown">
      <i class="fas fa-award"></i>
      <span>38+ Years of Skill Training Excellence</span>
    </div>

    <h1 class="hero-heading animate-fadeInUp">
      3-Day Soap Making<br>
      <span class="accent-text">Business Masterclass</span>
    </h1>

    <p class="hero-tagline animate-fadeInUp delay-1">
      Learn. Create. Pack. Price. Sell.
    </p>

    <p class="hero-subtext animate-fadeInUp delay-2">
      Turn your creativity into a profitable handmade product business.<br>
      Chandigarh's most practical soap making workshop — by <strong>CSDO</strong>
    </p>

    <!-- Micro Proof Row -->
    <div class="hero-proof animate-fadeInUp delay-2">
      <div class="proof-item"><i class="fas fa-certificate"></i> CSDO Certificate</div>
      <div class="proof-item"><i class="fas fa-hands"></i> 100% Practical</div>
      <div class="proof-item"><i class="fas fa-rupee-sign"></i> Costing & Pricing Guide</div>
      <div class="proof-item"><i class="fas fa-users"></i> Batch Seats Limited</div>
    </div>

    <!-- Hero Lead Form -->
    <div class="hero-form-card animate-fadeInUp delay-3" id="hero-form-anchor">
      <h3>Reserve Your Seat Today</h3>
      <form id="heroLeadForm" class="lead-form" novalidate>
        <input type="hidden" name="csrf_token" value="<?= $csrf ?>">
        <div class="form-row">
          <div class="form-group">
            <label for="h_name">Full Name *</label>
            <input type="text" id="h_name" name="name" placeholder="Your full name" required autocomplete="name">
          </div>
          <div class="form-group">
            <label for="h_phone">Mobile Number *</label>
            <input type="tel" id="h_phone" name="phone" placeholder="10-digit mobile" required autocomplete="tel" maxlength="10">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group">
            <label for="h_email">Email Address</label>
            <input type="email" id="h_email" name="email" placeholder="your@email.com" autocomplete="email">
          </div>
          <div class="form-group">
            <label for="h_city">Your City</label>
            <input type="text" id="h_city" name="city" placeholder="City you're from">
          </div>
        </div>
        <div id="heroFormMsg" class="form-msg" role="alert" aria-live="polite"></div>
        <button type="submit" class="btn btn-cta btn-full" id="heroSubmitBtn">
          <i class="fas fa-paper-plane"></i> Book My Seat — It's Free to Enquire
        </button>
        <p class="form-note"><i class="fas fa-lock"></i> Your information is 100% secure. No spam, ever.</p>
      </form>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════ PRODUCTS STRIP ════ -->
<section class="products-strip">
  <div class="container">
    <div class="strip-grid">
      <div class="strip-item"><i class="fas fa-soap"></i><span>Melt &amp; Pour Soap</span></div>
      <div class="strip-item"><i class="fas fa-flask"></i><span>Cold Process Soap</span></div>
      <div class="strip-item"><i class="fas fa-bath"></i><span>Bath Salt</span></div>
      <div class="strip-item"><i class="fas fa-bomb"></i><span>Bath Bomb</span></div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════ WHY ════════── -->
<section id="about" class="section-pad bg-cream">
  <div class="container">
    <div class="section-label">About The Workshop</div>
    <h2 class="section-heading">Why This Workshop?</h2>
    <p class="section-subtext">Soap making is not just a creative skill — it is a profitable product category with demand in gifting, salons, spas, boutiques, exhibitions and online selling.</p>

    <div class="why-grid">
      <div class="why-card">
        <div class="why-icon"><i class="fas fa-video"></i></div>
        <h3>Beyond Online Videos</h3>
        <p>Many people watch tutorials online but still feel confused about the right method, raw materials, costing and product quality. We fix that with hands-on learning.</p>
      </div>
      <div class="why-card">
        <div class="why-icon"><i class="fas fa-briefcase"></i></div>
        <h3>Business-Oriented Approach</h3>
        <p>We teach both product making and product selling. Not just recipes — but costing, pricing, packing, branding and startup direction.</p>
      </div>
      <div class="why-card">
        <div class="why-icon"><i class="fas fa-chart-line"></i></div>
        <h3>High Market Demand</h3>
        <p>Handmade bath products are in demand for gifting, salons, spas, boutiques, exhibitions, festive hampers and online business — a growing and profitable niche.</p>
      </div>
      <div class="why-card">
        <div class="why-icon"><i class="fas fa-hands-helping"></i></div>
        <h3>Simple &amp; Practical Teaching</h3>
        <p>CSDO's teaching method is practical, simple and business-focused. Students understand both the product and the process — with confidence.</p>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════════════ WORKSHOP ══════ -->
<section id="workshop" class="section-pad bg-dark">
  <div class="container">
    <div class="section-label light">3-Day Structure</div>
    <h2 class="section-heading light">What You Will Make</h2>
    <p class="section-subtext light">A hands-on, full practical training covering 4 premium handmade bath products from raw material to finished, packaged product.</p>

    <div class="workshop-overview-grid">
      <!-- Day Overview Cards -->
      <div class="day-card">
        <div class="day-number">Day 1</div>
        <h3>Melt &amp; Pour Soap Foundation</h3>
        <ul>
          <li>Transparent &amp; Opaque Soap</li>
          <li>Herbal, Charcoal, Neem Soaps</li>
          <li>Aloe Vera, Turmeric, Papaya Soap</li>
          <li>Colours, Fragrances &amp; Moulds</li>
          <li>Designer &amp; Layered Soap</li>
          <li>Gift Soap Concepts</li>
        </ul>
      </div>
      <div class="day-card">
        <div class="day-number">Day 2</div>
        <h3>Bath Salt, Bath Bomb &amp; CP Intro</h3>
        <ul>
          <li>Spa Bath Salt Making</li>
          <li>Herbal &amp; Layered Bath Salt</li>
          <li>Bath Bomb – Fizz &amp; Binding</li>
          <li>Drying &amp; Storage Methods</li>
          <li>Cold Process Soap Introduction</li>
          <li>Lye Safety &amp; Saponification</li>
        </ul>
      </div>
      <div class="day-card featured-day">
        <div class="day-number">Day 3</div>
        <h3>CP Revision + Business Module</h3>
        <ul>
          <li>CP Soap Revision &amp; Advanced Techniques</li>
          <li>Swirl &amp; Designer CP Soap</li>
          <li>Cutting, Curing &amp; Storage</li>
          <li>Costing &amp; Pricing Guidance</li>
          <li>Packing &amp; Branding Tips</li>
          <li>Vendor &amp; Raw Material Guidance</li>
        </ul>
        <div class="day-badge">Business Focus</div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════ CURRICULUM ═══════ -->
<section id="curriculum" class="section-pad bg-cream">
  <div class="container">
    <div class="section-label">Full Curriculum</div>
    <h2 class="section-heading">What You Will Learn</h2>

    <div class="curriculum-grid">

      <!-- M&P -->
      <div class="curriculum-card">
        <div class="curr-header">
          <!-- IMAGE PLACEHOLDER: Melt & Pour Soap photo (600×400) -->
          <div class="curr-img-placeholder"><span>Melt &amp; Pour Soap Image</span></div>
          <div class="curr-number">01</div>
        </div>
        <div class="curr-body">
          <h3>Melt &amp; Pour Soap Making</h3>
          <p>The easiest and most creative way to start handmade soap making. Perfect for beginners and gifting businesses.</p>
          <ul class="curr-list">
            <li>Transparent &amp; Opaque Soap</li>
            <li>Herbal, Charcoal, Neem Soap</li>
            <li>Aloe Vera, Turmeric, Papaya Soap</li>
            <li>Layered &amp; Scrub Soap</li>
            <li>Designer &amp; Gift Soap Concepts</li>
            <li>Colours, Fragrances &amp; Moulds</li>
          </ul>
        </div>
      </div>

      <!-- CP -->
      <div class="curriculum-card">
        <div class="curr-header">
          <!-- IMAGE PLACEHOLDER: Cold Process Soap photo (600×400) -->
          <div class="curr-img-placeholder"><span>Cold Process Soap Image</span></div>
          <div class="curr-number">02</div>
        </div>
        <div class="curr-body">
          <h3>Cold Process Soap Making</h3>
          <p>Premium and professional soap-making method. Learn the science, safety and creativity of CP soap with full confidence.</p>
          <ul class="curr-list">
            <li>Oils, Butters &amp; Lye Safety</li>
            <li>Saponification &amp; Trace Stage</li>
            <li>Herbal &amp; Milk Soap Concepts</li>
            <li>Designer Swirl Techniques</li>
            <li>Cutting, Curing &amp; Storage</li>
            <li>Special Revision on Day 3</li>
          </ul>
        </div>
      </div>

      <!-- Bath Salt -->
      <div class="curriculum-card">
        <div class="curr-header">
          <!-- IMAGE PLACEHOLDER: Bath Salt photo (600×400) -->
          <div class="curr-img-placeholder"><span>Bath Salt Image</span></div>
          <div class="curr-number">03</div>
        </div>
        <div class="curr-body">
          <h3>Bath Salt Making</h3>
          <p>Beautiful, easy to make and highly suitable for gifting, spa use and premium bath care collections.</p>
          <ul class="curr-list">
            <li>Types of Salts</li>
            <li>Essential Oils &amp; Fragrances</li>
            <li>Herbs, Flowers &amp; Colouring</li>
            <li>Layered Spa Bath Salt</li>
            <li>Packing &amp; Presentation Ideas</li>
          </ul>
        </div>
      </div>

      <!-- Bath Bomb -->
      <div class="curriculum-card">
        <div class="curr-header">
          <!-- IMAGE PLACEHOLDER: Bath Bomb photo (600×400) -->
          <div class="curr-img-placeholder"><span>Bath Bomb Image</span></div>
          <div class="curr-number">04</div>
        </div>
        <div class="curr-body">
          <h3>Bath Bomb Making</h3>
          <p>Trending, attractive and perfect for gifting, kids' products, bath care collections and festive hampers.</p>
          <ul class="curr-list">
            <li>Ingredients &amp; Fizzing Concept</li>
            <li>Binding Method</li>
            <li>Oils, Colours &amp; Fragrance</li>
            <li>How to Avoid Cracking</li>
            <li>Drying, Storage &amp; Premium Packing</li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ═════════════════════════════════════════════════════════ OUTCOMES ═══════ -->
<section id="outcomes" class="section-pad bg-green">
  <div class="container">
    <div class="section-label light">After the Workshop</div>
    <h2 class="section-heading light">Workshop Outcomes</h2>
    <p class="section-subtext light">After completing this 3-day workshop, you will have the knowledge, skill and confidence to create, price and sell premium handmade bath products.</p>

    <div class="outcomes-grid">
      <?php
        $outcomes = [
          ['fas fa-check-circle', 'Make Melt & Pour soaps confidently'],
          ['fas fa-check-circle', 'Understand Cold Process soap making safely'],
          ['fas fa-check-circle', 'Create premium bath salts and bath bombs'],
          ['fas fa-check-circle', 'Select the right raw materials'],
          ['fas fa-check-circle', 'Use colours, fragrances and additives correctly'],
          ['fas fa-check-circle', 'Understand basic costing and pricing'],
          ['fas fa-check-circle', 'Create giftable bath product collections'],
          ['fas fa-check-circle', 'Pack products professionally'],
          ['fas fa-check-circle', 'Start a home-based handmade product business'],
        ];
        foreach ($outcomes as $o): ?>
        <div class="outcome-item">
          <i class="<?= $o[0] ?>"></i>
          <span><?= $o[1] ?></span>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Who Can Join -->
    <div class="who-join-block">
      <h3>Who Can Join?</h3>
      <div class="who-grid">
        <?php
          $who = ['Beginners','Homemakers','Women Entrepreneurs','Students',
                  'Salon Owners','Spa Owners','Boutique Owners','Gift Hamper Makers',
                  'Cosmetic Business Owners','Small Business Owners','Home Business Starters','Handmade Product Lovers'];
          foreach ($who as $w): ?>
          <div class="who-tag"><i class="fas fa-user-check"></i><?= $w ?></div>
        <?php endforeach; ?>
      </div>
      <p class="who-note"><i class="fas fa-info-circle"></i> No previous experience is required. This workshop is designed for complete beginners.</p>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════════════ WHY CSDO ════════ -->
<section class="section-pad bg-white">
  <div class="container">
    <div class="csdo-split">
      <div class="csdo-text">
        <div class="section-label">Why Choose Us</div>
        <h2 class="section-heading">Why CSDO?</h2>
        <p>CSDO brings more than <strong>38 years of experience</strong> in skill-based training and entrepreneurship development. Our teaching method is practical, simple and business-oriented.</p>
        <p>We do not only teach recipes. We help students understand the <strong>product, the process and the business</strong>.</p>

        <div class="csdo-features">
          <?php
            $features = [
              ['fas fa-book-open',      'Correct product knowledge'],
              ['fas fa-hands',          'Hands-on practical learning'],
              ['fas fa-exclamation-triangle', 'Common mistakes &amp; solutions'],
              ['fas fa-calculator',     'Costing &amp; pricing guidance'],
              ['fas fa-box-open',       'Packing &amp; presentation ideas'],
              ['fas fa-truck',          'Vendor &amp; raw material guidance'],
              ['fas fa-rocket',         'Business startup direction'],
              ['fas fa-heart',          'Confidence building'],
            ];
            foreach ($features as $f): ?>
            <div class="csdo-feature">
              <i class="<?= $f[0] ?>"></i>
              <span><?= $f[1] ?></span>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="csdo-img-col">
        <!-- IMAGE PLACEHOLDER: CSDO Training photo (800×600) -->
        <div class="csdo-img-placeholder"><span>CSDO Training Photo</span></div>
        <div class="csdo-stat-card">
          <div class="stat"><span class="stat-num">38+</span><span class="stat-label">Years Experience</span></div>
          <div class="stat"><span class="stat-num">4</span><span class="stat-label">Products Taught</span></div>
          <div class="stat"><span class="stat-num">100%</span><span class="stat-label">Practical Training</span></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════════════ RECEIVE ═══════ -->
<section class="section-pad bg-cream">
  <div class="container">
    <div class="section-label">Included in Workshop</div>
    <h2 class="section-heading">What Students Will Receive</h2>
    <div class="receive-grid">
      <?php
        $receives = [
          ['fas fa-chalkboard-teacher', 'Practical Training',        'Full hands-on practical training across all 4 products'],
          ['fas fa-certificate',        'CSDO Certificate',          'Official certificate from CSDO upon course completion'],
          ['fas fa-book',               'Study Material',            'Complete study notes and reference material'],
          ['fas fa-truck',              'Vendor Guidance',           'Raw material vendor contacts and sourcing guidance'],
          ['fas fa-calculator',         'Costing Guidance',          'Product costing, pricing structure and profit margins'],
          ['fas fa-box',                'Packing &amp; Branding Tips','Professional packing ideas and branding direction'],
          ['fas fa-rocket',             'Business Startup Guidance', 'How to launch your handmade product business'],
          ['fas fa-comments',           'Doubt-Clearing Support',    'Post-workshop support for questions and doubts'],
          ['fas fa-store',              'Product Display Knowledge', 'How to display and present your products for sale'],
        ];
        foreach ($receives as $r): ?>
        <div class="receive-card">
          <div class="receive-icon"><i class="<?= $r[0] ?>"></i></div>
          <h4><?= $r[1] ?></h4>
          <p><?= $r[2] ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════ GALLERY ══════ -->
<section id="gallery" class="section-pad bg-dark">
  <div class="container">
    <div class="section-label light">Gallery</div>
    <h2 class="section-heading light">Products &amp; Workshop Moments</h2>
    <p class="section-subtext light">Real products made by our students. Each item is crafted with professional technique and business-grade presentation.</p>

    <div class="gallery-grid">
      <!-- IMAGE PLACEHOLDERS: Replace with actual product/workshop photos -->
      <?php for ($i = 1; $i <= 6; $i++): ?>
      <div class="gallery-item" id="gallery-item-<?= $i ?>">
        <div class="gallery-img-placeholder">
          <i class="fas fa-image"></i>
          <span>Gallery Image <?= $i ?></span>
        </div>
        <div class="gallery-overlay">
          <span><?php $labels = ['Melt &amp; Pour Soap','Cold Process Soap','Bath Salt','Bath Bomb','Workshop Moments','Product Packing']; echo $labels[$i-1]; ?></span>
        </div>
      </div>
      <?php endfor; ?>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════ TESTIMONIALS ════ -->
<section class="section-pad bg-cream">
  <div class="container">
    <div class="section-label">Student Reviews</div>
    <h2 class="section-heading">What Our Students Say</h2>

    <div class="testimonials-grid">
      <!-- PLACEHOLDER: Replace with real testimonials -->
      <?php
        $testimonials = [
          ['Priya Sharma',      'Chandigarh',     'I joined with zero experience and by Day 3 I was making cold process soaps confidently. The business module was the best part — I now sell at local exhibitions!', 5],
          ['Ritu Kapoor',       'Delhi',          'The trainer explained everything so clearly. The vendor guidance and costing support helped me launch my bath product brand within a month of the workshop.', 5],
          ['Anita Mehta',       'Panchkula',      'CSDO\'s approach is very different — they actually care about your success. I learned 4 products in 3 days and came back with a clear plan to start my business.', 5],
        ];
        foreach ($testimonials as $t): ?>
        <div class="testimonial-card">
          <!-- IMAGE PLACEHOLDER: Student photo (100×100) -->
          <div class="testimonial-avatar"><i class="fas fa-user-circle"></i></div>
          <div class="stars">
            <?php for ($s = 0; $s < $t[3]; $s++) echo '<i class="fas fa-star"></i>'; ?>
          </div>
          <blockquote>"<?= $t[0] === "Anita Mehta" ? htmlspecialchars($t[2], ENT_QUOTES) : $t[2] ?>"</blockquote>
          <div class="testimonial-name"><?= $t[0] ?></div>
          <div class="testimonial-city"><i class="fas fa-map-marker-alt"></i> <?= $t[1] ?></div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════════════════ FAQ ═══════ -->
<section id="faq" class="section-pad bg-white">
  <div class="container faq-container">
    <div class="section-label">FAQ</div>
    <h2 class="section-heading">Frequently Asked Questions</h2>

    <?php
      $faqs = [
        ['Is this course suitable for beginners?',
         'Yes. This workshop is designed in a simple step-by-step manner. Even if you have no previous experience, you can join and learn with confidence.'],
        ['What products will I learn?',
         'You will learn Melt & Pour Soap, Cold Process Soap, Bath Salt and Bath Bomb — four premium handmade bath products with full practical training.'],
        ['Will Cold Process Soap be difficult?',
         'Cold Process soap is technical, but we teach it with proper safety explanation and revision. Day 3 morning is specially dedicated to CP soap revision so students feel confident.'],
        ['Will I get a certificate?',
         'Yes. All students will receive an official certificate from CSDO upon completing the 3-day workshop.'],
        ['Will I learn costing and packing?',
         'Yes. We provide guidance on basic product costing, pricing structure, professional packing ideas and product presentation.'],
        ['Can I start a business after this workshop?',
         'Yes. This workshop is specifically designed to help students understand both product making and business basics so they can launch from home or add products to an existing business.'],
        ['Do I need to bring anything?',
         'Basic requirements will be informed before the workshop. Students may bring a notebook, pen and apron if they wish. All materials are provided during training.'],
        ['Is this workshop useful for salon or spa owners?',
         'Absolutely. Salon, spa and boutique owners can add handmade soaps, bath salts and bath bombs to their retail product range — great for business expansion.'],
        ['Will vendor guidance be provided?',
         'Yes. Students will receive basic vendor and raw material guidance so they can source quality ingredients at the right price after the workshop.'],
        ['How can I book my seat?',
         'Contact CSDO by phone or WhatsApp at ' . PHONE_DISPLAY . ' or fill the enquiry form on this page. Seats are limited — early booking is recommended.'],
      ];
      foreach ($faqs as $i => $faq): ?>
      <div class="faq-item" id="faq-<?= $i + 1 ?>">
        <button class="faq-question" aria-expanded="false" aria-controls="faq-answer-<?= $i + 1 ?>">
          <span><?= $faq[0] ?></span>
          <i class="fas fa-plus faq-icon"></i>
        </button>
        <div class="faq-answer" id="faq-answer-<?= $i + 1 ?>" role="region">
          <p><?= $faq[1] ?></p>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════ CONTACT ══════ -->
<section id="contact" class="section-pad bg-cream">
  <div class="container">
    <div class="section-label">Get In Touch</div>
    <h2 class="section-heading">Contact CSDO</h2>

    <div class="contact-grid">
      <!-- Contact Details -->
      <div class="contact-info">
        <div class="contact-detail">
          <div class="contact-icon"><i class="fas fa-phone-alt"></i></div>
          <div>
            <strong>Call Us</strong>
            <a href="tel:+<?= PHONE ?>"><?= PHONE_DISPLAY ?></a>
          </div>
        </div>
        <div class="contact-detail">
          <div class="contact-icon whatsapp"><i class="fab fa-whatsapp"></i></div>
          <div>
            <strong>WhatsApp</strong>
            <a href="https://wa.me/<?= WHATSAPP_NUMBER ?>?text=Hi%20CSDO%2C%20I%27m%20interested%20in%20the%20Soap%20Making%20Workshop." target="_blank" rel="noopener"><?= PHONE_DISPLAY ?></a>
          </div>
        </div>
        <div class="contact-detail">
          <div class="contact-icon email"><i class="fas fa-envelope"></i></div>
          <div>
            <strong>Email</strong>
            <a href="mailto:<?= EMAIL ?>"><?= EMAIL ?></a>
          </div>
        </div>
        <div class="contact-detail">
          <div class="contact-icon web"><i class="fas fa-globe"></i></div>
          <div>
            <strong>Website</strong>
            <a href="https://<?= WEBSITE ?>" target="_blank" rel="noopener"><?= WEBSITE ?></a>
          </div>
        </div>
        <div class="contact-detail">
          <div class="contact-icon map"><i class="fas fa-map-marker-alt"></i></div>
          <div>
            <strong>Workshop Location</strong>
            <span><?= WORKSHOP_CITY ?>, India</span>
          </div>
        </div>

        <!-- CTA buttons -->
        <div class="contact-cta-row">
          <a href="tel:+<?= PHONE ?>" class="btn btn-primary"><i class="fas fa-phone"></i> Call Now</a>
          <a href="https://wa.me/<?= WHATSAPP_NUMBER ?>?text=Hi%20CSDO%2C%20I%27m%20interested%20in%20the%20Soap%20Making%20Workshop." class="btn btn-whatsapp" target="_blank" rel="noopener"><i class="fab fa-whatsapp"></i> WhatsApp</a>
        </div>
      </div>

      <!-- Google Map -->
      <div class="map-container">
        <iframe
          src="<?= MAPS_EMBED ?>"
          width="100%"
          height="100%"
          style="border:0;"
          allowfullscreen
          loading="lazy"
          referrerpolicy="strict-origin-when-cross-origin"
          title="CSDO Location Map"
          aria-label="CSDO Office Location on Google Maps">
        </iframe>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════ BOOK / LEAD FORM ══════ -->
<section id="book" class="section-pad bg-green">
  <div class="container">
    <div class="book-split">
      <div class="book-text">
        <div class="section-label light">Limited Seats</div>
        <h2 class="section-heading light">Ready to Start Your Soap Business?</h2>
        <p class="light-text">Learn a beautiful skill. Create premium handmade products. Understand costing and packing. Start your own bath product business with confidence.</p>
        <div class="book-highlights">
          <div class="bh-item"><i class="fas fa-calendar-check"></i>3-Day Intensive Workshop</div>
          <div class="bh-item"><i class="fas fa-map-marker-alt"></i><?= WORKSHOP_CITY ?>, India</div>
          <div class="bh-item"><i class="fas fa-certificate"></i>Certificate Included</div>
          <div class="bh-item"><i class="fas fa-users"></i>Batch Seats: Limited</div>
        </div>
      </div>

      <!-- Full Contact Form -->
      <div class="book-form-card" id="book">
        <h3>Book Your Seat</h3>
        <form id="bookLeadForm" class="lead-form" novalidate>
          <input type="hidden" name="csrf_token" value="<?= $csrf ?>">
          <div class="form-group">
            <label for="b_name">Full Name *</label>
            <input type="text" id="b_name" name="name" placeholder="Your full name" required autocomplete="name">
          </div>
          <div class="form-group">
            <label for="b_phone">Mobile Number *</label>
            <input type="tel" id="b_phone" name="phone" placeholder="10-digit mobile number" required autocomplete="tel" maxlength="10">
          </div>
          <div class="form-group">
            <label for="b_email">Email Address</label>
            <input type="email" id="b_email" name="email" placeholder="your@email.com" autocomplete="email">
          </div>
          <div class="form-group">
            <label for="b_city">Your City</label>
            <input type="text" id="b_city" name="city" placeholder="City you're currently in">
          </div>
          <div class="form-group">
            <label for="b_message">Any Questions? (Optional)</label>
            <textarea id="b_message" name="message" rows="3" placeholder="Any specific questions about the workshop..."></textarea>
          </div>
          <div id="bookFormMsg" class="form-msg" role="alert" aria-live="polite"></div>
          <button type="submit" class="btn btn-cta btn-full" id="bookSubmitBtn">
            <i class="fas fa-paper-plane"></i> Submit Enquiry — Reserve My Seat
          </button>
          <p class="form-note"><i class="fas fa-lock"></i> 100% secure. We never spam or share your details.</p>
        </form>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
