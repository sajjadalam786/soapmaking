/* main.js — CSDO Soap Making Workshop */
(function () {
  'use strict';

  /* ── Sticky nav shadow ──────────────────────────────────────────────────── */
  const header = document.getElementById('site-header');
  window.addEventListener('scroll', () => {
    header.classList.toggle('scrolled', window.scrollY > 10);
  }, { passive: true });

  /* ── Mobile nav toggle ──────────────────────────────────────────────────── */
  const navToggle = document.getElementById('navToggle');
  const navMenu   = document.getElementById('navMenu');
  navToggle?.addEventListener('click', () => {
    const open = navMenu.classList.toggle('open');
    navToggle.classList.toggle('open', open);
    navToggle.setAttribute('aria-expanded', open);
    document.body.style.overflow = open ? 'hidden' : '';
  });
  // Close on link click (including mobile CTA)
  navMenu?.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', () => {
      navMenu.classList.remove('open');
      navToggle?.classList.remove('open');
      navToggle?.setAttribute('aria-expanded', 'false');
      document.body.style.overflow = '';
    });
  });
  // Close on mobile CTA click
  document.querySelector('.nav-mobile-cta')?.addEventListener('click', () => {
    navMenu?.classList.remove('open');
    navToggle?.classList.remove('open');
    navToggle?.setAttribute('aria-expanded', 'false');
    document.body.style.overflow = '';
  });

  /* ── Active nav link on scroll ──────────────────────────────────────────── */
  const sections = document.querySelectorAll('section[id]');
  const navLinks  = document.querySelectorAll('.nav-link');
  const obs = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        navLinks.forEach(l => {
          l.classList.toggle('active', l.getAttribute('href') === '#' + e.target.id);
        });
      }
    });
  }, { threshold: 0.35 });
  sections.forEach(s => obs.observe(s));

  /* ── Scroll-to-top ──────────────────────────────────────────────────────── */
  const scrollTopBtn = document.getElementById('scrollTop');
  window.addEventListener('scroll', () => {
    scrollTopBtn?.classList.toggle('visible', window.scrollY > 400);
  }, { passive: true });
  scrollTopBtn?.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));

  /* ── FAQ Accordion ──────────────────────────────────────────────────────── */
  document.querySelectorAll('.faq-question').forEach(btn => {
    btn.addEventListener('click', () => {
      const item     = btn.closest('.faq-item');
      const isOpen   = item.classList.contains('open');
      // Close all
      document.querySelectorAll('.faq-item.open').forEach(el => el.classList.remove('open'));
      // Toggle current
      if (!isOpen) {
        item.classList.add('open');
        btn.setAttribute('aria-expanded', 'true');
      } else {
        btn.setAttribute('aria-expanded', 'false');
      }
    });
  });

  /* ── Reveal on scroll ───────────────────────────────────────────────────── */
  const revealObs = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) { e.target.classList.add('revealed'); revealObs.unobserve(e.target); }
    });
  }, { threshold: 0.12 });
  document.querySelectorAll(
    '.why-card, .day-card, .curriculum-card, .outcome-item, .receive-card, .gallery-item, .testimonial-card, .faq-item'
  ).forEach(el => {
    el.style.opacity = '0';
    el.style.transform = 'translateY(20px)';
    el.style.transition = 'opacity .5s ease, transform .5s ease';
    revealObs.observe(el);
  });
  document.addEventListener('animationend', () => {});
  // Add revealed class handler
  const style = document.createElement('style');
  style.textContent = '.revealed { opacity: 1 !important; transform: none !important; }';
  document.head.appendChild(style);

  /* ── Form handler ───────────────────────────────────────────────────────── */
  function handleForm(formId, msgId, btnId) {
    const form = document.getElementById(formId);
    if (!form) return;
    const msgEl = document.getElementById(msgId);
    const btn   = document.getElementById(btnId);

    form.addEventListener('submit', async (e) => {
      e.preventDefault();
      msgEl.className = 'form-msg';
      msgEl.style.display = 'none';

      // Basic client-side validation
      const phone = form.phone?.value?.trim();
      if (!/^[6-9]\d{9}$/.test(phone)) {
        showMsg(msgEl, 'Please enter a valid 10-digit Indian mobile number.', 'error');
        return;
      }

      btn.disabled = true;
      btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Submitting...';

      try {
        const res  = await fetch('/process.php', {
          method: 'POST',
          body: new FormData(form),
          headers: { 'X-Requested-With': 'XMLHttpRequest' },
        });
        const data = await res.json();

        if (data.success) {
          showMsg(msgEl, data.message, 'success');
          form.reset();
          // GTM event
          if (window.dataLayer) {
            window.dataLayer.push({ event: 'lead_submitted', form_id: formId });
          }
        } else {
          showMsg(msgEl, data.message || 'Something went wrong. Please try again.', 'error');
        }
      } catch {
        showMsg(msgEl, 'Network error. Please call us at +91 89203 09257.', 'error');
      } finally {
        btn.disabled = false;
        btn.innerHTML = '<i class="fas fa-paper-plane"></i> ' + (formId === 'heroLeadForm' ? 'Book My Seat — It\'s Free to Enquire' : 'Submit Enquiry — Reserve My Seat');
      }
    });
  }

  function showMsg(el, text, type) {
    el.textContent   = text;
    el.className     = 'form-msg ' + type;
    el.style.display = 'block';
    el.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
  }

  handleForm('heroLeadForm', 'heroFormMsg', 'heroSubmitBtn');
  handleForm('bookLeadForm',  'bookFormMsg', 'bookSubmitBtn');

  /* ── Phone number input: digits only ───────────────────────────────────── */
  document.querySelectorAll('input[name="phone"]').forEach(input => {
    input.addEventListener('input', () => {
      input.value = input.value.replace(/\D/g, '').slice(0, 10);
    });
  });

})();
