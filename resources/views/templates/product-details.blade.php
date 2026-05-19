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

        <!-- @if($product->attributes->count() > 0)
          <div class="quick-specs">
            <h4 style="color: var(--primary-blue);">Technical Specifications</h4>
            <ul style="color: var(--text-muted);">
              @foreach($product->attributes as $attribute)
                <li><i class="fas fa-check" style="color: var(--primary-red);\"></i> <strong style="color: var(--primary-blue);">{{ $attribute->name }}:</strong> {{ $attribute->pivot->value }}</li>
              @endforeach
            </ul>
          </div>
        @endif -->

        <!-- @if($product->features->count() > 0)
          <div class="quick-specs" style="margin-top: 20px;">
            <h4 style="color: var(--primary-blue);">✨ Product Features</h4>
            <ul style="color: var(--text-muted); list-style-type: disc; padding-left: 20px; line-height: 1.8;">
              @foreach($product->features as $feature)
                <li><strong style="color: var(--primary-blue);">{{ $feature->name }}</strong></li>
              @endforeach
            </ul>
          </div>
        @endif -->

        <div class="action-buttons" style="display: grid; gap: 12px; margin-top: 25px;">
          <a href="{{ route('contact') }}" class="btn-circle btn-red" style="text-align: center; padding: 12px; font-weight: 600; display: flex; align-items: center; justify-content: center; gap: 8px;">
            <i class="fas fa-envelope" style="font-size: 16px;"></i> Request a Quote
          </a>
          <a href="https://wa.me/+8801234567890?text=Hi%20I%20am%20interested%20in%20{{ urlencode($product->name) }}" target="_blank" class="btn-circle" style="text-align: center; padding: 12px; font-weight: 600; display: flex; align-items: center; justify-content: center; gap: 8px; background: #25D366; color: white; border-radius: 6px; text-decoration: none; transition: all 0.2s;">
            <i class="fab fa-whatsapp" style="font-size: 18px;"></i> Chat on WhatsApp
          </a>
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


@if($product->features->count() > 0)
<section style="padding: 60px 0; background: linear-gradient(135deg, rgba(41, 128, 185, 0.05) 0%, rgba(46, 204, 113, 0.05) 100%);">
  <div class="container">
    <h3 style="font-family: 'Playfair Display'; font-size: 28px; color: var(--primary-blue); margin-bottom: 40px;">✨ Key Features</h3>
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;">
      @foreach($product->features as $feature)
        <div style="display: flex; align-items: center; padding: 20px; background: white; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); border-left: 4px solid var(--primary-red);">
          <div style="font-size: 24px; margin-right: 15px; color: var(--primary-red);">✓</div>
          <div>
            <h5 style="margin: 0; color: var(--primary-blue); font-weight: 600;">{{ $feature->name }}</h5>
            <p style="margin: 5px 0 0 0; color: var(--text-muted); font-size: 13px;">Premium Quality Feature</p>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
@endif
<section style="background: linear-gradient(135deg, var(--primary-blue) 0%, var(--primary-red) 100%); padding: 60px 0; color: white; text-align: center;">
  <div class="container">
    <h3 style="font-family: 'Playfair Display'; font-size: 36px; margin-bottom: 15px; margin-top: 0;">Ready to Get Started?</h3>
    <p style="font-size: 16px; margin-bottom: 30px; opacity: 0.9;">Contact our team today for more information or to request a quotation</p>
    
    <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
      <a href="{{ route('contact') }}" style="display: inline-block; padding: 14px 32px; background: white; color: var(--primary-blue); border-radius: 6px; text-decoration: none; font-weight: 600; transition: transform 0.2s; display: flex; align-items: center; gap: 8px;">
        <i class="fas fa-envelope"></i> Contact Us
      </a>
      <a href="https://wa.me/+8801234567890?text=Hi%20I%20am%20interested%20in%20products" target="_blank" style="display: inline-block; padding: 14px 32px; background: #25D366; color: white; border-radius: 6px; text-decoration: none; font-weight: 600; border: 2px solid #25D366; transition: all 0.2s; display: flex; align-items: center; gap: 8px;">
        <i class="fab fa-whatsapp"></i> Chat on WhatsApp
      </a>
      <a href="javascript:history.back()" style="display: inline-block; padding: 14px 32px; background: rgba(255,255,255,0.2); color: white; border-radius: 6px; text-decoration: none; font-weight: 600; border: 2px solid white; transition: all 0.2s; display: flex; align-items: center; gap: 8px;">
        <i class="fas fa-arrow-left"></i> Back to Products
      </a>
    </div>
  </div>
</section>
@endsection