@extends('admin.layout.layout')

@section('content')
<div class="container mx-auto px-4 py-8 max-w-2xl">
    <!-- Header -->
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-800">Edit Category</h1>
        <a href="{{ route('admin.categories.index') }}" class="text-blue-600 hover:text-blue-800">← Back to Categories</a>
    </div>

    <!-- Form -->
    <div class="bg-white rounded-lg shadow p-6">
        <form action="{{ route('admin.categories.update', $category) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Name -->
            <div class="mb-6">
                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Category Name *</label>
                <input 
                    type="text" 
                    id="name" 
                    name="name"
                    value="{{ old('name', $category->name) }}"
                    class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500 @error('name') border-red-500 @enderror"
                    placeholder="Enter category name"
                    required
                >
                @error('name')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Slug (read-only) -->
            <div class="mb-6">
                <label for="slug" class="block text-sm font-medium text-gray-700 mb-2">Slug (Auto-generated)</label>
                <input 
                    type="text" 
                    id="slug" 
                    value="{{ $category->slug }}"
                    class="w-full px-4 py-2 border border-gray-300 rounded bg-gray-100 text-gray-600"
                    readonly
                >
            </div>

            <!-- Description -->
            <div class="mb-6">
                <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                <textarea 
                    id="description" 
                    name="description"
                    rows="4"
                    class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500 @error('description') border-red-500 @enderror"
                    placeholder="Enter category description"
                >{{ old('description', $category->description) }}</textarea>
                @error('description')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Status -->
            <div class="mb-6">
                <label for="is_active" class="flex items-center">
                    <input 
                        type="checkbox" 
                        id="is_active" 
                        name="is_active"
                        value="1"
                        {{ old('is_active', $category->is_active) ? 'checked' : '' }}
                        class="w-4 h-4 border-gray-300 rounded focus:outline-none focus:border-blue-500"
                    >
                    <span class="ml-2 text-sm font-medium text-gray-700">Active</span>
                </label>
            </div>

            <!-- Buttons -->
            <div class="flex gap-4">
                <button 
                    type="submit" 
                    class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded font-medium"
                >
                    Update Category
                </button>
                <a 
                    href="{{ route('admin.categories.index') }}" 
                    class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-6 py-2 rounded font-medium"
                >
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
