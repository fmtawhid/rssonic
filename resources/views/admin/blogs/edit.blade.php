@extends('admin.layout.layout')

@section('content')
<main class="p-6">

<h1 class="text-2xl font-bold mb-4">Edit Blog</h1>

<form action="{{ route('admin.blogs.update', $blog->id) }}"
      method="POST"
      enctype="multipart/form-data"
      class="space-y-4">

@csrf
@method('PUT')

<input type="text" name="title"
       value="{{ $blog->title }}"
       class="w-full border p-2 rounded">

<input type="file" name="image"
       class="w-full border p-2 rounded">

@if($blog->image)
<img src="{{ asset('uploads/blogs/'.$blog->image) }}"
     class="w-16 h-16 rounded">
@endif

<textarea name="excerpt"
          class="w-full border p-2 rounded">{{ $blog->excerpt }}</textarea>

<textarea name="content"
          class="w-full border p-2 rounded h-40">{{ $blog->content }}</textarea>

<button class="px-5 py-2 bg-green-600 text-white rounded">
    Update
</button>

</form>

</main>
@endsection