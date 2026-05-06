@extends('layouts.master')
@section('content')
<div class="page-hero" style="position: relative; overflow: hidden;">
  <div style="position: absolute; top: 0; right: 0; width: 400px; height: 300px; background: rgba(217, 42, 44, 0.1); border-radius: 50%; transform: translate(100px, -100px);"></div>
  <div style="position: absolute; bottom: 0; left: 0; width: 300px; height: 300px; background: rgba(217, 42, 44, 0.08); border-radius: 50%; transform: translate(-100px, 100px);"></div>
  <div class="container" style="position: relative; z-index: 2;">
    <div class="breadcrumb"><a href="index.html">Home</a> / About Us</div>
    <h1 style="font-size: 48px;">About <span>RS Emblem</span></h1>
    <div class="hero-line"></div>
    <p style="font-size: 16px; color: rgba(255,255,255,0.9); max-width: 600px;">Trusted partner in industrial materials and advanced printing solutions since 2020. Serving Bangladesh's manufacturing excellence.</p>
  </div>
</div>

<section style="padding: 80px 0; position: relative; background: #fff;">
  <div class="container">

    <!-- 🔹 DIV 1: STORY + IMAGE -->
    <div class="about-grid" style="align-items: center; margin-bottom: 60px;">
      
      <!-- LEFT CONTENT -->
      <div style="padding-right: 40px;">
        <div class="section-label">Our Story</div>

        <h2 class="section-title">
          Trusted Partner in <span>Industrial Materials</span>
        </h2>

        <p style="color: var(--text-muted); line-height: 1.8; margin-bottom: 20px;">
          RS Emblem and New Materials Technology was founded in 2020 by Md. Shafiqul Islam with a clear vision to bridge global material technology with local manufacturing needs.
        </p>

        <p style="color: var(--text-muted); line-height: 1.8; margin-bottom: 20px;">
          We specialize in silicone systems, TPU solutions, PVC patches, printing chemicals, and machinery with global sourcing from China, Korea, and Germany.
        </p>

        <p style="line-height: 1.8;">
          <strong>More than a supplier</strong>, we act as a technical partner.
        </p>

        <a href="#contact" class="btn-circle btn-primary" style="margin-top: 25px;">
          <i class="fas fa-phone-alt"></i> Get in Touch
        </a>
      </div>

      <!-- RIGHT IMAGE -->
      <div>
        <div style="border-radius: 20px; overflow: hidden; box-shadow: 0 15px 40px rgba(0,0,0,0.15);">
          <img src="https://picsum.photos/id/201/600/400"
               style="width: 100%; height: 100%; object-fit: cover;">
        </div>
      </div>

    </div>


    <!-- 🔹 DIV 2: COMPANY INFO -->
    <div>

  <div style="text-align: center; margin-bottom: 30px;">
    <h3 class="section-title" style="font-size: 26px;">Company Overview</h3>
  </div>

  <div style="
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
  ">

    <div class="info-card">
      <h4>Company Name</h4>
      <p>RS Emblem and New Materials Technology</p>
    </div>

    <div class="info-card">
      <h4>Established</h4>
      <p>2020</p>
    </div>

    <div class="info-card">
      <h4>Founder & CEO</h4>
      <p>Md. Shafiqul Islam</p>
    </div>

    <div class="info-card">
      <h4>Business Type</h4>
      <p>Industrial Materials & Solutions Provider</p>
    </div>

    <div class="info-card">
      <h4>Location</h4>
      <p>Ashulia, Savar, Dhaka</p>
    </div>

    <div class="info-card">
      <h4>Core Industries</h4>
      <p>Garments · Footwear · Headwear · Printing</p>
    </div>

    <div class="info-card">
      <h4>Global Partners</h4>
      <p>China · Korea · Germany</p>
    </div>

  </div>

</div>

  </div>
</section>

