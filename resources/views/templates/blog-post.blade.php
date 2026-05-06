@extends('layouts.master')
@section('content')
<div class="page-hero" style="position: relative; overflow: hidden;">
  <div class="container">
    <div class="breadcrumb"><a href="{{ route('home') }}">Home</a> / <a href="{{ route('blog') }}">Blog</a> / <span>{{ $blog->title }}</span></div>
    <h1>{{ $blog->title }}</h1>
    <div class="hero-line"></div>
  </div>
</div>

<section>
  <div class="container">
    <article class="blog-single">
      <div class="blog-header">
        <div class="blog-meta" style="display: flex; gap: 20px; align-items: center;">
          <span class="blog-category">{{ $blog->category_id == 1 ? 'Manufacturing' : ($blog->category_id == 2 ? 'Standards' : 'Industry') }}</span>
          <span style="color: var(--text-muted);">{{ $blog->views_count }} views</span>
        </div>
        @if($blog->image)
        <img src="{{ asset('uploads/blogs/' . $blog->image) }}" class="blog-featured-image" alt="{{ $blog->title }}">
        @else
        <img src="https://picsum.photos/id/{{ rand(180, 190) }}/800/400" class="blog-featured-image" alt="{{ $blog->title }}">
        @endif
      </div>

      <div class="blog-body">
        {!! nl2br(e($blog->content)) !!}
      </div>

      <!-- Related Posts -->
      <div class="related-posts">
        <h3>Related Articles</h3>
        <div class="related-grid">
          @php
            $relatedBlogs = \App\Models\Blog::where('category_id', $blog->category_id)
                                            ->where('id', '!=', $blog->id)
                                            ->where('is_published', 1)
                                            ->limit(3)
                                            ->get();
          @endphp
          @forelse($relatedBlogs as $relatedBlog)
          <article class="blog-card">
            <div class="blog-image" style="background-image: url('https://picsum.photos/id/{{ rand(180, 190) }}/600/300');"></div>
            <div class="blog-content">
              <div class="blog-meta">
                <span class="blog-category">{{ $relatedBlog->category_id == 1 ? 'Manufacturing' : ($relatedBlog->category_id == 2 ? 'Standards' : 'Industry') }}</span>
              </div>
              <h4 style="color: var(--primary-blue);">{{ $relatedBlog->title }}</h4>
              <a href="{{ route('blog-details', $relatedBlog->slug) }}" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
            </div>
          </article>
          @empty
          <p style="color: var(--text-muted);">No related articles found.</p>
          @endforelse
        </div>
      </div>

      <!-- CTA Section -->
      <div style="background: var(--blue-light); border-radius: 28px; padding: 40px; text-align: center; margin-top: 60px;">
        <h3 style="color: var(--primary-blue); margin-bottom: 12px;">Need Technical Support?</h3>
        <p style="color: var(--text-muted); margin-bottom: 20px;">Our experts are ready to help you implement these best practices in your production facility.</p>
        <a href="{{ route('contact') }}" class="btn-circle btn-primary">Contact Our Team <i class="fas fa-arrow-right"></i></a>
      </div>
    </article>
  </div>
</section>
@endsection