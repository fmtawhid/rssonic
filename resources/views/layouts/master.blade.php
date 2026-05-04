<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Primary SEO Meta Tags -->
<title>{{ $seoTitle ?? 'RS Emblem | Advanced Materials & Machinery – Bangladesh' }}</title>
<meta name="description" content="{{ $seoDescription ?? 'RS Emblem offers advanced printing materials, high-performance polymers, TPU heat transfer systems, and industrial machinery solutions for Bangladesh and globally. Expert sourcing with local warehouse support.' }}">
<meta name="keywords" content="{{ $seoKeywords ?? 'industrial materials, machinery solutions, printing materials, polymers, TPU heat transfer, Bangladesh manufacturer' }}">
<meta name="author" content="RS Emblem">
<meta name="language" content="English">

<!-- Canonical URL -->
<link rel="canonical" href="{{ url()->current() }}">

<!-- Open Graph Meta Tags (Social Media) -->
<meta property="og:type" content="{{ $ogType ?? 'website' }}">
<meta property="og:title" content="{{ $ogTitle ?? 'RS Emblem | Advanced Materials & Machinery' }}">
<meta property="og:description" content="{{ $ogDescription ?? 'Premium industrial materials and machinery solutions from Bangladesh to the world.' }}">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:image" content="{{ $ogImage ?? asset('assets/og-image.jpg') }}">
<meta property="og:site_name" content="RS Emblem">
<meta property="og:locale" content="en_US">

<!-- Twitter Card Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $twitterTitle ?? 'RS Emblem | Industrial Materials & Machinery' }}">
<meta name="twitter:description" content="{{ $twitterDescription ?? 'Advanced printing materials, polymers, and industrial machinery solutions.' }}">
<meta name="twitter:image" content="{{ $twitterImage ?? asset('assets/og-image.jpg') }}">

<!-- Additional Meta Tags -->
<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
<meta name="theme-color" content="#F53003">

<!-- Preload Critical Resources -->
<link rel="preload" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;600;700;800;900&family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" as="style">
<link rel="preload" href="{{ asset('assets/style.css') }}" as="style">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;600;700;800;900&family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="{{ asset('assets/style.css') }}">

<!-- Favicon -->
<link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
<link rel="apple-touch-icon" href="{{ asset('assets/apple-touch-icon.png') }}">

<!-- DNS Prefetch for External Resources -->
<link rel="dns-prefetch" href="https://fonts.googleapis.com">
<link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">
<link rel="dns-prefetch" href="https://www.googletagmanager.com">

<!-- Deferred Scripts -->
<script src="https://cdn.tailwindcss.com" defer></script>
</head>
<body>

<nav>
  <a href="{{ route('home') }}" class="nav-logo">
    <div class="logo-mark">RS</div>
    <div class="logo-text">RS Emblem<br><span>New Materials Technology</span></div>
  </a>
  <ul class="nav-links" id="navLinks">
    <li><a href="{{ route('home') }}">Home</a></li>
    <li><a href="{{ route('about') }}">About</a></li>
    <li class="nav-dropdown-wrapper">
      <!-- Button -->
      <button id="productBtn" class="nav-dropdown-btn">
        Products
        <i class="fas fa-chevron-down"></i>
      </button>

      <!-- Dropdown -->
      <ul id="productDropdown" class="nav-dropdown-menu hidden">
        <li>
          <a href="{{ route('machinery') }}">Machinery</a>
        </li>
        <li>
          <a href="{{ route('materials') }}">Raw Materials</a>
        </li>
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
@yield('content')

