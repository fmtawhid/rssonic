@extends('admin.layout.layout')

@section('content')
<main class="flex-1 overflow-y-auto p-4 md:p-6">

<h1 class="text-2xl font-bold mb-4">Create Blog</h1>

<form action="{{ route('admin.blogs.store') }}"
      method="POST"
      enctype="multipart/form-data"
      class="space-y-4">

@csrf

<input type="text" name="title"
       placeholder="Title"
       class="w-full border p-2 rounded">

<input type="file" name="image"
       class="w-full border p-2 rounded">

<textarea name="excerpt" placeholder="Excerpt"
          class="w-full border p-2 rounded"></textarea>

<textarea name="content" placeholder="Content"
          class="w-full border p-2 rounded h-40"></textarea>

<button class="px-5 py-2 bg-blue-600 text-white rounded">
    Save Blog
</button>

</form>

</main>
@endsection