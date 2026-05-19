@extends('admin.layout.layout')

@section('content')
<main class="flex-1 overflow-y-auto p-4 md:p-6">

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

        <select name="category_id" class="w-full border p-2 rounded">
            <option value="">Select Category</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" 
                    {{ $product->category_id == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>

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

        <div class="border p-4 rounded bg-gray-50">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-semibold">Product Attributes</h3>
                <button type="button" onclick="addAttributeField()" class="px-3 py-1 bg-blue-500 text-white rounded text-sm">
                    + Add Attribute
                </button>
            </div>
            
            <div id="attributesContainer">
                <!-- Existing and new attribute rows will be here -->
            </div>
        </div>

        <div class="border p-4 rounded bg-gray-50">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-semibold">Product Features</h3>
                <button type="button" onclick="addFeatureField()" class="px-3 py-1 bg-green-500 text-white rounded text-sm">
                    + Add Feature
                </button>
            </div>
            
            <div id="featuresContainer">
                <!-- Existing and new feature rows will be here -->
            </div>
        </div>

        <button class="px-5 py-2 bg-green-600 text-white rounded">
            Update Product
        </button>

    </form>

    <script>
        let attributeCount = 0;
        let featureCount = 0;
        const existingAttributes = @json($product->attributes->map(fn($a) => ['name' => $a->name, 'value' => $a->pivot->value])->values());
        const existingFeatures = @json($product->features->pluck('name')->values());

        function addAttributeField(name = '', value = '') {
            attributeCount++;
            const container = document.getElementById('attributesContainer');
            
            const row = document.createElement('div');
            row.className = 'mb-3 flex gap-2 attribute-row';
            row.id = 'attribute-' + attributeCount;
            row.innerHTML = `
                <input type="text" 
                       name="custom_attributes[${attributeCount}][name]"
                       placeholder="Attribute Name (e.g., Power, Grade)"
                       value="${name}"
                       class="flex-1 border p-2 rounded">
                <input type="text" 
                       name="custom_attributes[${attributeCount}][value]"
                       placeholder="Value (e.g., 15 kW)"
                       value="${value}"
                       class="flex-1 border p-2 rounded">
                <button type="button" onclick="removeAttributeField('attribute-${attributeCount}')" 
                        class="px-3 py-2 bg-red-500 text-white rounded text-sm">
                    Remove
                </button>
            `;
            
            container.appendChild(row);
        }

        function removeAttributeField(id) {
            document.getElementById(id).remove();
        }

        function addFeatureField(name = '') {
            featureCount++;
            const container = document.getElementById('featuresContainer');
            
            const row = document.createElement('div');
            row.className = 'mb-3 flex gap-2 feature-row';
            row.id = 'feature-' + featureCount;
            row.innerHTML = `
                <input type="text" 
                       name="custom_features[${featureCount}]"
                       placeholder="Feature Name (e.g., Warranty, Fast Delivery)"
                       value="${name}"
                       class="flex-1 border p-2 rounded">
                <button type="button" onclick="removeFeatureField('feature-${featureCount}')" 
                        class="px-3 py-2 bg-red-500 text-white rounded text-sm">
                    Remove
                </button>
            `;
            
            container.appendChild(row);
        }

        function removeFeatureField(id) {
            document.getElementById(id).remove();
        }

        // Load existing attributes and features on page load
        window.addEventListener('DOMContentLoaded', function() {
            existingAttributes.forEach(attr => {
                addAttributeField(attr.name, attr.value);
            });
            
            // Add one empty field if no existing attributes
            if (existingAttributes.length === 0) {
                addAttributeField();
            }

            existingFeatures.forEach(feat => {
                addFeatureField(feat);
            });
            
            // Add one empty field if no existing features
            if (existingFeatures.length === 0) {
                addFeatureField();
            }
        });
    </script>

</main>
@endsection
