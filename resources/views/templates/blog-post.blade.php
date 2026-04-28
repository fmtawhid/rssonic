@extends('layouts.master')
@section('content')
<div class="page-hero">
  <div class="container">
    <div class="breadcrumb"><a href="index.html">Home</a> / <a href="blog.html">Blog</a> / <span id="breadcrumb-title">Article</span></div>
    <h1 id="post-title">Loading...</h1>
    <div class="hero-line"></div>
  </div>
</div>

<section>
  <div class="container">
    <article class="blog-single">
      <div class="blog-header">
        <div class="blog-meta" id="post-meta">
          <span class="blog-date" id="post-date">Apr 15, 2025</span>
          <span class="blog-category" id="post-category">Article</span>
        </div>
        <img id="post-image" class="blog-featured-image" alt="Blog post featured image">
      </div>

      <div class="blog-body" id="post-content">
        <!-- Content will be loaded by JavaScript -->
      </div>

      <!-- Related Posts -->
      <div class="related-posts">
        <h3>Related Articles</h3>
        <div class="related-grid" id="related-posts">
          <!-- Related posts will be loaded by JavaScript -->
        </div>
      </div>

      <!-- CTA Section -->
      <div style="background: var(--blue-light); border-radius: 28px; padding: 40px; text-align: center; margin-top: 60px;">
        <h3 style="color: var(--primary-blue); margin-bottom: 12px;">Need Technical Support?</h3>
        <p style="color: var(--text-muted); margin-bottom: 20px;">Our experts are ready to help you implement these best practices in your production facility.</p>
        <a href="contact.html" class="btn-circle btn-primary">Contact Our Team <i class="fas fa-arrow-right"></i></a>
      </div>
    </article>
  </div>
</section>
@endsection