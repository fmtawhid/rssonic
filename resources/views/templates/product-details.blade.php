@extends('layouts.master')
@section('content')
<div class="page-hero">
  <div class="container">
    <div class="breadcrumb">
      <a href="{{ route('home') }}">Home</a> / 
      <a href="{{ $product->product_type === 'machine' ? route('machinery') : route('materials') }}">
        {{ $product->product_type === 'machine' ? 'Products' : 'Raw Materials' }}
      </a> / 
      {{ $product->name }}
    </div>
    <h1>{{ $product->name }}</h1>
    <div class="hero-line"></div>
    <p style="color: rgba(255,255,255,0.7); margin-top: 20px;">{{ $product->description }}</p>
  </div>
</div>

<section style="padding: 60px 0;">
  <div class="container">
    <div class="product-detail-grid">
      <div class="product-gallery">
        <div class="main-image-wrapper">
          @if($product->image)
            <img id="mainImage" class="main-image" src="{{ asset('uploads/products/' . $product->image) }}" alt="{{ $product->name }}">
          @else
            <img id="mainImage" class="main-image" src="https://picsum.photos/id/{{ rand(0, 100) }}/600/600" alt="{{ $product->name }}">
          @endif
          <span class="product-badge-detail">
            <i class="fas fa-{{ $product->product_type === 'machine' ? 'cogs' : 'flask' }}"></i> 
            {{ $product->product_type === 'machine' ? 'Machine' : 'Raw Material' }}
          </span>
        </div>
      </div>
      
      <div class="product-details-sidebar">
        <h2>{{ $product->name }}</h2>
        
        <div class="rating-section">
          <div class="rating-stars">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
          <span class="rating-count">(Product ID: {{ $product->id }})</span>
        </div>

        <div class="price-section">
          <span class="price-label">Product Type</span>
          <span class="price-main" style="text-transform: capitalize;">{{ str_replace('_', ' ', $product->product_type) }}</span>
          <span class="price-note">Premium Quality Available</span>
        </div>

        <p class="product-desc">{{ $product->description }}</p>

        @if($product->attributes->count() > 0)
          <div class="quick-specs">
            <h4 style="color: var(--primary-blue);">Technical Specifications</h4>
            <ul style="color: var(--text-muted);">
              @foreach($product->attributes as $attribute)
                <li><i class="fas fa-check" style="color: var(--primary-red);\"></i> <strong style="color: var(--primary-blue);">{{ $attribute->name }}:</strong> {{ $attribute->pivot->value }}</li>
              @endforeach
            </ul>
          </div>
        @endif

        <div class="action-buttons">
          <a href="{{ route('contact') }}" class="btn-circle btn-red">Request a Quote <i class="fas fa-arrow-right"></i></a>
          <a href="javascript:void(0)" class="btn-circle btn-outline-blue" onclick="alert('Datasheet coming soon!')">Download Datasheet <i class="fas fa-download"></i></a>
        </div>

        <div class="stock-info">
          <span class="stock-badge in-stock"><i class="fas fa-check-circle"></i> {{ $product->is_active ? 'Active' : 'Inactive' }}</span>
          <span class="delivery-info"><i class="fas fa-calendar"></i> Updated: {{ $product->updated_at->format('d M Y') }}</span>
        </div>
      </div>
    </div>
  </div>
</section>

<section style="background: var(--gray-bg); padding: 60px 0;">
  <div class="container">
    <h3 style="font-family: 'Playfair Display'; font-size: 28px; color: var(--primary-blue); margin-bottom: 30px;">Complete Specifications</h3>
    <div class="specs-table-wrapper">
      <table class="specs-table">
        @foreach($product->attributes->chunk(2) as $chunk)
          <tr>
            @foreach($chunk as $attribute)
              <td class="spec-name">{{ $attribute->name }}</td>
              <td class="spec-value">{{ $attribute->pivot->value }}</td>
            @endforeach
            @if($chunk->count() === 1)
              <td class="spec-name"></td>
              <td class="spec-value"></td>
            @endif
          </tr>
        @endforeach
      </table>
    </div>
  </div>
</section>

<section style="padding: 60px 0;">
  <div class="container">
    <h3 style="font-family: 'Playfair Display'; font-size: 28px; color: var(--primary-blue); margin-bottom: 30px;">Product Information</h3>
    <div class="applications-grid">
      <div class="app-use-card">
        <div class="app-icon"><i class="fas fa-info-circle"></i></div>
        <h4>Product Type</h4>
        <p style="text-transform: capitalize;">{{ str_replace('_', ' ', $product->product_type) }}</p>
      </div>
      <div class="app-use-card">
        <div class="app-icon"><i class="fas fa-box"></i></div>
        <h4>SKU</h4>
        <p>{{ $product->slug }}</p>
      </div>
      <div class="app-use-card">
        <div class="app-icon"><i class="fas fa-list"></i></div>
        <h4>Specifications Count</h4>
        <p>{{ $product->attributes->count() }} technical specs</p>
      </div>
      <div class="app-use-card">
        <div class="app-icon"><i class="fas fa-check"></i></div>
        <h4>Status</h4>
        <p>{{ $product->is_active ? 'Available' : 'Unavailable' }}</p>
      </div>
    </div>
  </div>
</section>

<section style="background: var(--gray-bg); padding: 60px 0;">
  <div class="container">
    <h3 style="font-family: 'Playfair Display'; font-size: 28px; color: var(--primary-blue); margin-bottom: 30px;">Get in Touch</h3>
    <div class="reviews-grid">
      <div class="review-card">
        <div class="review-header">
          <div class="review-author">
            <h5>Interested in this product?</h5>
            <p>Contact our sales team</p>
          </div>
        </div>
        <p class="review-text">We provide comprehensive product information, technical support, and custom solutions for your manufacturing needs.</p>
        <a href="{{ route('contact') }}" class="btn-circle btn-red" style="margin-top: 15px;">Contact Us <i class="fas fa-arrow-right"></i></a>
      </div>
    </div>
  </div>
</section>
@endsection