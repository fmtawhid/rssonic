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
      @forelse ($blogs as $blog)
      <article class="blog-card">
        <div class="blog-image" style="background-image: url('https://picsum.photos/id/{{ rand(180, 190) }}/600/300');"></div>
        <div class="blog-content">
          <div class="blog-meta">
            <span class="blog-category">{{ $blog->category_id == 1 ? 'Manufacturing' : ($blog->category_id == 2 ? 'Standards' : 'Industry') }}</span>
          </div>
          <h3>{{ $blog->title }}</h3>
          <p>{{ $blog->excerpt }}</p>
          <a href="{{ route('blog-details', $blog->slug) }}" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
        </div>
      </article>
      @empty
      <p style="text-align: center; padding: 40px;">No blog articles available.</p>
      @endforelse
    </div>
  </div>
</section>
@endsection