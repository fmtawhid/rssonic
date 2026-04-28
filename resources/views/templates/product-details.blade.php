@extends('layouts.master')
@section('content')
<div class="page-hero">
  <div class="container">
    <div class="breadcrumb"><a href="index.html">Home</a> / <a href="products.html">Products</a> / Silicone Printing System</div>
    <h1>Liquid <span>Silicone System</span></h1>
    <div class="hero-line"></div>
  </div>
</div>

<section style="padding: 60px 0;">
  <div class="container">
    <div class="product-detail-grid">
      <div class="product-gallery">
        <div class="main-image-wrapper">
          <img id="mainImage" class="main-image" src="https://images.unsplash.com/photo-1581091226033-d5c48150dbaa?w=600&h=600&fit=crop" alt="Silicone">
          <span class="product-badge-detail"><i class="fas fa-crown"></i> Best Seller</span>
        </div>
        <div class="thumbnails">
          <img class="thumb active" src="https://images.unsplash.com/photo-1581091226033-d5c48150dbaa?w=120&h=120&fit=crop" onclick="changeProductImage(this, 'mainImage', 'https://images.unsplash.com/photo-1581091226033-d5c48150dbaa?w=600&h=600&fit=crop')">
          <img class="thumb" src="https://images.unsplash.com/photo-1581092160602-ee22621c76e7?w=120&h=120&fit=crop" onclick="changeProductImage(this, 'mainImage', 'https://images.unsplash.com/photo-1581092160602-ee22621c76e7?w=600&h=600&fit=crop')">
          <img class="thumb" src="https://images.unsplash.com/photo-1581092335871-4b0b98b0b6b2?w=120&h=120&fit=crop" onclick="changeProductImage(this, 'mainImage', 'https://images.unsplash.com/photo-1581092335871-4b0b98b0b6b2?w=600&h=600&fit=crop')">
        </div>
      </div>
      <div class="product-details-sidebar">
        <h2>Two-Component Liquid Silicone</h2>
        
        <div class="rating-section">
          <div class="rating-stars">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
          <span class="rating-count">(48 reviews)</span>
        </div>

        <div class="price-section">
          <span class="price-label">Starting Price</span>
          <span class="price-main">৳12,500</span>
          <span class="price-note">Bulk discounts available</span>
        </div>

        <p class="product-desc">High-performance silicone system for textile screen printing and 3D emblem molding. Superior elasticity and wash fastness. Proven in production for over 4 years with hundreds of satisfied customers.</p>

        <div class="quick-specs">
          <h4>Key Features</h4>
          <ul>
            <li><i class="fas fa-check"></i> Excellent adhesion to textiles</li>
            <li><i class="fas fa-check"></i> Wash fastness ISO 4-5 rating</li>
            <li><i class="fas fa-check"></i> UV resistant formulation</li>
            <li><i class="fas fa-check"></i> Customizable hardness (30A-70A)</li>
            <li><i class="fas fa-check"></i> Available in standard or custom colors</li>
          </ul>
        </div>

        <div class="action-buttons">
          <a href="contact.html" class="btn-circle btn-red">Request a Quote <i class="fas fa-arrow-right"></i></a>
          <a href="#" class="btn-circle btn-outline-blue">Download Datasheet <i class="fas fa-download"></i></a>
        </div>

        <div class="stock-info">
          <span class="stock-badge in-stock"><i class="fas fa-check-circle"></i> In Stock</span>
          <span class="delivery-info"><i class="fas fa-truck"></i> Ready to ship</span>
        </div>
      </div>
    </div>
  </div>
</section>