<section style="background: linear-gradient(135deg, var(--gray-bg) 0%, #FFFFFF 100%); padding: 80px 0;">
  <div class="container">
    <div class="section-label">Purpose & Direction</div>
    <h2 class="section-title">Mission & <span>Vision</span></h2>
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; margin-top: 50px;">
      <div class="product-card" style="border: 2px solid var(--primary-red); background: white; position: relative; overflow: hidden;">
        <div style="position: absolute; top: -20px; right: -20px; width: 100px; height: 100px; background: rgba(217, 42, 44, 0.1); border-radius: 50%;"></div>
        <div style="position: relative; z-index: 2; padding: 40px; text-align: center; min-height: 380px; display: flex; flex-direction: column; justify-content: center;">
          <i class="fas fa-bullseye" style="font-size: 56px; color: var(--primary-red); margin-bottom: 24px;"></i>
          <h3 style="color: var(--primary-blue); font-size: 24px; margin-bottom: 20px; font-weight: 800;">Our Mission</h3>
          <p style="color: var(--text-muted); line-height: 1.8; font-size: 15px;">To deliver high-performance materials and advanced technical solutions that elevate product quality, optimize production efficiency, and strengthen our clients' global competitiveness.</p>
        </div>
      </div>
      <div class="product-card" style="border: 2px solid var(--primary-blue); background: white; position: relative; overflow: hidden;">
        <div style="position: absolute; top: -20px; right: -20px; width: 100px; height: 100px; background: rgba(43, 58, 127, 0.1); border-radius: 50%;"></div>
        <div style="position: relative; z-index: 2; padding: 40px; text-align: center; min-height: 380px; display: flex; flex-direction: column; justify-content: center;">
          <i class="fas fa-eye" style="font-size: 56px; color: var(--primary-blue); margin-bottom: 24px;"></i>
          <h3 style="color: var(--primary-blue); font-size: 24px; margin-bottom: 20px; font-weight: 800;">Our Vision</h3>
          <p style="color: var(--text-muted); line-height: 1.8; font-size: 15px;">To become a globally recognized leader in advanced printing materials and industrial technologies, known for innovation, reliability, and long-term partnership.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section style="padding: 80px 0;">
  <div class="container">
    <div class="section-label">Our Journey</div>
    <h2 class="section-title">Key <span>Milestones</span></h2>
    <div class="milestone-grid" style="margin-top: 50px;">
      <div class="milestone-card" style="border: 2px solid var(--primary-red);"><div class="milestone-number" style=" color: white;">2020</div><h3 style="color: var(--primary-blue); font-size: 18px;">Company Founded</h3><p style="color: var(--text-muted);">Started operations in Ashulia, Dhaka</p></div>
      <div class="milestone-card" style="border-left: 4px solid var(--primary-blue); background: linear-gradient(to right, rgba(43, 58, 127, 0.05), transparent);"><div class="milestone-number" style="color: var(--primary-blue); border-color: var(--primary-blue);">2021</div><h3 style="color: var(--primary-blue); font-size: 18px;">First Warehouse</h3><p style="color: var(--text-muted);">Local stock established</p></div>
      <div class="milestone-card" style="border: 2px solid var(--primary-red);"><div class="milestone-number" style=" color: white;">2022</div><h3 style="color: var(--primary-blue); font-size: 18px;">Global Partnerships</h3><p style="color: var(--text-muted);">China, Korea & Germany sourcing</p></div>
      <div class="milestone-card" style="border-left: 4px solid var(--primary-blue); background: linear-gradient(to right, rgba(43, 58, 127, 0.05), transparent);"><div class="milestone-number" style="color: var(--primary-blue); border-color: var(--primary-blue);">2023</div><h3 style="color: var(--primary-blue); font-size: 18px;">Machinery Division</h3><p style="color: var(--text-muted);">Full production line equipment</p></div>
      <div class="milestone-card" style="border: 2px solid var(--primary-red);"><div class="milestone-number" style=" color: white;">2024</div><h3 style="color: var(--primary-blue); font-size: 18px;">500+ Clients</h3><p style="color: var(--text-muted);">Serving leading manufacturers</p></div>
      <div class="milestone-card" style="border-left: 4px solid var(--primary-blue); background: linear-gradient(to right, rgba(43, 58, 127, 0.05), transparent);"><div class="milestone-number" style="color: var(--primary-blue); border-color: var(--primary-blue);">2025</div><h3 style="color: var(--primary-blue); font-size: 18px;">Technical Excellence</h3><p style="color: var(--text-muted);">Expanded on-site support</p></div>
    </div>
  </div>
