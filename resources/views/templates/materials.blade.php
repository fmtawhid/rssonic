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
            <a href="{{ route('product-details', $product->slug) }}" class="btn-circle-small" style="margin-top: 12px;"><i class="fas fa-arrow-right"></i> View Details</a>
          </div>
        </div>
      @empty
        <div style="grid-column: 1/-1; text-align: center; padding: 40px;">
          <p style="color: var(--text-muted); font-size: 16px;">No raw material products available at the moment.</p>
        </div>
      @endforelse
    </div>
  </div>
</section>

@endsection