<section style="background: var(--gray-bg); padding: 60px 0;">
  <div class="container">
    <h3 style="font-family: 'Playfair Display'; font-size: 28px; color: var(--primary-blue); margin-bottom: 30px;">Technical Specifications</h3>
    <div class="specs-table-wrapper">
      <table class="specs-table">
        <tr>
          <td class="spec-name">Mixing Ratio</td>
          <td class="spec-value">10:1 (Base:Catalyst)</td>
          <td class="spec-name">Pot Life</td>
          <td class="spec-value">5-8 minutes @ 25°C</td>
        </tr>
        <tr>
          <td class="spec-name">Viscosity</td>
          <td class="spec-value">35,000 - 45,000 cP</td>
          <td class="spec-name">Specific Gravity</td>
          <td class="spec-value">1.12 ± 0.05</td>
        </tr>
        <tr>
          <td class="spec-name">Curing Temperature</td>
          <td class="spec-value">120°C - 150°C</td>
          <td class="spec-name">Curing Time</td>
          <td class="spec-value">20-60 minutes</td>
        </tr>
        <tr>
          <td class="spec-name">Hardness (Shore A)</td>
          <td class="spec-value">30A - 70A (adjustable)</td>
          <td class="spec-name">Elongation at Break</td>
          <td class="spec-value">150-300%</td>
        </tr>
        <tr>
          <td class="spec-name">Tensile Strength</td>
          <td class="spec-value">2.5 - 4.5 MPa</td>
          <td class="spec-name">Color Retention</td>
          <td class="spec-value">Excellent (>500 washes)</td>
        </tr>
        <tr>
          <td class="spec-name">Storage Life</td>
          <td class="spec-value">12 months @ 15-25°C</td>
          <td class="spec-name">Package Size</td>
          <td class="spec-value">5L, 20L, 200L buckets</td>
        </tr>
      </table>
    </div>
  </div>
</section>

<section style="padding: 60px 0;">
  <div class="container">
    <h3 style="font-family: 'Playfair Display'; font-size: 28px; color: var(--primary-blue); margin-bottom: 30px;">Applications & Use Cases</h3>
    <div class="applications-grid">
      <div class="app-use-card">
        <div class="app-icon"><i class="fas fa-shirt"></i></div>
        <h4>Textile Screen Printing</h4>
        <p>Direct screen printing on cotton, polyester, and blended fabrics for logos and designs.</p>
      </div>
      <div class="app-use-card">
        <div class="app-icon"><i class="fas fa-cube"></i></div>
        <h4>3D Emblem Molding</h4>
        <p>Create raised 3D logos for caps, jackets, and premium apparel with superior depth.</p>
      </div>
      <div class="app-use-card">
        <div class="app-icon"><i class="fas fa-backpack"></i></div>
        <h4>Bag & Accessory Branding</h4>
        <p>Durable logo application on bags, wallets, and fashion accessories.</p>
      </div>
      <div class="app-use-card">
        <div class="app-icon"><i class="fas fa-shoe-prints"></i></div>
        <h4>Footwear Labels</h4>
        <p>Logo application and labeling for shoes, sneakers, and sports footwear.</p>
      </div>
    </div>
  </div>
</section>

<section style="background: var(--gray-bg); padding: 60px 0;">
  <div class="container">
    <h3 style="font-family: 'Playfair Display'; font-size: 28px; color: var(--primary-blue); margin-bottom: 30px;">Customer Reviews</h3>
    <div class="reviews-grid">
      <div class="review-card">
        <div class="review-header">
          <div class="review-author">
            <h5>Ahmed Khan</h5>
            <p>Screen Printing Manager, Dhaka</p>
          </div>
          <div class="review-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
        </div>
        <p class="review-text">"Excellent quality! We've been using this silicone for 2 years now. The wash fastness is outstanding and color consistency is perfect. Highly recommend."</p>
      </div>
      <div class="review-card">
        <div class="review-header">
          <div class="review-author">
            <h5>Fatima Rani</h5>
            <p>Garment Manufacturer, Chittagong</p>
          </div>
          <div class="review-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
        </div>
        <p class="review-text">"Best product for 3D emblem work. Easy to mix, great flow properties, and cures perfectly. Customer support is also very responsive."</p>
      </div>
      <div class="review-card">
        <div class="review-header">
          <div class="review-author">
            <h5>Hassan Mahmud</h5>
            <p>Production Lead, Sylhet</p>
          </div>
          <div class="review-rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
          </div>
        </div>
        <p class="review-text">"Good quality and reasonable pricing. Would appreciate faster delivery options for bulk orders. Otherwise satisfied."</p>
      </div>
    </div>
  </div>
</section>
@endsection