@extends('admin.layout.layout')

@section('content')
<main class="p-6">

<h1 class="text-2xl font-bold mb-4">Blogs</h1>

<a href="{{ route('admin.blogs.create') }}"
   class="px-4 py-2 bg-blue-600 text-white rounded">
   + Add Blog
</a>

@if(session('success'))
    <div class="mt-3 p-3 bg-green-100 text-green-700">
        {{ session('success') }}
    </div>
@endif

<div class="mt-5 bg-white shadow rounded">
<table class="w-full">
    <thead>
        <tr class="border-b">
            <th class="p-3">Image</th>
            <th class="p-3">Title</th>
            <th class="p-3">Slug</th>
            <th class="p-3 text-right">Actions</th>
        </tr>
    </thead>

    <tbody>
        @foreach($blogs as $blog)
        <tr class="border-b">
            <td class="p-3">
                @if($blog->image)
                    <img src="{{ asset('uploads/blogs/'.$blog->image) }}"
                         class="w-10 h-10 rounded">
                @endif
            </td>

            <td class="p-3">{{ $blog->title }}</td>
            <td class="p-3 text-gray-500">{{ $blog->slug }}</td>

            <td class="p-3 text-right space-x-2">
                <a href="{{ route('admin.blogs.edit', $blog->id) }}"
                   class="px-3 py-1 bg-green-500 text-white rounded">Edit</a>

                <form action="{{ route('admin.blogs.destroy', $blog->id) }}"
                      method="POST" class="inline">
                    @csrf
                    @method('DELETE')

                    <button class="px-3 py-1 bg-red-500 text-white rounded">
                        Delete
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
</div>

</main>
@endsection