<!-- Footer -->
<footer id="contact">
  <div class="container">
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px,1fr)); gap: 50px; margin-bottom: 48px; position: relative;">
      <!-- Brand Section -->
      <div>
        <div class="logo-mark" style="margin-bottom: 16px;">RS</div>
        <h4 style="color: white; font-weight: 700; margin-bottom: 8px;">RS Emblem</h4>
        <p style="color: #94A3B8; font-size: 13px; line-height: 1.6;">Advanced printing materials & industrial solutions since 2020.</p>
      </div>

      <!-- Navigation -->
      <div>
        <h4 style="color: var(--primary-red); margin-bottom: 20px; font-size: 16px;">Navigation</h4>
        <ul style="list-style: none; line-height: 2.2; padding: 0; margin: 0;">
          <li><a href="{{ route('home') }}" style="color: #CBD5E1; text-decoration: none; transition: color 0.2s;" onmouseover="this.style.color='var(--primary-red)'" onmouseout="this.style.color='#CBD5E1'">Home</a></li>
          <li><a href="{{ route('about') }}" style="color: #CBD5E1; text-decoration: none; transition: color 0.2s;" onmouseover="this.style.color='var(--primary-red)'" onmouseout="this.style.color='#CBD5E1'">About</a></li>
          <li><a href="{{ route('machinery') }}" style="color: #CBD5E1; text-decoration: none; transition: color 0.2s;" onmouseover="this.style.color='var(--primary-red)'" onmouseout="this.style.color='#CBD5E1'">Products</a></li>
          <li><a href="{{ route('solutions') }}" style="color: #CBD5E1; text-decoration: none; transition: color 0.2s;" onmouseover="this.style.color='var(--primary-red)'" onmouseout="this.style.color='#CBD5E1'">Solutions</a></li>
          <li><a href="{{ route('blog') }}" style="color: #CBD5E1; text-decoration: none; transition: color 0.2s;" onmouseover="this.style.color='var(--primary-red)'" onmouseout="this.style.color='#CBD5E1'">Blog</a></li>
        </ul>
      </div>

      <!-- Contact Info with Social Icons -->
      <div>
        <h4 style="color: var(--primary-red); margin-bottom: 20px; font-size: 16px;">Contact Info</h4>
        <div style="margin-bottom: 20px;">
          <p style="color: #CBD5E1; font-size: 13px; line-height: 1.8; margin: 0 0 12px 0;">
            <i class="fas fa-map-marker-alt" style="margin-right: 10px; color: var(--primary-red); width: 16px;"></i> Hazi Chan Miah Tower, Zirabo, Ashulia, Savar, Dhaka-1341
          </p>
          <p style="color: #CBD5E1; font-size: 13px; margin: 0 0 12px 0;">
            <i class="fas fa-phone-alt" style="margin-right: 10px; color: var(--primary-red); width: 16px;"></i> +8801931669605
          </p>
          <p style="color: #CBD5E1; font-size: 13px; margin: 0;">
            <i class="fas fa-envelope" style="margin-right: 10px; color: var(--primary-red); width: 16px;"></i> rsemblem2022@gmail.com
          </p>
        </div>
        
        <!-- Social Icons -->
        <div style="display: flex; gap: 12px; margin-top: 16px;">
          <a href="#" rel="noopener noreferrer" style="display: inline-flex; align-items: center; justify-content: center; width: 36px; height: 36px; background-color: rgba(255,255,255,0.1); color: #CBD5E1; border-radius: 50%; transition: all 0.2s;" onmouseover="this.style.backgroundColor='var(--primary-red)'; this.style.color='white';" onmouseout="this.style.backgroundColor='rgba(255,255,255,0.1)'; this.style.color='#CBD5E1';">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="#" rel="noopener noreferrer" style="display: inline-flex; align-items: center; justify-content: center; width: 36px; height: 36px; background-color: rgba(255,255,255,0.1); color: #CBD5E1; border-radius: 50%; transition: all 0.2s;" onmouseover="this.style.backgroundColor='var(--primary-red)'; this.style.color='white';" onmouseout="this.style.backgroundColor='rgba(255,255,255,0.1)'; this.style.color='#CBD5E1';">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#" rel="noopener noreferrer" style="display: inline-flex; align-items: center; justify-content: center; width: 36px; height: 36px; background-color: rgba(255,255,255,0.1); color: #CBD5E1; border-radius: 50%; transition: all 0.2s;" onmouseover="this.style.backgroundColor='var(--primary-red)'; this.style.color='white';" onmouseout="this.style.backgroundColor='rgba(255,255,255,0.1)'; this.style.color='#CBD5E1';">
            <i class="fab fa-linkedin-in"></i>
          </a>
          <a href="#" rel="noopener noreferrer" style="display: inline-flex; align-items: center; justify-content: center; width: 36px; height: 36px; background-color: rgba(255,255,255,0.1); color: #CBD5E1; border-radius: 50%; transition: all 0.2s;" onmouseover="this.style.backgroundColor='var(--primary-red)'; this.style.color='white';" onmouseout="this.style.backgroundColor='rgba(255,255,255,0.1)'; this.style.color='#CBD5E1';">
            <i class="fab fa-instagram"></i>
          </a>
        </div>
      </div>

      <!-- Quick Inquiry -->
      <div>
        <h4 style="color: var(--primary-red); margin-bottom: 20px; font-size: 16px;">Quick Inquiry</h4>
        <p style="color: #CBD5E1; font-size: 13px; line-height: 1.6; margin-bottom: 16px;">Need a quote or technical support? We're here to help you.</p>
        <a href="mailto:rsemblem2022@gmail.com" class="btn-circle btn-primary" style="display: inline-flex; align-items: center; gap: 8px; padding: 10px 16px; background-color: var(--primary-red); color: white; text-decoration: none; border-radius: 20px; transition: all 0.2s; font-size: 13px;" onmouseover="this.style.opacity='0.85'; this.style.transform='translateY(-2px)';" onmouseout="this.style.opacity='1'; this.style.transform='translateY(0)';">
          <i class="fas fa-paper-plane"></i> Email Us
        </a>
      </div>
    </div>

    <!-- Bottom Bar -->
    <div style="border-top: 1px solid #1E2F44; padding-top: 24px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 20px; position: relative;">
      <div>
        <p style="margin: 0 0 4px 0; font-size: 14px;">© 2025 RS Emblem & New Materials Technology. All rights reserved.</p>
        <p style="margin: 0; font-size: 12px; opacity: 0.7;">Founded by Md. Shafiqul Islam</p>
      </div>
      <div style="text-align: right;">
        <p style="margin: 0 0 4px 0; font-weight: 600; font-size: 13px;">Developed by</p>
        <a href="https://thegrowsoft.com" target="_blank" rel="noopener noreferrer" style="color: var(--primary-red); text-decoration: none; font-weight: 700; font-size: 13px; transition: opacity 0.2s;" onmouseover="this.style.opacity='0.8'" onmouseout="this.style.opacity='1'">Growsoft</a>
      </div>

      <!-- WhatsApp Icon Bottom Right (Fixed/Sticky) -->
      <a href="https://wa.me/8801931669605" target="_blank" rel="noopener noreferrer" style="position: fixed; bottom: 30px; right: 30px; display: inline-flex; align-items: center; justify-content: center; width: 50px; height: 50px; background-color: #25D366; color: white; border-radius: 50%; transition: all 0.2s; box-shadow: 0 4px 12px rgba(37, 211, 102, 0.3); z-index: 999;" onmouseover="this.style.transform='scale(1.15)'; this.style.boxShadow='0 8px 20px rgba(37, 211, 102, 0.5)';" onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 4px 12px rgba(37, 211, 102, 0.3)';">
        <i class="fab fa-whatsapp" style="font-size: 24px;"></i>
      </a>
    </div>
  </div>
