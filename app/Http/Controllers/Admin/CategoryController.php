<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    // ================= INDEX =================
    public function index()
    {
        $categories = Category::latest()->get();
        return view('admin.categories.index', compact('categories'));
    }

    // ================= CREATE =================
    public function create()
    {
        return view('admin.categories.create');
    }

    // ================= STORE =================
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories,name',
            'description' => 'nullable|string',
        ]);

        $data = $request->all();

        // slug generate (unique)
        $slug = Str::slug($request->name);
        $count = Category::where('slug', 'like', $slug . '%')->count();
        $data['slug'] = $count ? $slug . '-' . ($count + 1) : $slug;

        Category::create($data);

        return redirect()->route('admin.categories.index')
            ->with('success', 'Category created successfully!');
    }

    // ================= EDIT =================
    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    // ================= UPDATE =================
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|unique:categories,name,' . $category->id,
            'description' => 'nullable|string',
        ]);

        $data = $request->all();

        // slug update
        $slug = Str::slug($request->name);
        $count = Category::where('slug', 'like', $slug . '%')
                        ->where('id', '!=', $category->id)
                        ->count();
        $data['slug'] = $count ? $slug . '-' . ($count + 1) : $slug;

        $category->update($data);

        return redirect()->route('admin.categories.index')
            ->with('success', 'Category updated successfully!');
    }

    // ================= DELETE =================
    public function destroy(Category $category)
    {
        $category->delete();

        return back()->with('success', 'Category deleted successfully!');
    }
}
