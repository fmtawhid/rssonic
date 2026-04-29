<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Product;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $blogs = Blog::where('is_published', 1)->latest('published_at')->limit(4)->get();
        $products = Product::where('is_active', true)->latest()->limit(8)->get();
        return view('templates.index', compact('blogs', 'products'));
    }
    public function about()
    {
        return view('templates.about');
    }
    public function contact()
    {
        return view('templates.contact');
    }
    public function solutions()
    {
        return view('templates.solutions');
    }
    public function blog()
    {
        $blogs = Blog::all();
        return view('templates.blog', compact('blogs'));
    }
    public function blogDetails($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        return view('templates.blog-post', compact('blog'));
    }
    public function machinery()
    {
        $products = Product::where('product_type', 'machine')
                          ->where('is_active', true)
                          ->latest()
                          ->get();
        return view('templates.machinery', compact('products'));
    }
    public function materials()
    {
        $products = Product::where('product_type', 'raw_material')
                          ->where('is_active', true)
                          ->latest()
                          ->get();
        return view('templates.materials', compact('products'));
    }
    public function productDetails($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('templates.product-details', compact('product'));
    }

}
