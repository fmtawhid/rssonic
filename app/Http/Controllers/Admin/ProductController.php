<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    // ================= INDEX =================
    public function index()
    {
        $products = Product::latest()->get();
        return view('admin.products.index', compact('products'));
    }

    // ================= CREATE =================
    public function create()
    {
        return view('admin.products.create');
    }

    // ================= STORE =================
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'product_type' => 'required|in:machine,raw_material',
            'image' => 'nullable|image|max:2048',
        ]);

        $data = $request->all();

        // slug generate (unique)
        $slug = Str::slug($request->name);
        $count = Product::where('slug', 'like', $slug . '%')->count();
        $data['slug'] = $count ? $slug . '-' . ($count + 1) : $slug;

        // image upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/products'), $filename);
            $data['image'] = $filename;
        }

        Product::create($data);

        return redirect()->route('admin.products.index')
            ->with('success', 'Product created successfully!');
    }

    // ================= EDIT =================
    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    // ================= UPDATE =================
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'product_type' => 'required|in:machine,raw_material',
            'image' => 'nullable|image|max:2048',
        ]);

        $data = $request->all();

        // slug update
        $slug = Str::slug($request->name);
        $count = Product::where('slug', 'like', $slug . '%')
                        ->where('id', '!=', $product->id)
                        ->count();
        $data['slug'] = $count ? $slug . '-' . ($count + 1) : $slug;

        // image update
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/products'), $filename);
            $data['image'] = $filename;
        }

        $product->update($data);

        return redirect()->route('admin.products.index')
            ->with('success', 'Product updated successfully!');
    }

    // ================= DELETE =================
    public function destroy(Product $product)
    {
        if ($product->image && file_exists(public_path('uploads/products/' . $product->image))) {
            unlink(public_path('uploads/products/' . $product->image));
        }

        $product->delete();

        return back()->with('success', 'Product deleted successfully!');
    }
}