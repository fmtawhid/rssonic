@extends('admin.layout.layout')

@section('content')
<main class="flex-1 overflow-y-auto p-4 md:p-6">

    <div class="mb-6">
        <a href="{{ route('admin.products.index') }}" class="text-blue-600 hover:underline">← Back to Products</a>
    </div>

    <div class="bg-white rounded-lg shadow p-6">
        <!-- Product Header -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8 pb-8 border-b">
            <!-- Product Image -->
            @if($product->image)
                <div class="flex justify-center">
                    <img src="{{ asset('uploads/products/'.$product->image) }}"
                         alt="{{ $product->name }}"
                         class="max-w-sm rounded-lg shadow">
                </div>
            @else
                <div class="flex items-center justify-center bg-gray-200 rounded-lg h-64">
                    <span class="text-gray-500">No Image</span>
                </div>
            @endif

            <!-- Product Info -->
            <div class="md:col-span-2">
                <h1 class="text-3xl font-bold mb-2">{{ $product->name }}</h1>
                
                <div class="space-y-3 mb-6">
                    <p><strong>Category:</strong> <span class="text-gray-700">{{ $product->category->name ?? 'N/A' }}</span></p>
                    <p><strong>Type:</strong> <span class="badge px-2 py-1 bg-blue-100 text-blue-800 rounded">{{ ucfirst(str_replace('_', ' ', $product->product_type)) }}</span></p>
                    <p><strong>Slug:</strong> <span class="text-gray-600">{{ $product->slug }}</span></p>
                </div>

                @if($product->description)
                    <div class="bg-gray-50 p-4 rounded mb-6">
                        <h3 class="font-semibold mb-2">Description</h3>
                        <p class="text-gray-700">{{ $product->description }}</p>
                    </div>
                @endif
            </div>
        </div>

        <!-- Attributes Section -->
        @if($product->attributes->count() > 0)
            <div class="mb-8 pb-8 border-b">
                <h2 class="text-2xl font-bold mb-4">📋 Attributes</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    @foreach($product->attributes as $attribute)
                        <div class="bg-gradient-to-r from-blue-50 to-blue-100 rounded-lg p-4 border-l-4 border-blue-500">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h4 class="font-semibold text-blue-900">{{ $attribute->name }}</h4>
                                    <p class="text-blue-700 text-lg">{{ $attribute->pivot->value }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        <!-- Features Section -->
        @if($product->features->count() > 0)
            <div class="mb-8 pb-8 border-b">
                <h2 class="text-2xl font-bold mb-4">⭐ Features</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    @foreach($product->features as $feature)
                        <div class="bg-gradient-to-br from-green-50 to-emerald-100 rounded-lg p-4 border-l-4 border-green-500 hover:shadow-lg transition-shadow">
                            <div class="flex items-center gap-3">
                                <div class="bg-green-500 text-white rounded-full w-10 h-10 flex items-center justify-center font-bold">
                                    ✓
                                </div>
                                <div class="flex-1">
                                    <h4 class="font-semibold text-green-900">{{ $feature->name }}</h4>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        <!-- Action Buttons -->
        <div class="flex gap-3">
            <a href="{{ route('admin.products.edit', $product->id) }}"
               class="px-5 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                Edit
            </a>
            <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Are you sure?')"
                        class="px-5 py-2 bg-red-600 text-white rounded hover:bg-red-700">
                    Delete
                </button>
            </form>
        </div>
    </div>

</main>
@endsection
