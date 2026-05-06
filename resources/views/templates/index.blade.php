@extends('layouts.master')
@section('content')

<style>
  @keyframes fadeInUp {
    from {
      opacity: 0;
      transform: translateY(30px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  @keyframes slideInLeft {
    from {
      opacity: 0;
      transform: translateX(-50px);
    }
    to {
      opacity: 1;
      transform: translateX(0);
    }
  }

  @keyframes slideInRight {
    from {
      opacity: 0;
      transform: translateX(50px);
    }
    to {
      opacity: 1;
      transform: translateX(0);
    }
  }

  @keyframes scaleIn {
    from {
      opacity: 0;
      transform: scale(0.95);
    }
    to {
      opacity: 1;
      transform: scale(1);
    }
  }

  @keyframes floatUp {
    0%, 100% {
      transform: translateY(0px);
    }
    50% {
      transform: translateY(-10px);
    }
  }

  .animate-fade-in-up {
    animation: fadeInUp 0.8s ease-out forwards;
  }

  .animate-slide-in-left {
    animation: slideInLeft 0.8s ease-out forwards;
  }

  .animate-slide-in-right {
    animation: slideInRight 0.8s ease-out forwards;
  }

  .animate-scale-in {
    animation: scaleIn 0.6s ease-out forwards;
  }

  .animate-float {
    animation: floatUp 3s ease-in-out infinite;
  }

  .section-animated {
    opacity: 0;
  }

  .section-animated.in-view {
    animation: fadeInUp 0.8s ease-out forwards;
  }

  /* Mobile Responsive */
  @media (max-width: 768px) {
    .section-title {
      font-size: 30px !important;
    }
    
    .hero-premium h1 {
      font-size: 30px !important;
    }
  }
</style>

<!-- Hero Section with Full Background -->
<section class="hero-premium" style="
  background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%);
  background-image: url('https://picsum.photos/id/104/1920/600');
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
  position: relative;
  min-height: 700px;
  display: flex;
  align-items: center;
  overflow: hidden;
  padding: 80px 0;
">
  <!-- Overlay -->
  <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(135deg, rgba(26, 26, 46, 0.92) 0%, rgba(22, 33, 62, 0.88) 50%, rgba(15, 52, 96, 0.85) 100%); z-index: 1;"></div>
  
  <div class="container" style="position: relative; z-index: 2;">
    <div style="max-width: 700px;">
      <h1 style="
        font-family: 'Playfair Display', serif;
        font-size: 56px;
        font-weight: 900;
        color: white;
        margin-bottom: 16px;
        line-height: 1.2;
        animation: slideInLeft 1s ease-out forwards;
      ">
        RS Emblem <span style="background: linear-gradient(135deg, #ff6b6b 0%, #ee5a6f 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">& New Materials</span>
      </h1>
      
      <div style="
        font-size: 18px;
        color: #ffd700;
        font-weight: 600;
        margin-bottom: 20px;
        letter-spacing: 2px;
        animation: slideInLeft 1.1s ease-out forwards;
      ">
        ✨ Innovative materials · Precision machinery
      </div>
      
      <p style="
        color: #e0e0e0;
        font-size: 16px;
        line-height: 1.8;
        margin-bottom: 30px;
        animation: fadeInUp 1.2s ease-out forwards;
      ">
        Advanced printing materials, high-performance polymers, and industrial machinery solutions. Bridging global technology with local production — trusted by garment, footwear, and accessory manufacturers.
      </p>
      
      <div style="
        display: flex;
        gap: 16px;
        margin-bottom: 50px;
        flex-wrap: wrap;
        animation: fadeInUp 1.3s ease-out forwards;
      ">
        <a href="#products" class="btn-circle btn-primary" style="background: linear-gradient(135deg, #ff6b6b 0%, #ee5a6f 100%); border: none; font-weight: 600;">
          <i class="fas fa-arrow-right"></i> Explore Machinery
        </a>
        <a href="#contact" class="btn-circle btn-outline" style="border: 2px solid white; color: white; font-weight: 600;">Request a Quote</a>
      </div>

      <!-- Stats Cards -->
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); gap: 16px;">
        <div style="
          background: rgba(255, 255, 255, 0.1);
          backdrop-filter: blur(10px);
          border: 1px solid rgba(255, 255, 255, 0.2);
          border-radius: 16px;
          padding: 24px;
          text-align: center;
          animation: scaleIn 1s ease-out 0.2s forwards;
          opacity: 0;
        ">
          <div style="font-size: 36px; font-weight: 800; background: linear-gradient(135deg, #ffd700 0%, #ffed4e 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">5+</div>
          <p style="margin-top: 8px; color: #b0b0b0; font-size: 13px; font-weight: 600;">Years Excellence</p>
        </div>
        <div style="
          background: rgba(255, 255, 255, 0.1);
          backdrop-filter: blur(10px);
          border: 1px solid rgba(255, 255, 255, 0.2);
          border-radius: 16px;
          padding: 24px;
          text-align: center;
          animation: scaleIn 1s ease-out 0.3s forwards;
          opacity: 0;
        ">
          <div style="font-size: 36px; font-weight: 800; background: linear-gradient(135deg, #00d4ff 0%, #00f2fe 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">4</div>
          <p style="margin-top: 8px; color: #b0b0b0; font-size: 13px; font-weight: 600;">Industry Verticals</p>
        </div>
        <div style="
          background: rgba(255, 255, 255, 0.1);
          backdrop-filter: blur(10px);
          border: 1px solid rgba(255, 255, 255, 0.2);
          border-radius: 16px;
          padding: 24px;
          text-align: center;
          animation: scaleIn 1s ease-out 0.4s forwards;
          opacity: 0;
        ">
          <div style="font-size: 36px; font-weight: 800; background: linear-gradient(135deg, #00ff88 0%, #00d96f 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">100%</div>
          <p style="margin-top: 8px; color: #b0b0b0; font-size: 13px; font-weight: 600;">Quality Assured</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Products Section -->
<section id="products" style="
  background: linear-gradient(135deg, #f5f7fa 0%, #e8ecf1 100%);
  padding: 80px 0;
  position: relative;
  overflow: hidden;
">
  <div class="container">
    <div style="text-align: center; margin-bottom: 60px; animation: fadeInUp 0.8s ease-out forwards; opacity: 0;">
      <div class="section-label" style="color: #ff6b6b; font-weight: 700;">🏭 Premium industrial range</div>
      <h2 class="section-title" style="
        font-size: 42px;
        font-weight: 900;
        color: #1a1a2e;
        margin-bottom: 16px;
      ">
        Machinery & <span style="background: linear-gradient(135deg, #ff6b6b 0%, #ee5a6f 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">Products </span>
      </h2>
    </div>
    
    <div class="products-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 24px; margin-bottom: 50px;">
      @forelse ($products as $product)
      <div class="product-card" style="
        background: white;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        animation: fadeInUp 0.8s ease-out forwards;
        opacity: 0;
        cursor: pointer;
      " onmouseover="
        this.style.transform='translateY(-10px)';
        this.style.boxShadow='0 16px 40px rgba(0, 0, 0, 0.15)';
        this.querySelector('.product-img').style.transform='scale(1.1)';
      " onmouseout="
        this.style.transform='translateY(0)';
        this.style.boxShadow='0 8px 25px rgba(0, 0, 0, 0.1)';
        this.querySelector('.product-img').style.transform='scale(1)';
      ">
        <div style="overflow: hidden; height: 220px;">
          <img class="product-img" src="https://picsum.photos/id/{{ rand(0, 200) }}/500/200" alt="{{ $product->name }}" style="
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
          ">
        </div>
        <div class="product-info" style="padding: 24px;">
          <h3 style="font-size: 18px; font-weight: 700; color: #1a1a2e; margin-bottom: 10px;">{{ $product->name }}</h3>
          <p style="color: #666; font-size: 14px; line-height: 1.6; margin-bottom: 16px;">{{ Str::limit($product->description, 80) }}</p>
          <a href="{{ route('product-details', $product->slug) }}" style="
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #ff6b6b;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
          " onmouseover="this.style.color='#ee5a6f'; this.style.transform='translateX(5px)';" onmouseout="this.style.color='#ff6b6b'; this.style.transform='translateX(0)';">
            <i class="fas fa-arrow-right"></i> View Details
          </a>
        </div>
      </div>
      @empty
      <p style="text-align: center; padding: 40px; grid-column: 1/-1;">No products available.</p>
      @endforelse
    </div>
    
    <div style="text-align: center; animation: fadeInUp 1s ease-out forwards; opacity: 0;">
      <a href="#contact" class="btn-circle btn-primary" style="
        background: linear-gradient(135deg, #ff6b6b 0%, #ee5a6f 100%);
        border: none;
        font-weight: 600;
        box-shadow: 0 8px 25px rgba(255, 107, 107, 0.3);
      "><i class="fas fa-phone-alt"></i> Contact our expert</a>
    </div>
  </div>
</section>


<!-- About Section -->
<div id="about" style="
  background: linear-gradient(135deg, #f5f7fa 0%, #ffffff 100%);
  padding: 80px 0;
  position: relative;
  overflow: hidden;
">
  <!-- Decorative elements -->
  <div style="
    position: absolute;
    top: -50px;
    right: -50px;
    width: 300px;
    height: 300px;
    background: radial-gradient(circle, rgba(255, 107, 107, 0.1) 0%, transparent 70%);
    border-radius: 50%;
    z-index: 0;
  "></div>
  
  <div class="container" style="position: relative; z-index: 1;">
    <div class="about-grid">
      <div style="animation: slideInLeft 1s ease-out forwards; opacity: 0;">
        <div class="section-label" style="color: #ff6b6b; font-weight: 700;">✨ About RS Emblem</div>
        <h2 class="section-title" style="
          font-size: 42px;
          font-weight: 900;
          color: #1a1a2e;
          margin-bottom: 24px;
        ">
          Your Trusted <span style="background: linear-gradient(135deg, #ff6b6b 0%, #ee5a6f 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">Industrial Partner</span> in Bangladesh
        </h2>
        <p style="color: #555; line-height: 1.8; margin-bottom: 20px; font-size: 15px;">
          Headquartered in Ashulia, Savar, Dhaka — the heart of Bangladesh's industrial zone. We specialize in advanced printing materials, high-performance polymers, silicone systems, TPU heat transfer, and complete machinery solutions.
        </p>
        <p style="color: #555; line-height: 1.8; font-size: 15px;">
          With strong international partnerships from China, Korea & Germany, we deliver consistent quality, technical support, and on-time delivery.
        </p>
        <a href="#contact" class="btn-circle btn-primary" style="
          margin-top: 32px;
          background: linear-gradient(135deg, #ff6b6b 0%, #ee5a6f 100%);
          border: none;
          font-weight: 600;
          box-shadow: 0 8px 25px rgba(255, 107, 107, 0.3);
        ">
          <i class="fas fa-handshake"></i> Partner with Us
        </a>
      </div>
      <div class="features-list" style="opacity: 0; animation: slideInRight 1s ease-out forwards;">
        <div class="feat-item" style="
          background: white;
          padding: 24px;
          border-radius: 16px;
          border-left: 4px solid #ff6b6b;
          box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
          animation: fadeInUp 1s ease-out 0.1s forwards;
          margin-bottom: 16px;
          transition: all 0.3s ease;
        " onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 12px 30px rgba(0, 0, 0, 0.15)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 15px rgba(0, 0, 0, 0.08)';">
          <div style="
            font-size: 32px;
            font-weight: 900;
            background: linear-gradient(135deg, #ff6b6b 0%, #ee5a6f 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
          ">01</div>
          <h4 style="margin-top: 12px; color: #1a1a2e; font-weight: 700;">Expert Sourcing</h4>
          <p style="font-size: 13px; color: #666;">Direct from global manufacturers</p>
        </div>
        <div class="feat-item" style="
          background: white;
          padding: 24px;
          border-radius: 16px;
          border-left: 4px solid #00d4ff;
          box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
          animation: fadeInUp 1s ease-out 0.2s forwards;
          margin-bottom: 16px;
          transition: all 0.3s ease;
        " onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 12px 30px rgba(0, 0, 0, 0.15)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 15px rgba(0, 0, 0, 0.08)';">
          <div style="
            font-size: 32px;
            font-weight: 900;
            background: linear-gradient(135deg, #00d4ff 0%, #00f2fe 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
          ">02</div>
          <h4 style="margin-top: 12px; color: #1a1a2e; font-weight: 700;">Quality Control</h4>
          <p style="font-size: 13px; color: #666;">Rigorous batch testing</p>
        </div>
        <div class="feat-item" style="
          background: white;
          padding: 24px;
          border-radius: 16px;
          border-left: 4px solid #ffd700;
          box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
          animation: fadeInUp 1s ease-out 0.3s forwards;
          margin-bottom: 16px;
          transition: all 0.3s ease;
        " onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 12px 30px rgba(0, 0, 0, 0.15)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 15px rgba(0, 0, 0, 0.08)';">
          <div style="
            font-size: 32px;
            font-weight: 900;
            background: linear-gradient(135deg, #ffd700 0%, #ffed4e 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
          ">03</div>
          <h4 style="margin-top: 12px; color: #1a1a2e; font-weight: 700;">Local Stock</h4>
          <p style="font-size: 13px; color: #666;">Fast delivery Ashulia warehouse</p>
        </div>
        <div class="feat-item" style="
          background: white;
          padding: 24px;
          border-radius: 16px;
          border-left: 4px solid #00ff88;
          box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
          animation: fadeInUp 1s ease-out 0.4s forwards;
          margin-bottom: 16px;
          transition: all 0.3s ease;
        " onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 12px 30px rgba(0, 0, 0, 0.15)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 15px rgba(0, 0, 0, 0.08)';">
          <div style="
            font-size: 32px;
            font-weight: 900;
            background: linear-gradient(135deg, #00ff88 0%, #00d96f 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
          ">04</div>
          <h4 style="margin-top: 12px; color: #1a1a2e; font-weight: 700;">Tech Support</h4>
          <p style="font-size: 13px; color: #666;">On-site production assistance</p>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- Business Segments -->
<section id="segments" style="
  background: linear-gradient(135deg, #ffffff 0%, #f5f7fa 100%);
  padding: 80px 0;
  position: relative;
  overflow: hidden;
">
  <!-- Decorative circles -->
  <div style="
    position: absolute;
    bottom: -100px;
    left: -100px;
    width: 300px;
    height: 300px;
    background: radial-gradient(circle, rgba(0, 212, 255, 0.1) 0%, transparent 70%);
    border-radius: 50%;
    z-index: 0;
  "></div>
  
  <div class="container" style="position: relative; z-index: 1;">
    <div style="text-align: center; margin-bottom: 60px; animation: fadeInUp 0.8s ease-out forwards; opacity: 0;">
      <div class="section-label" style="color: #ff6b6b; font-weight: 700;">💡 Core capabilities</div>
      <h2 class="section-title" style="
        font-size: 42px;
        font-weight: 900;
        color: #1a1a2e;
        margin-bottom: 16px;
      ">
        Business <span style="background: linear-gradient(135deg, #ff6b6b 0%, #ee5a6f 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">Segments</span> We Serve
      </h2>
    </div>
    
    <div class="segments-grid" style="
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 30px;
    ">
      <div class="seg-card" style="
        background: white;
        padding: 40px 30px;
        border-radius: 20px;
        text-align: center;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
        border-top: 4px solid #ff6b6b;
        animation: fadeInUp 0.8s ease-out 0.1s forwards;
        opacity: 0;
        transition: all 0.3s ease;
      " onmouseover="
        this.style.transform='translateY(-10px)';
        this.style.boxShadow='0 16px 40px rgba(0, 0, 0, 0.15)';
      " onmouseout="
        this.style.transform='translateY(0)';
        this.style.boxShadow='0 8px 25px rgba(0, 0, 0, 0.08)';
      ">
        <i class="fas fa-microchip" style="
          font-size: 40px;
          background: linear-gradient(135deg, #ff6b6b 0%, #ee5a6f 100%);
          -webkit-background-clip: text;
          -webkit-text-fill-color: transparent;
          background-clip: text;
          margin-bottom: 16px;
          display: block;
        "></i>
        <h3 style="color: #1a1a2e; font-weight: 700; margin-bottom: 12px;">Advanced Industrial Materials</h3>
        <p style="color: #666; line-height: 1.6;">Silicone, TPU, PVC-based materials engineered for durability and premium branding.</p>
      </div>
      
      <div class="seg-card" style="
        background: white;
        padding: 40px 30px;
        border-radius: 20px;
        text-align: center;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
        border-top: 4px solid #00d4ff;
        animation: fadeInUp 0.8s ease-out 0.2s forwards;
        opacity: 0;
        transition: all 0.3s ease;
      " onmouseover="
        this.style.transform='translateY(-10px)';
        this.style.boxShadow='0 16px 40px rgba(0, 0, 0, 0.15)';
      " onmouseout="
        this.style.transform='translateY(0)';
        this.style.boxShadow='0 8px 25px rgba(0, 0, 0, 0.08)';
      ">
        <i class="fas fa-industry" style="
          font-size: 40px;
          background: linear-gradient(135deg, #00d4ff 0%, #00f2fe 100%);
          -webkit-background-clip: text;
          -webkit-text-fill-color: transparent;
          background-clip: text;
          margin-bottom: 16px;
          display: block;
        "></i>
        <h3 style="color: #1a1a2e; font-weight: 700; margin-bottom: 12px;">Precision Machinery</h3>
        <p style="color: #666; line-height: 1.6;">Dispensing systems, molding equipment, and integrated production lines.</p>
      </div>
      
      <div class="seg-card" style="
        background: white;
        padding: 40px 30px;
        border-radius: 20px;
        text-align: center;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
        border-top: 4px solid #ffd700;
        animation: fadeInUp 0.8s ease-out 0.3s forwards;
        opacity: 0;
        transition: all 0.3s ease;
      " onmouseover="
        this.style.transform='translateY(-10px)';
        this.style.boxShadow='0 16px 40px rgba(0, 0, 0, 0.15)';
      " onmouseout="
        this.style.transform='translateY(0)';
        this.style.boxShadow='0 8px 25px rgba(0, 0, 0, 0.08)';
      ">
        <i class="fas fa-globe-asia" style="
          font-size: 40px;
          background: linear-gradient(135deg, #ffd700 0%, #ffed4e 100%);
          -webkit-background-clip: text;
          -webkit-text-fill-color: transparent;
          background-clip: text;
          margin-bottom: 16px;
          display: block;
        "></i>
        <h3 style="color: #1a1a2e; font-weight: 700; margin-bottom: 12px;">Global Sourcing</h3>
        <p style="color: #666; line-height: 1.6;">Strategic partnerships with China, Korea & Germany — reliable supply chain.</p>
      </div>
      
      <div class="seg-card" style="
        background: white;
        padding: 40px 30px;
        border-radius: 20px;
        text-align: center;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
        border-top: 4px solid #00ff88;
        animation: fadeInUp 0.8s ease-out 0.4s forwards;
        opacity: 0;
        transition: all 0.3s ease;
      " onmouseover="
        this.style.transform='translateY(-10px)';
        this.style.boxShadow='0 16px 40px rgba(0, 0, 0, 0.15)';
      " onmouseout="
        this.style.transform='translateY(0)';
        this.style.boxShadow='0 8px 25px rgba(0, 0, 0, 0.08)';
      ">
        <i class="fas fa-chalkboard-user" style="
          font-size: 40px;
          background: linear-gradient(135deg, #00ff88 0%, #00d96f 100%);
          -webkit-background-clip: text;
          -webkit-text-fill-color: transparent;
          background-clip: text;
          margin-bottom: 16px;
          display: block;
        "></i>
        <h3 style="color: #1a1a2e; font-weight: 700; margin-bottom: 12px;">Technical Support</h3>
        <p style="color: #666; line-height: 1.6;">On-site process optimization, waste reduction & high-yield consulting.</p>
      </div>
    </div>
  </div>
</section>

<!-- Process Steps -->
<div style="
  background: linear-gradient(135deg, #f5f7fa 0%, #e8ecf1 100%);
  padding: 80px 0;
  position: relative;
  overflow: hidden;
">
  <div class="container">
    <div style="text-align: center; margin-bottom: 60px; animation: fadeInUp 0.8s ease-out forwards; opacity: 0;">
      <div class="section-label" style="color: #ff6b6b; font-weight: 700;">📋 Seamless workflow</div>
      <h2 class="section-title" style="
        font-size: 42px;
        font-weight: 900;
        color: #1a1a2e;
        margin-bottom: 16px;
      ">
        Our <span style="background: linear-gradient(135deg, #ff6b6b 0%, #ee5a6f 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">Work Process</span>
      </h2>
    </div>
    
    <div class="process-steps" style="
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
      gap: 20px;
      position: relative;
    ">
      <div class="step-card" style="
        background: white;
        padding: 30px 24px;
        border-radius: 16px;
        text-align: center;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
        animation: fadeInUp 0.8s ease-out 0.1s forwards;
        opacity: 0;
        transition: all 0.3s ease;
        border-top: 4px solid #ff6b6b;
      " onmouseover="
        this.style.transform='translateY(-8px)';
        this.style.boxShadow='0 12px 30px rgba(0, 0, 0, 0.15)';
      " onmouseout="
        this.style.transform='translateY(0)';
        this.style.boxShadow='0 6px 20px rgba(0, 0, 0, 0.08)';
      ">
        <div style="
          font-weight: 900;
          font-size: 32px;
          background: linear-gradient(135deg, #ff6b6b 0%, #ee5a6f 100%);
          -webkit-background-clip: text;
          -webkit-text-fill-color: transparent;
          background-clip: text;
          margin-bottom: 12px;
        ">01</div>
        <h4 style="margin: 12px 0 4px; color: #1a1a2e; font-weight: 700;">Inquiry</h4>
        <p style="font-size: 13px; color: #666;">Requirement analysis</p>
      </div>
      
      <div class="step-card" style="
        background: white;
        padding: 30px 24px;
        border-radius: 16px;
        text-align: center;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
        animation: fadeInUp 0.8s ease-out 0.2s forwards;
        opacity: 0;
        transition: all 0.3s ease;
        border-top: 4px solid #00d4ff;
      " onmouseover="
        this.style.transform='translateY(-8px)';
        this.style.boxShadow='0 12px 30px rgba(0, 0, 0, 0.15)';
      " onmouseout="
        this.style.transform='translateY(0)';
        this.style.boxShadow='0 6px 20px rgba(0, 0, 0, 0.08)';
      ">
        <div style="
          font-weight: 900;
          font-size: 32px;
          background: linear-gradient(135deg, #00d4ff 0%, #00f2fe 100%);
          -webkit-background-clip: text;
          -webkit-text-fill-color: transparent;
          background-clip: text;
          margin-bottom: 12px;
        ">02</div>
        <h4 style="margin: 12px 0 4px; color: #1a1a2e; font-weight: 700;">Consult</h4>
        <p style="font-size: 13px; color: #666;">Product recommendation</p>
      </div>
      
      <div class="step-card" style="
        background: white;
        padding: 30px 24px;
        border-radius: 16px;
        text-align: center;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
        animation: fadeInUp 0.8s ease-out 0.3s forwards;
        opacity: 0;
        transition: all 0.3s ease;
        border-top: 4px solid #ffd700;
      " onmouseover="
        this.style.transform='translateY(-8px)';
        this.style.boxShadow='0 12px 30px rgba(0, 0, 0, 0.15)';
      " onmouseout="
        this.style.transform='translateY(0)';
        this.style.boxShadow='0 6px 20px rgba(0, 0, 0, 0.08)';
      ">
        <div style="
          font-weight: 900;
          font-size: 32px;
          background: linear-gradient(135deg, #ffd700 0%, #ffed4e 100%);
          -webkit-background-clip: text;
          -webkit-text-fill-color: transparent;
          background-clip: text;
          margin-bottom: 12px;
        ">03</div>
        <h4 style="margin: 12px 0 4px; color: #1a1a2e; font-weight: 700;">Sampling</h4>
        <p style="font-size: 13px; color: #666;">Approval & testing</p>
      </div>
      
      <div class="step-card" style="
        background: white;
        padding: 30px 24px;
        border-radius: 16px;
        text-align: center;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
        animation: fadeInUp 0.8s ease-out 0.4s forwards;
        opacity: 0;
        transition: all 0.3s ease;
        border-top: 4px solid #00ff88;
      " onmouseover="
        this.style.transform='translateY(-8px)';
        this.style.boxShadow='0 12px 30px rgba(0, 0, 0, 0.15)';
      " onmouseout="
        this.style.transform='translateY(0)';
        this.style.boxShadow='0 6px 20px rgba(0, 0, 0, 0.08)';
      ">
        <div style="
          font-weight: 900;
          font-size: 32px;
          background: linear-gradient(135deg, #00ff88 0%, #00d96f 100%);
          -webkit-background-clip: text;
          -webkit-text-fill-color: transparent;
          background-clip: text;
          margin-bottom: 12px;
        ">04</div>
        <h4 style="margin: 12px 0 4px; color: #1a1a2e; font-weight: 700;">Bulk Order</h4>
        <p style="font-size: 13px; color: #666;">Production & QC</p>
      </div>
      
      <div class="step-card" style="
        background: white;
        padding: 30px 24px;
        border-radius: 16px;
        text-align: center;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
        animation: fadeInUp 0.8s ease-out 0.5s forwards;
        opacity: 0;
        transition: all 0.3s ease;
        border-top: 4px solid #ff6b6b;
      " onmouseover="
        this.style.transform='translateY(-8px)';
        this.style.boxShadow='0 12px 30px rgba(0, 0, 0, 0.15)';
      " onmouseout="
        this.style.transform='translateY(0)';
        this.style.boxShadow='0 6px 20px rgba(0, 0, 0, 0.08)';
      ">
        <div style="
          font-weight: 900;
          font-size: 32px;
          background: linear-gradient(135deg, #ff6b6b 0%, #ee5a6f 100%);
          -webkit-background-clip: text;
          -webkit-text-fill-color: transparent;
          background-clip: text;
          margin-bottom: 12px;
        ">05</div>
        <h4 style="margin: 12px 0 4px; color: #1a1a2e; font-weight: 700;">Delivery</h4>
        <p style="font-size: 13px; color: #666;">+ Tech support</p>
      </div>
    </div>
  </div>
</div>

<!-- Why Us -->
<section style="
  background: linear-gradient(135deg, #ffffff 0%, #f5f7fa 100%);
  padding: 80px 0;
  position: relative;
  overflow: hidden;
">
  <div class="container">
    <div style="text-align: center; margin-bottom: 60px; animation: fadeInUp 0.8s ease-out forwards; opacity: 0;">
      <div class="section-label" style="color: #ff6b6b; font-weight: 700;">⭐ Trust advantage</div>
      <h2 class="section-title" style="
        font-size: 42px;
        font-weight: 900;
        color: #1a1a2e;
        margin-bottom: 16px;
      ">
        Why Industry Leaders <span style="background: linear-gradient(135deg, #ff6b6b 0%, #ee5a6f 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">Choose Us</span>
      </h2>
    </div>
    
    <div class="why-grid" style="
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
      gap: 28px;
    ">
      <div style="
        background: linear-gradient(135deg, rgba(255, 107, 107, 0.08) 0%, rgba(238, 90, 111, 0.04) 100%);
        border-radius: 20px;
        padding: 32px;
        border: 2px solid rgba(255, 107, 107, 0.1);
        animation: fadeInUp 0.8s ease-out 0.1s forwards;
        opacity: 0;
        transition: all 0.3s ease;
      " onmouseover="
        this.style.transform='translateY(-8px)';
        this.style.borderColor='rgba(255, 107, 107, 0.4)';
      " onmouseout="
        this.style.transform='translateY(0)';
        this.style.borderColor='rgba(255, 107, 107, 0.1)';
      ">
        <i class="fas fa-flask" style="
          font-size: 40px;
          background: linear-gradient(135deg, #ff6b6b 0%, #ee5a6f 100%);
          -webkit-background-clip: text;
          -webkit-text-fill-color: transparent;
          background-clip: text;
          display: block;
          margin-bottom: 16px;
        "></i>
        <h3 style="margin: 12px 0 8px; font-size: 18px; font-weight: 700; color: #1a1a2e;">Technical Expertise</h3>
        <p style="font-size: 14px; color: #666; line-height: 1.6;">Advanced polymer knowledge & hands-on industrial guidance.</p>
      </div>
      
      <div style="
        background: linear-gradient(135deg, rgba(0, 212, 255, 0.08) 0%, rgba(0, 242, 254, 0.04) 100%);
        border-radius: 20px;
        padding: 32px;
        border: 2px solid rgba(0, 212, 255, 0.1);
        animation: fadeInUp 0.8s ease-out 0.2s forwards;
        opacity: 0;
        transition: all 0.3s ease;
      " onmouseover="
        this.style.transform='translateY(-8px)';
        this.style.borderColor='rgba(0, 212, 255, 0.4)';
      " onmouseout="
        this.style.transform='translateY(0)';
        this.style.borderColor='rgba(0, 212, 255, 0.1)';
      ">
        <i class="fas fa-chart-line" style="
          font-size: 40px;
          background: linear-gradient(135deg, #00d4ff 0%, #00f2fe 100%);
          -webkit-background-clip: text;
          -webkit-text-fill-color: transparent;
          background-clip: text;
          display: block;
          margin-bottom: 16px;
        "></i>
        <h3 style="margin: 12px 0 8px; font-size: 18px; font-weight: 700; color: #1a1a2e;">Global Sourcing</h3>
        <p style="font-size: 14px; color: #666; line-height: 1.6;">Direct from top manufacturers in China, Korea & Germany.</p>
      </div>
      
      <div style="
        background: linear-gradient(135deg, rgba(255, 215, 0, 0.08) 0%, rgba(255, 237, 78, 0.04) 100%);
        border-radius: 20px;
        padding: 32px;
        border: 2px solid rgba(255, 215, 0, 0.1);
        animation: fadeInUp 0.8s ease-out 0.3s forwards;
        opacity: 0;
        transition: all 0.3s ease;
      " onmouseover="
        this.style.transform='translateY(-8px)';
        this.style.borderColor='rgba(255, 215, 0, 0.4)';
      " onmouseout="
        this.style.transform='translateY(0)';
        this.style.borderColor='rgba(255, 215, 0, 0.1)';
      ">
        <i class="fas fa-certificate" style="
          font-size: 40px;
          background: linear-gradient(135deg, #ffd700 0%, #ffed4e 100%);
          -webkit-background-clip: text;
          -webkit-text-fill-color: transparent;
          background-clip: text;
          display: block;
          margin-bottom: 16px;
        "></i>
        <h3 style="margin: 12px 0 8px; font-size: 18px; font-weight: 700; color: #1a1a2e;">Quality Assurance</h3>
        <p style="font-size: 14px; color: #666; line-height: 1.6;">Batch consistency & international standard testing.</p>
      </div>
      
      <div style="
        background: linear-gradient(135deg, rgba(0, 255, 136, 0.08) 0%, rgba(0, 217, 111, 0.04) 100%);
        border-radius: 20px;
        padding: 32px;
        border: 2px solid rgba(0, 255, 136, 0.1);
        animation: fadeInUp 0.8s ease-out 0.4s forwards;
        opacity: 0;
        transition: all 0.3s ease;
      " onmouseover="
        this.style.transform='translateY(-8px)';
        this.style.borderColor='rgba(0, 255, 136, 0.4)';
      " onmouseout="
        this.style.transform='translateY(0)';
        this.style.borderColor='rgba(0, 255, 136, 0.1)';
      ">
        <i class="fas fa-clock" style="
          font-size: 40px;
          background: linear-gradient(135deg, #00ff88 0%, #00d96f 100%);
          -webkit-background-clip: text;
          -webkit-text-fill-color: transparent;
          background-clip: text;
          display: block;
          margin-bottom: 16px;
        "></i>
        <h3 style="margin: 12px 0 8px; font-size: 18px; font-weight: 700; color: #1a1a2e;">Rapid Support</h3>
        <p style="font-size: 14px; color: #666; line-height: 1.6;">Local stock in Ashulia, immediate on-site assistance.</p>
      </div>
    </div>
  </div>
</section>

<!-- Blog Section -->
<section id="blog" style="
  background: linear-gradient(135deg, #f5f7fa 0%, #e8ecf1 100%);
  padding: 80px 0;
">
  <div class="container">
    <div style="text-align: center; margin-bottom: 60px; animation: fadeInUp 0.8s ease-out forwards; opacity: 0;">
      <div class="section-label" style="color: #ff6b6b; font-weight: 700;">📰 Latest insights</div>
      <h2 class="section-title" style="
        font-size: 42px;
        font-weight: 900;
        color: #1a1a2e;
        margin-bottom: 16px;
      ">
        Industry News & <span style="background: linear-gradient(135deg, #ff6b6b 0%, #ee5a6f 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">Expert Articles</span>
      </h2>
    </div>
    
    <div class="blog-grid" style="
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
      gap: 30px;
      margin-bottom: 50px;
    ">
      @forelse ($blogs as $blog)
      <article class="blog-card" style="
        background: white;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
        animation: fadeInUp 0.8s ease-out forwards;
        opacity: 0;
        transition: all 0.3s ease;
      " onmouseover="
        this.style.transform='translateY(-10px)';
        this.style.boxShadow='0 16px 40px rgba(0, 0, 0, 0.15)';
        this.querySelector('.blog-image').style.transform='scale(1.08)';
      " onmouseout="
        this.style.transform='translateY(0)';
        this.style.boxShadow='0 8px 25px rgba(0, 0, 0, 0.08)';
        this.querySelector('.blog-image').style.transform='scale(1)';
      ">
        <div class="blog-image" style="
          background-image: url('https://picsum.photos/id/{{ rand(180, 190) }}/600/250');
          height: 250px;
          background-size: cover;
          background-position: center;
          transition: transform 0.3s ease;
          overflow: hidden;
        "></div>
        <div class="blog-content" style="padding: 28px;">
          <div class="blog-meta" style="margin-bottom: 12px;">
            <span class="blog-category" style="
              background: linear-gradient(135deg, #ff6b6b 0%, #ee5a6f 100%);
              color: white;
              padding: 6px 12px;
              border-radius: 20px;
              font-size: 12px;
              font-weight: 600;
              display: inline-block;
            ">
              {{ $blog->category_id == 1 ? 'Manufacturing' : ($blog->category_id == 2 ? 'Standards' : 'Industry') }}
            </span>
          </div>
          <h3 style="font-size: 18px; font-weight: 700; color: #1a1a2e; margin-bottom: 12px; line-height: 1.4;">{{ $blog->title }}</h3>
          <p style="color: #666; font-size: 14px; line-height: 1.6; margin-bottom: 20px;">{{ Str::limit($blog->excerpt, 100) }}</p>
          <a href="{{ route('blog-details', $blog->slug) }}" style="
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #ff6b6b;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
          " onmouseover="this.style.color='#ee5a6f'; this.style.transform='translateX(5px)';" onmouseout="this.style.color='#ff6b6b'; this.style.transform='translateX(0)';">
            Read More <i class="fas fa-arrow-right"></i>
          </a>
        </div>
      </article>
      @empty
      <p style="text-align: center; padding: 40px; grid-column: 1/-1;">No blog articles available.</p>
      @endforelse
    </div>
    
    <div style="text-align: center; animation: fadeInUp 1s ease-out forwards; opacity: 0;">
      <a href="{{ route('blog') }}" class="btn-circle btn-primary" style="
        background: linear-gradient(135deg, #ff6b6b 0%, #ee5a6f 100%);
        border: none;
        font-weight: 600;
        box-shadow: 0 8px 25px rgba(255, 107, 107, 0.3);
      ">View All Articles <i class="fas fa-arrow-right"></i></a>
    </div>
  </div>
</section>

<!-- CTA Banner -->
<div class="container">
  <div class="cta-banner" style="
    background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%);
    background-image: url('https://picsum.photos/id/200/1600/400');
    background-size: cover;
    background-position: center;
    background-blend-mode: overlay;
    border-radius: 24px;
    padding: 60px 40px;
    text-align: center;
    position: relative;
    overflow: hidden;
    margin: 80px 0 60px;
    animation: fadeInUp 0.8s ease-out forwards;
    opacity: 0;
  ">
    <!-- Animated background elements -->
    <div style="
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: linear-gradient(135deg, rgba(255, 107, 107, 0.1) 0%, rgba(0, 212, 255, 0.1) 100%);
      z-index: 0;
    "></div>
    
    <div style="position: relative; z-index: 1;">
      <h2 style="
        font-family: 'Playfair Display';
        font-size: 42px;
        font-weight: 900;
        color: white;
        margin-bottom: 16px;
      ">
        Ready to <span style="background: linear-gradient(135deg, #ffd700 0%, #ffed4e 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">modernize</span> your production?
      </h2>
      <p style="
        margin: 16px auto;
        max-width: 550px;
        color: #e0e0e0;
        font-size: 16px;
        line-height: 1.8;
        margin-bottom: 32px;
      ">
        Get samples, technical datasheets or schedule a factory visit.
      </p>
      <div style="display: flex; gap: 16px; justify-content: center; flex-wrap: wrap;">
        <a href="#contact" class="btn-circle btn-primary" style="
          background: linear-gradient(135deg, #ff6b6b 0%, #ee5a6f 100%);
          border: none;
          font-weight: 600;
          box-shadow: 0 8px 25px rgba(255, 107, 107, 0.3);
        "><i class="fas fa-envelope"></i> Request Quote</a>
        <a href="#products" class="btn-circle btn-outline" style="
          border: 2px solid white;
          color: white;
          font-weight: 600;
          background: transparent;
        "><i class="fas fa-boxes"></i> View Catalog</a>
      </div>
    </div>
  </div>
</div>

@verbatim
<script>
  // Intersection Observer for animations on scroll
  const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
  };

  const observer = new IntersectionObserver(function(entries) {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('in-view');
      }
    });
  }, observerOptions);

  // Observe all elements with animation
  document.querySelectorAll('[style*="animation"]').forEach(el => {
    if (el.style.animation.includes('fadeInUp') || 
        el.style.animation.includes('slideIn') || 
        el.style.animation.includes('scaleIn')) {
      observer.observe(el);
    }
  });

  // Add animation to elements on page load
  window.addEventListener('load', () => {
    document.querySelectorAll('[style*="opacity: 0"]').forEach((el, index) => {
      setTimeout(() => {
        if (el.style.animation) {
          el.style.opacity = '0';
        }
      }, index * 50);
    });
  });

  // Smooth scroll behavior
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        target.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
      }
    });
  });
</script>
@endverbatim

@endsection