</section>

<section style="background: linear-gradient(135deg, #FEFCF7 0%, var(--gray-bg) 100%); padding: 80px 0; position: relative;">
  <div style="position: absolute; top: 0; left: 0; width: 400px; height: 400px; background: linear-gradient(135deg, rgba(217, 42, 44, 0.08), transparent); border-radius: 50%; transform: translate(-150px, -150px); pointer-events: none;"></div>
  <div class="container">
    <div class="section-label">What We Stand For</div>
    <h2 class="section-title">Our Core <span>Values</span></h2>
    <div class="values-full-grid" style="margin-top: 50px;">
      <div class="value-card" style="background: white; border: 1px solid var(--border-light); box-shadow: 0 4px 16px rgba(0,0,0,0.08); border-top: 4px solid var(--primary-red);"><div class="value-icon"><i class="fas fa-handshake"></i></div><h3 style="color: var(--primary-blue); font-size: 18px;">Trust & Reliability</h3><p style="color: var(--text-muted); font-size: 14px; line-height: 1.6;">Transparent communication, consistent delivery, and long-term partnerships.</p></div>
      <div class="value-card" style="background: white; border: 1px solid var(--border-light); box-shadow: 0 4px 16px rgba(0,0,0,0.08); border-top: 4px solid var(--primary-blue);"><div class="value-icon" style="color: var(--primary-blue);"><i class="fas fa-certificate"></i></div><h3 style="color: var(--primary-blue); font-size: 18px;">Quality Excellence</h3><p style="color: var(--text-muted); font-size: 14px; line-height: 1.6;">Rigorous testing, batch consistency, and international standards.</p></div>
      <div class="value-card" style="background: white; border: 1px solid var(--border-light); box-shadow: 0 4px 16px rgba(0,0,0,0.08); border-top: 4px solid var(--primary-red);"><div class="value-icon"><i class="fas fa-chart-line"></i></div><h3 style="color: var(--primary-blue); font-size: 18px;">Partnership Growth</h3><p style="color: var(--text-muted); font-size: 14px; line-height: 1.6;">We grow when our clients grow.</p></div>
      <div class="value-card" style="background: white; border: 1px solid var(--border-light); box-shadow: 0 4px 16px rgba(0,0,0,0.08); border-top: 4px solid var(--primary-blue);"><div class="value-icon" style="color: var(--primary-blue);"><i class="fas fa-microchip"></i></div><h3 style="color: var(--primary-blue); font-size: 18px;">Technical Innovation</h3><p style="color: var(--text-muted); font-size: 14px; line-height: 1.6;">Continuously introducing advanced solutions.</p></div>
      <div class="value-card" style="background: white; border: 1px solid var(--border-light); box-shadow: 0 4px 16px rgba(0,0,0,0.08); border-top: 4px solid var(--primary-red);"><div class="value-icon"><i class="fas fa-clock"></i></div><h3 style="color: var(--primary-blue); font-size: 18px;">Responsive Service</h3><p style="color: var(--text-muted); font-size: 14px; line-height: 1.6;">Fast response, local stock, on-site support.</p></div>
      <div class="value-card" style="background: white; border: 1px solid var(--border-light); box-shadow: 0 4px 16px rgba(0,0,0,0.08); border-top: 4px solid var(--primary-blue);"><div class="value-icon" style="color: var(--primary-blue);"><i class="fas fa-globe-asia"></i></div><h3 style="color: var(--primary-blue); font-size: 18px;">Global Perspective</h3><p style="color: var(--text-muted); font-size: 14px; line-height: 1.6;">Direct sourcing from world-class manufacturers.</p></div>
    </div>
  </div>
