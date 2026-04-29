@extends('layouts.master')
@section('content')

<!-- Hero Section -->
<section class="hero" style="padding: 50px 0 40px;">
  <div class="container">
    <div class="hero-grid">
      <div>
        
        <h1>RS Emblem <span>& New Materials</span></h1>
        <div class="hero-sub">Innovative materials · Precision machinery</div>
        <p class="hero-desc">Advanced printing materials, high-performance polymers, and industrial machinery solutions. Bridging global technology with local production — trusted by garment, footwear, and accessory manufacturers.</p>
        <div class="hero-btns">
          <a href="#products" class="btn-circle btn-primary">Explore Machinery <i class="fas fa-arrow-right"></i></a>
          <a href="#contact" class="btn-circle btn-outline">Request a Quote</a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-10">
            <!-- Card 1 -->
            <div class="bg-white rounded-2xl shadow-md p-6 text-center hover:shadow-xl transition duration-300">
                <h2 style="font-size: 40px; font-weight: 800; color: var(--primary-red); font-family: 'Roboto', sans-serif; margin: 0;">5+</h2>
                <p style="margin-top: 12px; color: #64748B; font-weight: 500; font-family: 'Roboto', sans-serif;">Years Excellence</p>
            </div>
            <!-- Card 2 -->
            <div class="bg-white rounded-2xl shadow-md p-6 text-center hover:shadow-xl transition duration-300">
                <h2 style="font-size: 40px; font-weight: 800; color: var(--primary-red); font-family: 'Roboto', sans-serif; margin: 0;">4</h2>
                <p style="margin-top: 12px; color: #64748B; font-weight: 500; font-family: 'Roboto', sans-serif;">Industry Verticals</p>
            </div>
            <!-- Card 3 -->
            <div class="bg-white rounded-2xl shadow-md p-6 text-center hover:shadow-xl transition duration-300">
                <h2 style="font-size: 40px; font-weight: 800; color: var(--primary-red); font-family: 'Roboto', sans-serif; margin: 0;">100%</h2>
                <p style="margin-top: 12px; color: #64748B; font-weight: 500; font-family: 'Roboto', sans-serif;">Quality Assured</p>
            </div>
        </div>
      </div>
      <div class="hero-image" style="background-image: url('https://picsum.photos/id/104/600/400'); background-size: cover; background-position: center; min-height: 400px; border-radius: 20px; display: flex; align-items: flex-end; justify-content: center; padding-bottom: 16px;">
        <div style="display: flex; gap: 8px; justify-content: center;">
          <span class="btn-circle-small" style="background: rgba(255,255,255,0.95);"><i class="fas fa-microchip"></i> German Tech</span>
          <span class="btn-circle-small" style="background: rgba(255,255,255,0.95);"><i class="fas fa-truck"></i> Local Stock</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- About Section -->
<div id="about" style="background: #FFFFFF; padding: 60px 0;">
  <div class="container">
    <div class="about-grid">
      <div>
        <div class="section-label">About RS Emblem</div>
        <h2 class="section-title">Your Trusted <span>Industrial Partner</span> in Bangladesh</h2>
        <p style="color: var(--text-muted); line-height: 1.7; margin-bottom: 20px;">Headquartered in Ashulia, Savar, Dhaka — the heart of Bangladesh's industrial zone. We specialize in advanced printing materials, high-performance polymers, silicone systems, TPU heat transfer, and complete machinery solutions.</p>
        <p style="color: var(--text-muted); line-height: 1.7;">With strong international partnerships from China, Korea & Germany, we deliver consistent quality, technical support, and on-time delivery.</p>
        <a href="#contact" class="btn-circle btn-primary" style="margin-top: 24px;">Partner with Us <i class="fas fa-handshake"></i></a>
      </div>
      <div class="features-list">
        <div class="feat-item"><div class="num">01</div><h4 style="margin-top: 8px;">Expert Sourcing</h4><p style="font-size:13px;">Direct from global manufacturers</p></div>
        <div class="feat-item"><div class="num">02</div><h4 style="margin-top: 8px;">Quality Control</h4><p style="font-size:13px;">Rigorous batch testing</p></div>
        <div class="feat-item"><div class="num">03</div><h4 style="margin-top: 8px;">Local Stock</h4><p style="font-size:13px;">Fast delivery Ashulia warehouse</p></div>
        <div class="feat-item"><div class="num">04</div><h4 style="margin-top: 8px;">Tech Support</h4><p style="font-size:13px;">On-site production assistance</p></div>
      </div>
    </div>
  </div>