</footer>

<!-- Product Modal -->
<div id="productModal" class="modal" style="display: none;">
  <div class="modal-content">
    <span class="close-modal" onclick="closeModal()">&times;</span>
    <div id="modalBody"></div>
  </div>
</div>

<script src="{{ asset('assets/script.js') }}" defer></script>

<!-- Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXX"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-XXXXXXXX');
</script>

<!-- Structured Data (Organization Schema) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "RS Emblem",
  "url": "{{ url('/') }}",
  "logo": "{{ asset('assets/logo.png') }}",
  "description": "Advanced printing materials, high-performance polymers, TPU heat transfer systems, and industrial machinery solutions",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Hazi Chan Miah Tower, Zirabo, Ashulia",
    "addressLocality": "Savar",
    "addressRegion": "Dhaka",
    "postalCode": "1341",
    "addressCountry": "BD"
  },
  "contact": {
    "@type": "ContactPoint",
    "contactType": "Sales",
    "telephone": "+8801931669605",
    "email": "rsemblem2022@gmail.com"
  },
  "sameAs": ["https://www.facebook.com/", "https://www.linkedin.com/", "https://www.instagram.com/"]
}
</script>

<!-- Local Business Schema -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "RS Emblem",
  "image": "{{ asset('assets/logo.png') }}",
  "description": "Premium industrial materials & machinery solutions",
  "telephone": "+8801931669605",
  "email": "rsemblem2022@gmail.com",
  "url": "{{ url('/') }}",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Hazi Chan Miah Tower, Zirabo, Ashulia, Savar",
    "addressLocality": "Dhaka",
    "addressRegion": "Dhaka",
    "postalCode": "1341",
    "addressCountry": "BD"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": "23.9000",
    "longitude": "90.2000"
  },
  "openingHours": "Mo-Sa 09:00-18:00",
  "priceRange": "$$"
}
</script>
</body>
</html>