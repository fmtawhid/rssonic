@extends('admin.layout.layout')

@section('content')
<main class="p-6">

    <h1 class="text-2xl font-bold mb-6">Create Product</h1>

    <form action="{{ route('admin.products.store') }}"
          method="POST"
          enctype="multipart/form-data"
          class="space-y-4">

        @csrf

        <input type="text" name="name"
               placeholder="Product Name"
               class="w-full border p-2 rounded">

        <select name="product_type" class="w-full border p-2 rounded">
            <option value="machine">Machine</option>
            <option value="raw_material">Raw Material</option>
        </select>

        <input type="file" name="image"
               class="w-full border p-2 rounded">

        <textarea name="description"
                  placeholder="Description"
                  class="w-full border p-2 rounded"></textarea>

        <button class="px-5 py-2 bg-blue-600 text-white rounded">
            Save Product
        </button>

    </form>

</main>
@endsection