</div>

<!-- Products Section -->
<section id="products" style="background: var(--gray-bg); padding: 60px 0;">
  <div class="container">
    <div class="section-label">Premium industrial range</div>
    <h2 class="section-title">Machinery & <span>Material Solutions</span></h2>
    <div class="products-grid">
      @forelse ($products as $product)
      <div class="product-card">
        <img class="product-img" src="https://picsum.photos/id/{{ rand(0, 200) }}/500/200" alt="{{ $product->name }}">
        <div class="product-info">
          <h3>{{ $product->name }}</h3>
          <p>{{ Str::limit($product->description, 80) }}</p>
          <a href="{{ route('product-details', $product->slug) }}" class="btn-circle-small" style="margin-top: 12px;"><i class="fas fa-arrow-right"></i> View Details</a>
        </div>
      </div>
      @empty
      <p style="text-align: center; padding: 40px;">No products available.</p>
      @endforelse
    </div>
    <div style="text-align: center; margin-top: 40px;">
      <a href="#contact" class="btn-circle btn-primary"><i class="fas fa-phone-alt"></i> Contact our expert</a>
    </div>
  </div>
</section>

<!-- Business Segments -->
<section id="segments" style="background: white; padding: 60px 0;">
  <div class="container">
    <div class="section-label">Core capabilities</div>
    <h2 class="section-title">Business <span>Segments</span> We Serve</h2>
    <div class="segments-grid">
      <div class="seg-card"><i class="fas fa-microchip" style="font-size: 32px; color: var(--primary-red); margin-bottom: 16px;"></i><h3>Advanced Industrial Materials</h3><p>Silicone, TPU, PVC-based materials engineered for durability and premium branding.</p></div>
      <div class="seg-card"><i class="fas fa-industry" style="font-size: 32px; color: var(--primary-red); margin-bottom: 16px;"></i><h3>Precision Machinery</h3><p>Dispensing systems, molding equipment, and integrated production lines.</p></div>
      <div class="seg-card"><i class="fas fa-globe-asia" style="font-size: 32px; color: var(--primary-red); margin-bottom: 16px;"></i><h3>Global Sourcing</h3><p>Strategic partnerships with China, Korea & Germany — reliable supply chain.</p></div>
      <div class="seg-card"><i class="fas fa-chalkboard-user" style="font-size: 32px; color: var(--primary-red); margin-bottom: 16px;"></i><h3>Technical Support</h3><p>On-site process optimization, waste reduction & high-yield consulting.</p></div>
    </div>
  </div>
</section>

<!-- Process Steps -->
<div style="background: var(--gray-bg); padding: 60px 0;">
  <div class="container">
    <div class="section-label">Seamless workflow</div>
    <h2 class="section-title">Our <span>Work Process</span></h2>
    <div class="process-steps">
      <div class="step-card"><div style="font-weight:800; font-size:28px; color:var(--primary-red);">01</div><h4 style="margin:12px 0 4px;">Inquiry</h4><p style="font-size:13px;">Requirement analysis</p></div>
      <div class="step-card"><div style="font-weight:800; font-size:28px; color:var(--primary-red);">02</div><h4 style="margin:12px 0 4px;">Consult</h4><p style="font-size:13px;">Product recommendation</p></div>
      <div class="step-card"><div style="font-weight:800; font-size:28px; color:var(--primary-red);">03</div><h4 style="margin:12px 0 4px;">Sampling</h4><p style="font-size:13px;">Approval & testing</p></div>
      <div class="step-card"><div style="font-weight:800; font-size:28px; color:var(--primary-red);">04</div><h4 style="margin:12px 0 4px;">Bulk Order</h4><p style="font-size:13px;">Production & QC</p></div>
      <div class="step-card"><div style="font-weight:800; font-size:28px; color:var(--primary-red);">05</div><h4 style="margin:12px 0 4px;">Delivery</h4><p style="font-size:13px;">+ Tech support</p></div>
    </div>
  </div>
