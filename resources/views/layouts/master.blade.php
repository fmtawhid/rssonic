<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- SEO Meta Tags -->
<title>{{ $seoTitle ?? 'RS Emblem | Advanced Materials & Machinery – Bangladesh' }}</title>
<meta name="description" content="{{ $seoDescription ?? 'RS Emblem offers advanced printing materials, high-performance polymers, TPU heat transfer systems, and industrial machinery solutions for Bangladesh and globally.' }}">
<meta name="keywords" content="{{ $seoKeywords ?? 'industrial materials, machinery solutions, printing materials, polymers, TPU heat transfer, Bangladesh' }}">
<meta name="robots" content="index, follow">
<link rel="canonical" href="{{ url()->current() }}">

<!-- Open Graph Meta Tags -->
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $seoTitle ?? 'RS Emblem | Advanced Materials & Machinery' }}">
<meta property="og:description" content="{{ $seoDescription ?? 'Premium industrial materials and machinery solutions.' }}">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:image" content="{{ asset('assets/og-image.jpg') }}">
<meta property="og:site_name" content="RS Emblem">

<!-- Twitter Card Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $seoTitle ?? 'RS Emblem' }}">
<meta name="twitter:description" content="{{ $seoDescription ?? 'Advanced materials and machinery solutions.' }}">
<meta name="twitter:image" content="{{ asset('assets/og-image.jpg') }}">

<!-- Favicon -->
<link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
<link rel="apple-touch-icon" href="{{ asset('assets/apple-touch-icon.png') }}">

<!-- Fonts & Styles -->
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;600;700;800;900&family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="{{ asset('assets/style.css') }}">

<!-- HSTS Header (via meta tag) -->
<meta http-equiv="Strict-Transport-Security" content="max-age=31536000; includeSubDomains">

<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com" defer></script>
</head>
<body>

<nav class="main-nav">
  <a href="{{ route('home') }}" class="nav-logo">
    <div class="logo-mark">RS</div>
    <div class="logo-text">
      RS Emblem<br>
      <span>New Materials Technology</span>
    </div>
  </a>

  <ul class="nav-links" id="navLinks">
    <li><a href="{{ route('home') }}">Home</a></li>
    <li><a href="{{ route('about') }}">About</a></li>

    <li class="nav-dropdown-wrapper">
      <button id="productBtn" class="nav-dropdown-btn">
        Products <i class="fas fa-chevron-down"></i>
      </button>

      <ul id="productDropdown" class="nav-dropdown-menu hidden">
        <li><a href="{{ route('machinery') }}">Machinery</a></li>
        <li><a href="{{ route('materials') }}">Raw Materials</a></li>
      </ul>
    </li>

    <li><a href="{{ route('solutions') }}">Solutions</a></li>
    <li><a href="{{ route('blog') }}">Blog</a></li>
    <li><a href="{{ route('contact') }}" class="nav-cta">Contact Now</a></li>
  </ul>

  <div class="hamburger" id="hamburger">
    <span></span><span></span><span></span>
  </div>
</nav>

<!-- ================= MOBILE BOTTOM MENU ================= -->
<div class="mobile-bottom-nav">
  <a href="{{ route('home') }}" class="item">
    <i class="fas fa-home"></i>
    <span>Home</span>
  </a>

  <a href="{{ route('about') }}" class="item">
    <i class="fas fa-user"></i>
    <span>About</span>
  </a>

  <a href="{{ route('machinery') }}" class="item">
    <i class="fas fa-boxes"></i>
    <span>Machinery</span>
  </a>

  <a href="{{ route('materials') }}" class="item">
    <i class="fas fa-cogs"></i>
    <span>Materials</span>
  </a>

  <a href="{{ route('contact') }}" class="item">
    <i class="fas fa-phone"></i>
    <span>Contact</span>
  </a>
</div>

