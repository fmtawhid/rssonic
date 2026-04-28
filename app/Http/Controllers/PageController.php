<?php

namespace App\Http\Controllers;
use App\Models\Blog;


use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('templates.index');
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
    public function blogDetails()
    {
        return view('templates.blog-post');
    }
    public function machinery()
    {
        return view('templates.machinery');
    }
    public function materials()
    {
        return view('templates.materials');
    }
    public function productDetails()
    {
        return view('templates.product-details');
    }

}
