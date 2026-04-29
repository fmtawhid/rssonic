@extends('layouts.master')
@section('content')

<div class="page-hero">
  <div class="container">
    <div class="breadcrumb"><a href="index.html">Home</a> / <a href="products.html">Products</a> / Raw Materials</div>
    <h1>Raw <span>Materials & Compounds</span></h1>
    <div class="hero-line"></div>
    <p style="color: rgba(255,255,255,0.7); margin-top: 20px;">Premium quality bulk materials and industrial compounds for manufacturing.</p>
  </div>
</div>

<section id="silicone-raw">
  <div class="container">
    <div class="section-label">Category 01</div>
    <h2 class="section-title">Available <span>Raw Materials</span></h2>
    <div class="products-grid">
      @forelse($products as $product)
        <div class="product-card">
          @if($product->image)
            <img class="product-img" src="{{ asset('uploads/products/' . $product->image) }}" alt="{{ $product->name }}">
          @else
            <img class="product-img" src="https://picsum.photos/id/{{ rand(0, 100) }}/500/200" alt="{{ $product->name }}">
          @endif
          
          <div class="product-info">
            <h3>{{ $product->name }}</h3>
            <p>{{ \Illuminate\Support\Str::limit($product->description, 120) }}</p>
            
            <!-- @if($product->attributes->count() > 0)
              <div style="margin-top: 12px; padding-top: 12px; border-top: 1px solid #e0e0e0;">
                <p style="font-weight: 600; font-size: 12px; color: #666; margin-bottom: 8px;">Specifications:</p>
                @foreach($product->attributes as $attribute)
                  <div style="font-size: 11px; color: #555; margin-bottom: 4px; display: flex; justify-content: space-between;">
                    <span><strong>{{ $attribute->name }}:</strong></span>
                    <span>{{ $attribute->pivot->value }}</span>
                  </div>
                @endforeach
              </div>
            @endif -->
            
            <a href="{{ route('product-details', $product->slug) }}" class="btn-circle-small" style="margin-top: 12px;"><i class="fas fa-arrow-right"></i> View Details</a>
          </div>
        </div>
      @empty
        <div style="grid-column: 1/-1; text-align: center; padding: 40px;">
          <p style="color: #666; font-size: 16px;">No raw material products available at the moment.</p>
        </div>
      @endforelse
    </div>
  </div>
</section>

@endsection