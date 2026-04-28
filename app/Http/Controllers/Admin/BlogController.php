<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->get();
        return view('admin.blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blogs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'nullable|image',
        ]);

        $data = $request->all();

        // slug unique
        $slug = Str::slug($request->title);
        $count = Blog::where('slug', 'like', $slug . '%')->count();
        $data['slug'] = $count ? $slug . '-' . ($count + 1) : $slug;

        // image upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/blogs'), $filename);
            $data['image'] = $filename;
        }

        Blog::create($data);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog created!');
    }

    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $data = $request->all();

        $slug = Str::slug($request->title);
        $count = Blog::where('slug', 'like', $slug . '%')
                    ->where('id', '!=', $blog->id)
                    ->count();

        $data['slug'] = $count ? $slug . '-' . ($count + 1) : $slug;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/blogs'), $filename);
            $data['image'] = $filename;
        }

        $blog->update($data);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog updated!');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();
        return back()->with('success', 'Blog deleted!');
    }
}