<!-- ================= STYLE ================= -->
<style>
/* Desktop nav */
.main-nav {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

/* hide mobile bottom nav by default */
.mobile-bottom-nav {
  display: none;
}

/* bottom nav design */
.mobile-bottom-nav {
  position: fixed;
  bottom: 0;
  left: 0;
  width: 100%;
  background: #fff;
  border-top: 1px solid #ddd;
  z-index: 999;
  display: none;
  justify-content: space-around;
  padding: 8px 0;
}

.mobile-bottom-nav .item {
  display: flex;
  flex-direction: column;
  align-items: center;
  font-size: 12px;
  color: #444;
  text-decoration: none;
}

.mobile-bottom-nav .item i {
  font-size: 18px;
  margin-bottom: 3px;
}

/* ================= RESPONSIVE ================= */
@media (max-width: 700px) {

  /* hide desktop nav links */
  .nav-links {
    display: none;
  }

  /* show hamburger */
  .hamburger {
    display: block;
  }

  /* show bottom menu */
  .mobile-bottom-nav {
    display: flex;
  }
}
</style>
@yield('content')



<!-- Footer -->
<footer id="contact" style="margin-top: 0; padding: 60px 0 20px 0; background: linear-gradient(135deg, #16213e 0%, #0f3460 100%); position: relative; z-index: 10;">
  <div class="container">
    <!-- Main Footer Grid -->
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 40px; margin-bottom: 40px;">
      
      <!-- Brand Section -->
      <div>
        <div class="logo-mark" style="margin-bottom: 16px; display: inline-block;">RS</div>
        <h4 style="color: white; font-weight: 800; margin-bottom: 12px; font-size: 18px;">RS Emblem</h4>
        <p style="color: rgba(255, 255, 255, 0.7); font-size: 14px; line-height: 1.7; margin: 0;">Advanced printing materials & industrial solutions for manufacturing excellence.</p>
      </div>

      <!-- Navigation -->
      <div>
        <h4 style="color: var(--primary-red); margin-bottom: 16px; font-size: 16px; font-weight: 800; text-transform: uppercase; letter-spacing: 0.5px;">Quick Links</h4>
        <ul style="list-style: none; line-height: 2; padding: 0; margin: 0;">
          <li><a href="{{ route('home') }}" style="color: rgba(255, 255, 255, 0.75); text-decoration: none; font-size: 14px; transition: color 0.2s;" onmouseover="this.style.color='var(--primary-red)'" onmouseout="this.style.color='rgba(255, 255, 255, 0.75)'">Home</a></li>
          <li><a href="{{ route('about') }}" style="color: rgba(255, 255, 255, 0.75); text-decoration: none; font-size: 14px; transition: color 0.2s;" onmouseover="this.style.color='var(--primary-red)'" onmouseout="this.style.color='rgba(255, 255, 255, 0.75)'">About</a></li>
          <li><a href="{{ route('machinery') }}" style="color: rgba(255, 255, 255, 0.75); text-decoration: none; font-size: 14px; transition: color 0.2s;" onmouseover="this.style.color='var(--primary-red)'" onmouseout="this.style.color='rgba(255, 255, 255, 0.75)'">Machinery</a></li>
          <li><a href="{{ route('materials') }}" style="color: rgba(255, 255, 255, 0.75); text-decoration: none; font-size: 14px; transition: color 0.2s;" onmouseover="this.style.color='var(--primary-red)'" onmouseout="this.style.color='rgba(255, 255, 255, 0.75)'">Materials</a></li>
          <li><a href="{{ route('solutions') }}" style="color: rgba(255, 255, 255, 0.75); text-decoration: none; font-size: 14px; transition: color 0.2s;" onmouseover="this.style.color='var(--primary-red)'" onmouseout="this.style.color='rgba(255, 255, 255, 0.75)'">Solutions</a></li>
          <li><a href="{{ route('blog') }}" style="color: rgba(255, 255, 255, 0.75); text-decoration: none; font-size: 14px; transition: color 0.2s;" onmouseover="this.style.color='var(--primary-red)'" onmouseout="this.style.color='rgba(255, 255, 255, 0.75)'">Blog</a></li>
        </ul>
      </div>

      <!-- Contact Information -->
      <div>
        <h4 style="color: var(--primary-red); margin-bottom: 16px; font-size: 16px; font-weight: 800; text-transform: uppercase; letter-spacing: 0.5px;">Contact</h4>
        <div style="space-y: 12px;">
          <p style="color: rgba(255, 255, 255, 0.75); font-size: 14px; line-height: 1.8; margin-bottom: 10px; display: flex; align-items: flex-start; gap: 10px;">
            <i class="fas fa-map-marker-alt" style="color: var(--primary-red); margin-top: 2px; flex-shrink: 0;"></i>
            <span>Hazi Chan Miah Tower, Zirabo, Ashulia, Savar, Dhaka-1341</span>
          </p>
          <p style="color: rgba(255, 255, 255, 0.75); font-size: 14px; margin-bottom: 10px; display: flex; align-items: center; gap: 10px;">
            <i class="fas fa-phone-alt" style="color: var(--primary-red);"></i>
            <a href="tel:+8801931669605" style="color: rgba(255, 255, 255, 0.75); text-decoration: none; transition: color 0.2s;" onmouseover="this.style.color='var(--primary-red)'" onmouseout="this.style.color='rgba(255, 255, 255, 0.75)'">+880 1931 669605</a>
          </p>
          <p style="color: rgba(255, 255, 255, 0.75); font-size: 14px; margin-bottom: 0; display: flex; align-items: center; gap: 10px;">
            <i class="fas fa-envelope" style="color: var(--primary-red);"></i>
            <a href="mailto:rsemblem2022@gmail.com" style="color: rgba(255, 255, 255, 0.75); text-decoration: none; transition: color 0.2s; word-break: break-word;" onmouseover="this.style.color='var(--primary-red)'" onmouseout="this.style.color='rgba(255, 255, 255, 0.75)'">rsemblem2022@gmail.com</a>
          </p>
        </div>
      </div>

      <!-- Social & CTA -->
      <div>
        <h4 style="color: var(--primary-red); margin-bottom: 16px; font-size: 16px; font-weight: 800; text-transform: uppercase; letter-spacing: 0.5px;">Follow Us</h4>
        <div style="display: flex; gap: 12px; margin-bottom: 20px;">
          <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" title="Facebook" style="display: inline-flex; align-items: center; justify-content: center; width: 40px; height: 40px; background-color: rgba(255, 255, 255, 0.1); color: rgba(255, 255, 255, 0.8); border: 2px solid transparent; border-radius: 50%; transition: all 0.3s ease; font-size: 16px;" onmouseover="this.style.backgroundColor='var(--primary-red)'; this.style.color='white'; this.style.borderColor='var(--primary-red)';" onmouseout="this.style.backgroundColor='rgba(255, 255, 255, 0.1)'; this.style.color='rgba(255, 255, 255, 0.8)'; this.style.borderColor='transparent';">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="https://twitter.com" target="_blank" rel="noopener noreferrer" title="Twitter" style="display: inline-flex; align-items: center; justify-content: center; width: 40px; height: 40px; background-color: rgba(255, 255, 255, 0.1); color: rgba(255, 255, 255, 0.8); border: 2px solid transparent; border-radius: 50%; transition: all 0.3s ease; font-size: 16px;" onmouseover="this.style.backgroundColor='#1DA1F2'; this.style.color='white'; this.style.borderColor='#1DA1F2';" onmouseout="this.style.backgroundColor='rgba(255, 255, 255, 0.1)'; this.style.color='rgba(255, 255, 255, 0.8)'; this.style.borderColor='transparent';">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" title="LinkedIn" style="display: inline-flex; align-items: center; justify-content: center; width: 40px; height: 40px; background-color: rgba(255, 255, 255, 0.1); color: rgba(255, 255, 255, 0.8); border: 2px solid transparent; border-radius: 50%; transition: all 0.3s ease; font-size: 16px;" onmouseover="this.style.backgroundColor='#0A66C2'; this.style.color='white'; this.style.borderColor='#0A66C2';" onmouseout="this.style.backgroundColor='rgba(255, 255, 255, 0.1)'; this.style.color='rgba(255, 255, 255, 0.8)'; this.style.borderColor='transparent';">
            <i class="fab fa-linkedin-in"></i>
          </a>
          <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" title="Instagram" style="display: inline-flex; align-items: center; justify-content: center; width: 40px; height: 40px; background-color: rgba(255, 255, 255, 0.1); color: rgba(255, 255, 255, 0.8); border: 2px solid transparent; border-radius: 50%; transition: all 0.3s ease; font-size: 16px;" onmouseover="this.style.backgroundColor='#E4405F'; this.style.color='white'; this.style.borderColor='#E4405F';" onmouseout="this.style.backgroundColor='rgba(255, 255, 255, 0.1)'; this.style.color='rgba(255, 255, 255, 0.8)'; this.style.borderColor='transparent';">
            <i class="fab fa-instagram"></i>
          </a>
        </div>
        <p style="color: rgba(255, 255, 255, 0.7); font-size: 13px; margin-bottom: 12px;">Need technical support?</p>
        <a href="mailto:rsemblem2022@gmail.com" class="btn-circle" style="display: inline-flex; align-items: center; gap: 6px; padding: 10px 18px; background-color: var(--primary-red); color: white; text-decoration: none; border-radius: 20px; transition: all 0.3s; font-size: 13px; font-weight: 600; border: none; cursor: pointer;" onmouseover="this.style.backgroundColor='#B81F22'; this.style.transform='translateY(-2px)'; this.style.boxShadow='0 6px 16px rgba(217, 42, 44, 0.4)';" onmouseout="this.style.backgroundColor='var(--primary-red)'; this.style.transform='translateY(0)'; this.style.boxShadow='none';">
          <i class="fas fa-paper-plane"></i> Inquire Now
        </a>
      </div>

    </div>

    <!-- Footer Divider -->
    <div style="border-top: 1px solid rgba(255, 255, 255, 0.1); padding: 24px 0; margin-top: 24px;"></div>

    <!-- Bottom Bar -->
    <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 24px;">
      <div>
        <p style="margin: 0 0 4px 0; font-size: 14px; font-weight: 600; color: white;">© 2025 RS Emblem & New Materials Technology. All rights reserved.</p>
        <p style="margin: 0; font-size: 12px; color: rgba(255, 255, 255, 0.6);">Founded by Md. Shafiqul Islam | Made with ❤️ for excellence</p>
      </div>
      <div style="text-align: right;">
        <p style="margin: 0 0 4px 0; font-weight: 600; font-size: 13px; color: rgba(255, 255, 255, 0.7);">Website by</p>
        <a href="https://thegrowsoft.com" target="_blank" rel="noopener noreferrer" style="color: var(--primary-red); text-decoration: none; font-weight: 700; font-size: 13px; transition: opacity 0.3s;" onmouseover="this.style.opacity='0.7'" onmouseout="this.style.opacity='1'">🚀 Growsoft</a>
      </div>
    </div>
  </div>

  <!-- WhatsApp Floating Button -->
  <a href="https://wa.me/8801931669605" target="_blank" rel="noopener noreferrer" title="Chat on WhatsApp" id="whatsappBtn" style="position: fixed; bottom: 30px; right: 30px; display: inline-flex; align-items: center; justify-content: center; width: 56px; height: 56px; background: linear-gradient(135deg, #25D366 0%, #20BA5A 100%); color: white; border-radius: 50%; transition: all 0.3s ease; box-shadow: 0 4px 16px rgba(37, 211, 102, 0.4); z-index: 999; font-size: 28px; border: none;" onmouseover="this.style.transform='scale(1.12) translateY(-4px)'; this.style.boxShadow='0 8px 24px rgba(37, 211, 102, 0.6)';" onmouseout="this.style.transform='scale(1) translateY(0)'; this.style.boxShadow='0 4px 16px rgba(37, 211, 102, 0.4)';">
    <i class="fab fa-whatsapp"></i>
  </a>
</footer>

<!-- Product Modal -->
<div id="productModal" class="modal" style="display: none;">
  <div class="modal-content">
    <span class="close-modal" onclick="closeModal()">&times;</span>
    <div id="modalBody"></div>
  </div>
</div>

<script>
  // Responsive WhatsApp button positioning
  function updateWhatsAppPosition() {
    const whatsappBtn = document.getElementById('whatsappBtn');
    if (whatsappBtn) {
      if (window.innerWidth <= 768) {
        whatsappBtn.style.bottom = '90px';
      } else {
        whatsappBtn.style.bottom = '30px';
      }
    }
  }
  window.addEventListener('load', updateWhatsAppPosition);
  window.addEventListener('resize', updateWhatsAppPosition);
  updateWhatsAppPosition();
</script>

<script src="{{ asset('assets/script.js') }}"></script>

<!-- Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXX"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-XXXXXXXX');
</script>


</body>
</html>