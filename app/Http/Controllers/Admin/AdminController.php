<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Task;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $data = [
            'totalProducts' => Product::count(),
            'totalBlogs' => Blog::count(),
            'totalContacts' => Contact::count(),
        ];
        
        return view("admin.index", $data);
    }
}
