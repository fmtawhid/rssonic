@extends('layouts.master')
@section('content')
<div class="page-hero">
  <div class="container">
    <div class="breadcrumb"><a href="index.html">Home</a> / Blog</div>
    <h1>Industry Insights & <span>Expert Articles</span></h1>
    <div class="hero-line"></div>
    <p>Stay updated with the latest trends, innovations, and best practices in printing materials and industrial manufacturing.</p>
  </div>
</div>

<section>
  <div class="container">
    <div class="blog-grid">
    @foreach ($blogs as $blog)
    
    
      <!-- Blog Card 1 -->
      <article class="blog-card">
        <div class="blog-image" style="background-image: url('https://picsum.photos/id/180/600/300');"></div>
        <div class="blog-content">
          <div class="blog-meta"><span class="blog-date">Apr 15, 2025</span><span class="blog-category">Silicone</span></div>
          <h3>{{ $blog->title }}</h3>
          <p>Explore the latest innovations in silicone printing that enhance wash fastness and durability. Learn how modern dispensing systems improve consistency and reduce waste in textile production.</p>
          <a href="blog-post.html?id=1" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
        </div>
      </article>
    @endforeach

      <!-- Blog Card 2 -->
      <article class="blog-card">
        <div class="blog-image" style="background-image: url('https://picsum.photos/id/181/600/300');"></div>
        <div class="blog-content">
          <div class="blog-meta"><span class="blog-date">Apr 10, 2025</span><span class="blog-category">Materials</span></div>
          <h3>TPU vs PVC: Choosing the Right Material for Your Branding Needs</h3>
          <p>A comprehensive guide comparing TPU and PVC materials for logos and emblems. Understand durability, flexibility, cost, and environmental factors to make informed decisions for your projects.</p>
          <a href="blog-post.html?id=2" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
        </div>
      </article>

      <!-- Blog Card 3 -->
      <article class="blog-card">
        <div class="blog-image" style="background-image: url('https://picsum.photos/id/182/600/300');"></div>
        <div class="blog-content">
          <div class="blog-meta"><span class="blog-date">Apr 5, 2025</span><span class="blog-category">Production</span></div>
          <h3>Optimizing Production Lines: Best Practices for Emblem Manufacturing</h3>
          <p>Discover best practices for setting up efficient emblem production lines. From equipment selection to quality control, learn how to maximize output while maintaining premium standards.</p>
          <a href="blog-post.html?id=3" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
        </div>
      </article>

      <!-- Blog Card 4 -->
      <article class="blog-card">
        <div class="blog-image" style="background-image: url('https://picsum.photos/id/183/600/300');"></div>
        <div class="blog-content">
          <div class="blog-meta"><span class="blog-date">Mar 28, 2025</span><span class="blog-category">Sustainability</span></div>
          <h3>Eco-Friendly Printing Solutions: Reducing VOC and Environmental Impact</h3>
          <p>Learn about sustainable alternatives in printing materials and processes. Discover how low-VOC chemicals and eco-friendly TPU options can reduce your environmental footprint without compromising quality.</p>
          <a href="blog-post.html?id=4" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
        </div>
      </article>

      <!-- Blog Card 5 -->
      <article class="blog-card">
        <div class="blog-image" style="background-image: url('https://picsum.photos/id/184/600/300');"></div>
        <div class="blog-content">
          <div class="blog-meta"><span class="blog-date">Mar 20, 2025</span><span class="blog-category">Quality</span></div>
          <h3>Quality Control Standards: Ensuring Batch Consistency in Silicone Production</h3>
          <p>Master the essential quality control procedures for silicone manufacturing. Understand testing methods, specification requirements, and how to maintain ISO standards across all production batches.</p>
          <a href="blog-post.html?id=5" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
        </div>
      </article>

      <!-- Blog Card 6 -->
      <article class="blog-card">
        <div class="blog-image" style="background-image: url('https://picsum.photos/id/185/600/300');"></div>
        <div class="blog-content">
          <div class="blog-meta"><span class="blog-date">Mar 12, 2025</span><span class="blog-category">Case Study</span></div>
          <h3>Case Study: How a Garment Manufacturer Increased Productivity by 40% with RS Emblem Solutions</h3>
          <p>Read how one of Bangladesh's leading garment manufacturers optimized their printing workflow using our advanced silicone systems. Discover their challenges, solutions, and remarkable results.</p>
          <a href="blog-post.html?id=6" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
        </div>
      </article>
    </div>
  </div>
</section>
@endsection