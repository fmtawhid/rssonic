@extends('admin.layout.layout')

@section('content')
<main class="flex-1 overflow-y-auto p-4 md:p-6">

    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Products</h1>

        <a href="{{ route('admin.products.create') }}"
           class="px-4 py-2 bg-blue-600 text-white rounded">
            + Add Product
        </a>
    </div>

    @if(session('success'))
        <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white shadow rounded overflow-x-auto">

        <table class="w-full">
            <thead>
                <tr class="border-b bg-gray-50">
                    <th class="p-3 text-left">Image</th>
                    <th class="p-3 text-left">Name</th>
                    <th class="p-3 text-left">Type</th>
                    <th class="p-3 text-left">Slug</th>
                    <th class="p-3 text-right">Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach($products as $product)
                    <tr class="border-b">
                        <td class="p-3">
                            @if($product->image)
                                <img src="{{ asset('uploads/products/'.$product->image) }}"
                                     class="w-10 h-10 rounded object-cover">
                            @else
                                <span class="text-gray-400">No Image</span>
                            @endif
                        </td>

                        <td class="p-3 font-medium">
                            {{ $product->name }}
                        </td>

                        <td class="p-3">
                            <span class="px-2 py-1 text-xs rounded
                                {{ $product->product_type == 'machine' ? 'bg-blue-100 text-blue-700' : 'bg-yellow-100 text-yellow-700' }}">
                                {{ $product->product_type }}
                            </span>
                        </td>

                        <td class="p-3 text-gray-500 text-sm">
                            {{ $product->slug }}
                        </td>

                        <td class="p-3 text-right space-x-2">

                            <a href="{{ route('admin.products.edit', $product->id) }}"
                               class="px-3 py-1 bg-green-500 text-white rounded text-sm">
                                Edit
                            </a>

                            <form action="{{ route('admin.products.destroy', $product->id) }}"
                                  method="POST"
                                  class="inline">
                                @csrf
                                @method('DELETE')

                                <button onclick="return confirm('Delete this product?')"
                                        class="px-3 py-1 bg-red-500 text-white rounded text-sm">
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