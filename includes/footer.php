<?php require_once __DIR__ . '/config.php'; ?>

  <!-- ═══════════════════════════════════════════════════════════ FOOTER ════ -->
  <footer id="site-footer">
    <div class="footer-inner">
      <div class="footer-grid">

        <!-- Brand -->
        <div class="footer-col">
          <div class="footer-logo">
            <span class="logo-badge">CSDO</span>
            <span>Soap Masterclass</span>
          </div>
          <p class="footer-tagline">Learn. Create. Pack. Price. Sell.</p>
          <p class="footer-desc">38+ years of skill-based training and entrepreneurship development in India.</p>
          <div class="footer-social">
            <a href="https://wa.me/<?= WHATSAPP_NUMBER ?>" target="_blank" rel="noopener" aria-label="WhatsApp">
              <i class="fab fa-whatsapp"></i>
            </a>
            <a href="tel:+<?= PHONE ?>" aria-label="Call us">
              <i class="fas fa-phone"></i>
            </a>
            <a href="mailto:<?= EMAIL ?>" aria-label="Email us">
              <i class="fas fa-envelope"></i>
            </a>
          </div>
        </div>

        <!-- Quick Links -->
        <div class="footer-col">
          <h4 class="footer-heading">Quick Links</h4>
          <ul class="footer-links">
            <li><a href="#about">About CSDO</a></li>
            <li><a href="#workshop">Workshop</a></li>
            <li><a href="#curriculum">Curriculum</a></li>
            <li><a href="#outcomes">Outcomes</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#faq">FAQ</a></li>
            <li><a href="#book">Book Your Seat</a></li>
          </ul>
        </div>

        <!-- Contact -->
        <div class="footer-col">
          <h4 class="footer-heading">Contact Us</h4>
          <ul class="footer-contact-list">
            <li>
              <i class="fas fa-phone"></i>
              <a href="tel:+<?= PHONE ?>"><?= PHONE_DISPLAY ?></a>
            </li>
            <li>
              <i class="fab fa-whatsapp"></i>
              <a href="https://wa.me/<?= WHATSAPP_NUMBER ?>" target="_blank" rel="noopener">WhatsApp Us</a>
            </li>
            <li>
              <i class="fas fa-envelope"></i>
              <a href="mailto:<?= EMAIL ?>"><?= EMAIL ?></a>
            </li>
            <li>
              <i class="fas fa-globe"></i>
              <a href="https://<?= WEBSITE ?>" target="_blank" rel="noopener"><?= WEBSITE ?></a>
            </li>
            <li>
              <i class="fas fa-map-marker-alt"></i>
              <span>Workshop in <?= WORKSHOP_CITY ?></span>
            </li>
          </ul>
        </div>

        <!-- Workshop Info -->
        <div class="footer-col">
          <h4 class="footer-heading">Workshop Details</h4>
          <ul class="footer-links">
            <li><i class="fas fa-calendar-alt"></i> 3-Day Intensive Course</li>
            <li><i class="fas fa-map-marker-alt"></i> <?= WORKSHOP_CITY ?>, India</li>
            <li><i class="fas fa-certificate"></i> CSDO Certificate Included</li>
            <li><i class="fas fa-users"></i> Batch Size: Limited Seats</li>
            <li><i class="fas fa-star"></i> Beginner Friendly</li>
          </ul>
          <a href="#book" class="btn btn-accent mt-4">Reserve Your Seat →</a>
        </div>
      </div>

      <div class="footer-bottom">
        <p>&copy; <?= date('Y') ?> <?= BUSINESS_FULL_NAME ?>. All rights reserved.</p>
        <nav class="legal-nav" aria-label="Legal pages">
          <a href="legal/privacy-policy.php">Privacy Policy</a>
          <a href="legal/terms-conditions.php">Terms &amp; Conditions</a>
          <a href="legal/disclaimer.php">Disclaimer</a>
          <a href="legal/refund-policy.php">Refund Policy</a>
        </nav>
      </div>
    </div>
  </footer>

  <!-- ═══════════════════════════════════════════════════ FLOATING BUTTONS ════ -->
  <div class="floating-actions" aria-label="Quick contact">
    <!-- WhatsApp -->
    <a href="https://wa.me/<?= WHATSAPP_NUMBER ?>?text=Hi%20CSDO%2C%20I%20am%20interested%20in%20the%203-Day%20Soap%20Making%20Workshop%20in%20Chandigarh.%20Please%20share%20details."
       target="_blank" rel="noopener"
       class="fab-btn fab-whatsapp"
       id="floatWhatsApp"
       aria-label="Chat on WhatsApp">
      <i class="fab fa-whatsapp"></i>
      <span class="fab-tooltip">WhatsApp Us</span>
    </a>

    <!-- Call -->
    <a href="tel:+<?= PHONE ?>"
       class="fab-btn fab-call"
       id="floatCall"
       aria-label="Call Now">
      <i class="fas fa-phone"></i>
      <span class="fab-tooltip">Call Now</span>
    </a>
  </div>

  <!-- ─── Scroll to Top ──────────────────────────────────────────────────── -->
  <button class="scroll-top" id="scrollTop" aria-label="Scroll to top">
    <i class="fas fa-chevron-up"></i>
  </button>

  <!-- ─── Scripts ───────────────────────────────────────────────────────── -->
  <script src="assets/js/main.js" defer></script>
</body>
</html>
