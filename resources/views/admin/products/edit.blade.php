@extends('admin.layout.layout')

@section('content')
<main class="p-6">

    <h1 class="text-2xl font-bold mb-6">Edit Product</h1>

    <form action="{{ route('admin.products.update', $product->id) }}"
          method="POST"
          enctype="multipart/form-data"
          class="space-y-4">

        @csrf
        @method('PUT')

        <input type="text" name="name"
               value="{{ $product->name }}"
               class="w-full border p-2 rounded">

        <select name="product_type" class="w-full border p-2 rounded">
            <option value="machine" {{ $product->product_type == 'machine' ? 'selected' : '' }}>
                Machine
            </option>
            <option value="raw_material" {{ $product->product_type == 'raw_material' ? 'selected' : '' }}>
                Raw Material
            </option>
        </select>

        <input type="file" name="image"
               class="w-full border p-2 rounded">

        @if($product->image)
            <img src="{{ asset('uploads/products/'.$product->image) }}"
                 class="w-16 h-16 rounded mb-2">
        @endif

        <textarea name="description"
                  class="w-full border p-2 rounded">{{ $product->description }}</textarea>

        <button class="px-5 py-2 bg-green-600 text-white rounded">
            Update Product
        </button>

    </form>

</main>
@endsection