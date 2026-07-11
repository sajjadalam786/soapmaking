# CSDO — 3-Day Soap Making Business Masterclass
**Landing Page — Chandigarh Workshop**

---

## Folder Structure

```
soapmaking/
├── index.php                       ← Main landing page (single-page, all sections)
├── process.php                     ← Form handler (CRM webhook + email fallback)
├── includes/
│   ├── config.php                  ← All business config, GTM, SEO constants
│   ├── header.php                  ← <head>, GTM, meta tags, sticky nav (8 links)
│   └── footer.php                  ← Footer + legal links + floating WhatsApp + Call
├── legal/
│   ├── privacy-policy.php          ← Privacy Policy (IT Act 2000 compliant)
│   ├── terms-conditions.php        ← Terms & Conditions (workshop rules + payments)
│   ├── disclaimer.php              ← Disclaimer (no income guarantee, health safety)
│   └── refund-policy.php           ← Refund & Cancellation Policy (tiered schedule)
└── assets/
    ├── css/
    │   ├── style.css               ← Complete design system (tokens + components)
    │   └── legal.css               ← Legal page styles (ToC sidebar, refund table)
    ├── js/main.js                  ← Vanilla JS (nav, accordion, scroll, AJAX forms)
    └── images/                     ← Add your images here (see placeholders below)
```

---

## Image Placeholders to Replace

| Placeholder Label               | Recommended Size | Section          |
|---------------------------------|------------------|------------------|
| Hero Image — Workshop in Action | 1920 × 1080 px   | Hero background  |
| Melt & Pour Soap Image          | 600 × 400 px     | Curriculum card  |
| Cold Process Soap Image         | 600 × 400 px     | Curriculum card  |
| Bath Salt Image                 | 600 × 400 px     | Curriculum card  |
| Bath Bomb Image                 | 600 × 400 px     | Curriculum card  |
| CSDO Training Photo             | 800 × 600 px     | Why CSDO section |
| Gallery Images 1–6              | 800 × 600 px     | Gallery section  |
| Student Photos (testimonials)   | 100 × 100 px     | Testimonials     |

---

## CRM Integration

Set `CRM_ENDPOINT` in `includes/config.php` when ready:
```php
define('CRM_ENDPOINT', 'https://your-n8n-or-crm-endpoint.com/webhook/xxx');
```
Until then, leads are emailed to `csdosahiba@gmail.com` via PHP `mail()`.

---

## Tracking

- **GTM ID**: `GTM-MQWJSBWP` (already embedded in header + body)
- On successful form submit → GTM `dataLayer.push({ event: 'lead_submitted' })`

---

## SEO Target Keyword

**Primary**: `soap making workshop chandigarh`  
**Secondary**: `handmade soap business course`, `cold process soap class chandigarh`, `bath bomb making workshop`

---

## Server Requirements

- PHP 7.4+
- `mail()` or SMTP configured (for fallback email)
- `curl` extension (for CRM webhook)
- HTTPS recommended

---

## Design System

| Token | Value |
|-------|-------|
| Background | `#FDFAF4` (warm cream) |
| Primary | `#2A5C34` (forest green) |
| Gold | `#C4902A` |
| CTA | `#E85D1A` (terracotta) |
| Font Serif | Playfair Display |
| Font Sans | Inter |

---

*Built for Google Ads compliance — no misleading claims, clear business info, privacy note on forms.*