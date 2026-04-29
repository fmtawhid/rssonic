@extends('admin.layout.layout')

@section('content')
<main class="flex-1 overflow-y-auto p-4 md:p-6">

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

   
        <div class="border p-4 rounded bg-gray-50">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-semibold">Product Attributes</h3>
                <button type="button" onclick="addAttributeField()" class="px-3 py-1 bg-blue-500 text-white rounded text-sm">
                    + Add Attribute
                </button>
            </div>
            
            <div id="attributesContainer">
                <!-- Attribute rows will be added here -->
            </div>
        </div>

        <button class="px-5 py-2 bg-blue-600 text-white rounded">
            Save Product
        </button>

    </form>

    <script>
        let attributeCount = 0;

        function addAttributeField() {
            attributeCount++;
            const container = document.getElementById('attributesContainer');
            
            const row = document.createElement('div');
            row.className = 'mb-3 flex gap-2 attribute-row';
            row.id = 'attribute-' + attributeCount;
            row.innerHTML = `
                <input type="text" 
                       name="custom_attributes[${attributeCount}][name]"
                       placeholder="Attribute Name (e.g., Power, Grade)"
                       class="flex-1 border p-2 rounded">
                <input type="text" 
                       name="custom_attributes[${attributeCount}][value]"
                       placeholder="Value (e.g., 15 kW)"
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

        // Add one empty field on page load
        window.addEventListener('DOMContentLoaded', function() {
            addAttributeField();
        });
    </script>

</main>
@endsection
