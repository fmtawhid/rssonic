<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">
<title>RS Emblem | Advanced Materials & Machinery – Bangladesh</title>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;600;700;800;900&family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="{{ asset('assets/style.css') }}">
<script src="https://cdn.tailwindcss.com"></script>
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
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px,1fr)); gap: 40px; margin-bottom: 48px;">
      <div><div class="logo-mark" style="margin-bottom: 16px;">RS</div><h4 style="color: white; font-weight: 700;">RS Emblem & New Materials Technology</h4><p style="color: #94A3B8; font-size: 14px; margin-top: 12px;">Advanced printing materials & industrial solutions since 2020.</p></div>
      <div><h4 style="color: var(--primary-red); margin-bottom: 20px;">Navigation</h4><ul style="list-style: none; line-height: 2;"><li><a href="#" style="color: #CBD5E1; text-decoration: none;">Home</a></li><li><a href="#about" style="color: #CBD5E1; text-decoration: none;">About</a></li><li><a href="#products" style="color: #CBD5E1; text-decoration: none;">Products</a></li><li><a href="#segments" style="color: #CBD5E1; text-decoration: none;">Applications</a></li><li><a href="blog.html" style="color: #CBD5E1; text-decoration: none;">Blog</a></li></ul></div>
      <div><h4 style="color: var(--primary-red); margin-bottom: 20px;">Contact Info</h4><p style="color: #CBD5E1; font-size: 14px;"><i class="fas fa-map-marker-alt" style="margin-right: 8px;"></i> Hazi Chan Miah Tower, Zirabo, Ashulia, Savar, Dhaka-1341</p><p style="color: #CBD5E1; margin-top: 12px;"><i class="fas fa-phone-alt"></i> +8801931669605</p><p><i class="fas fa-envelope"></i> rsemblem2022@gmail.com</p></div>
      <div><h4 style="color: var(--primary-red); margin-bottom: 20px;">Inquiry</h4><p style="color: #CBD5E1;">Need a quote or technical support? Reach out today.</p><a href="mailto:rsemblem2022@gmail.com" class="btn-circle btn-primary" style="margin-top: 16px; display: inline-block;">Email Us <i class="fas fa-paper-plane"></i></a></div>
    </div>
    <div style="border-top: 1px solid #1E2F44; padding-top: 24px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 20px;">
      <div>
        <p style="margin: 0 0 6px 0;">© 2025 RS Emblem and New Materials Technology. All rights reserved.</p>
        <p style="margin: 0; font-size: 13px; opacity: 0.8;">Founded by Md. Shafiqul Islam</p>
      </div>
      <div style="text-align: right;">
        <p style="margin: 0 0 6px 0; font-weight: 600;">Developed by</p>
        <a href="https://thegrowsoft.com" target="_blank" style="color: var(--primary-red); text-decoration: none; font-weight: 700; font-size: 14px; transition: opacity 0.2s;" onmouseover="this.style.opacity='0.8'" onmouseout="this.style.opacity='1'">Growsoft</a>
      </div>
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

<script src="{{ asset('assets/script.js') }}"></script>
</body>
</html>