</div>

<!-- Why Us -->
<section style="background: white; padding: 60px 0;">
  <div class="container">
    <div class="section-label">Trust advantage</div>
    <h2 class="section-title">Why Industry Leaders <span>Choose Us</span></h2>
    <div class="why-grid">
      <div style="background:var(--gray-light); border-radius: 20px; padding: 24px;"><i class="fas fa-flask" style="font-size: 32px; color: var(--primary-red);"></i><h3 style="margin: 12px 0 6px; font-size: 18px;">Technical Expertise</h3><p style="font-size: 14px;">Advanced polymer knowledge & hands-on industrial guidance.</p></div>
      <div style="background:var(--gray-light); border-radius: 20px; padding: 24px;"><i class="fas fa-chart-line" style="font-size: 32px; color: var(--primary-red);"></i><h3 style="margin: 12px 0 6px; font-size: 18px;">Global Sourcing</h3><p style="font-size: 14px;">Direct from top manufacturers in China, Korea & Germany.</p></div>
      <div style="background:var(--gray-light); border-radius: 20px; padding: 24px;"><i class="fas fa-certificate" style="font-size: 32px; color: var(--primary-red);"></i><h3 style="margin: 12px 0 6px; font-size: 18px;">Quality Assurance</h3><p style="font-size: 14px;">Batch consistency & international standard testing.</p></div>
      <div style="background:var(--gray-light); border-radius: 20px; padding: 24px;"><i class="fas fa-clock" style="font-size: 32px; color: var(--primary-red);"></i><h3 style="margin: 12px 0 6px; font-size: 18px;">Rapid Support</h3><p style="font-size: 14px;">Local stock in Ashulia, immediate on-site assistance.</p></div>
    </div>
  </div>
</section>

<!-- Blog Section -->
<section id="blog" style="background: white; padding: 60px 0;">
  <div class="container">
    <div class="section-label">Latest insights</div>
    <h2 class="section-title">Industry News & <span>Expert Articles</span></h2>
    <div class="blog-grid">
      @forelse ($blogs as $blog)
      <article class="blog-card">
        <div class="blog-image" style="background-image: url('https://picsum.photos/id/{{ rand(180, 190) }}/600/250');"></div>
        <div class="blog-content">
          <div class="blog-meta"><span class="blog-category">{{ $blog->category_id == 1 ? 'Manufacturing' : ($blog->category_id == 2 ? 'Standards' : 'Industry') }}</span></div>
          <h3>{{ $blog->title }}</h3>
          <p>{{ Str::limit($blog->excerpt, 100) }}</p>
          <a href="{{ route('blog-details', $blog->slug) }}" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
        </div>
      </article>
      @empty
      <p style="text-align: center; padding: 40px;">No blog articles available.</p>
      @endforelse
    </div>
    <div style="text-align: center; margin-top: 40px;">
      <a href="{{ route('blog') }}" class="btn-circle btn-primary">View All Articles <i class="fas fa-arrow-right"></i></a>
    </div>
  </div>
</section>

<!-- CTA Banner -->
<div class="container">
  <div class="cta-banner">
    <h2 style="font-family: 'Playfair Display'; font-size: 36px; font-weight: 800;">Ready to modernize your production?</h2>
    <p style="margin: 16px auto; max-width: 550px; color: #3B4A5C; font-size: 16px;">Get samples, technical datasheets or schedule a factory visit.</p>
    <div style="display: flex; gap: 16px; justify-content: center; flex-wrap: wrap; margin-top: 24px;">
      <a href="#contact" class="btn-circle btn-primary"><i class="fas fa-envelope"></i> Request Quote</a>
      <a href="#products" class="btn-circle btn-outline"><i class="fas fa-boxes"></i> View Catalog</a>
    </div>
  </div>
</div>

@endsection