</section>

<div class="container">
  <div class="founder-section" style="background: linear-gradient(135deg, var(--primary-blue) 0%, #1E2D5A 100%); border-radius: 32px; padding: 60px; margin: 80px 0; color: white; position: relative; overflow: hidden;">
    <div style="position: absolute; top: -100px; right: -100px; width: 400px; height: 400px; background: rgba(217, 42, 44, 0.1); border-radius: 50%; pointer-events: none;"></div>
    <div style="position: absolute; bottom: -100px; left: -100px; width: 300px; height: 300px; background: rgba(217, 42, 44, 0.08); border-radius: 50%; pointer-events: none;"></div>
    <div class="founder-grid" style="position: relative; z-index: 2;">
      <div class="founder-card">
        <div class="founder-avatar" style=" box-shadow: 0 12px 32px rgba(217, 42, 44, 0.4);">S</div>
        <h3 style="font-size: 20px; font-weight: 800;color:#fff;">Md. Shafiqul Islam</h3>
        <div class="founder-role" style="font-size: 14px;">Founder & CEO</div>
        <p style="font-size: 13px; opacity: 0.9;">RS Emblem & New Materials Technology</p>
      </div>
      <div class="founder-message">
        <div class="section-label" style="color: var(--primary-red);">Founder's Message</div>
        <h2 style="font-size: 32px; font-weight: 800; margin-bottom: 20px; line-height: 1.2;">A Word From <span style="color: var(--primary-red);">Our Founder</span></h2>
        <p style="font-size: 15px; line-height: 1.8; margin-bottom: 16px; opacity: 0.95;">At RS Emblem, we believe business is built on trust, consistency, and long-term relationships. Since 2020, our focus has been simple — to provide reliable materials and practical solutions that truly support our clients' production needs.</p>
        <p style="font-size: 15px; line-height: 1.8; margin-bottom: 16px; opacity: 0.95;">With hands-on experience in printing technologies and industrial materials, we understand the importance of quality, stability, and on-time supply in every order.</p>
        <p style="font-size: 15px; line-height: 1.8; margin-bottom: 24px; opacity: 0.95;">From sourcing to delivery, we ensure clear communication, dependable quality, and responsive service — so our clients can operate with confidence.</p>
        <div class="signature" style="border-top: 2px solid rgba(255,255,255,0.2);">
          <div class="sig-name" style="font-size: 18px; font-weight: 800; margin-top: 16px;">Md. Shafiqul Islam</div>
          <div class="sig-title" style="font-size: 12px; opacity: 0.8; margin-top: 4px;">Founder & CEO · RS Emblem and New Materials Technology</div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="cta-mini" style="background: linear-gradient(135deg, #FEFCF7 0%, #FFF9EF 100%); border-radius: 32px; padding: 60px 32px; text-align: center; margin: 80px 0; border: 2px solid var(--border-light);">
    <h2 style="font-family: 'Roboto', sans-serif; font-size: 36px; font-weight: 800; color: var(--primary-blue); margin-bottom: 16px;">Ready to work with us?</h2>
    <p style="color: var(--text-muted); font-size: 16px; margin-bottom: 32px; max-width: 600px; margin-left: auto; margin-right: auto;">Let's discuss how our materials and expertise can benefit your business. Contact us today for a consultation.</p>
    <a href="#contact" class="btn-circle btn-primary" style="display: inline-block;"><i class="fas fa-arrow-right"></i> Contact Us Today</a>
  </div>
</div>

@endsection