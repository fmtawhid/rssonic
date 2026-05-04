<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Product;
use App\Models\Contact;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $blogs = Blog::where('is_published', 1)->latest('published_at')->limit(4)->get();
        $products = Product::where('is_active', true)->latest()->limit(8)->get();
        
        // SEO Data
        $seoTitle = 'RS Emblem | Industrial Materials & Machinery Solutions – Bangladesh';
        $seoDescription = 'Discover RS Emblem: advanced printing materials, high-performance polymers, TPU heat transfer systems, and industrial machinery. Quality solutions from Bangladesh to the world.';
        $seoKeywords = 'printing materials, polymers, machinery solutions, TPU heat transfer, industrial supplier, Bangladesh';
        
        return view('templates.index', compact('blogs', 'products', 'seoTitle', 'seoDescription', 'seoKeywords'));
    }
    
    public function about()
    {
        $seoTitle = 'About RS Emblem | Your Trusted Industrial Partner';
        $seoDescription = 'Learn about RS Emblem: Bangladesh-based industrial supplier of advanced printing materials, polymers, and machinery solutions. Expert sourcing with 5+ years of excellence.';
        $seoKeywords = 'about RS Emblem, industrial partner, Bangladesh manufacturer, quality materials';
        
        return view('templates.about', compact('seoTitle', 'seoDescription', 'seoKeywords'));
    }
    
    public function contact()
    {
        $seoTitle = 'Contact RS Emblem | Get Your Quote Today';
        $seoDescription = 'Contact RS Emblem for inquiries, quotes, and technical support. Based in Ashulia, Dhaka, Bangladesh. Call +8801931669605 or email rsemblem2022@gmail.com.';
        $seoKeywords = 'contact RS Emblem, inquiry form, industrial quotes, technical support';
        
        return view('templates.contact', compact('seoTitle', 'seoDescription', 'seoKeywords'));
    }
    
    public function solutions()
    {
        $seoTitle = 'Industrial Solutions | RS Emblem';
        $seoDescription = 'Explore comprehensive industrial solutions from RS Emblem: tailored services for garment, footwear, and accessory manufacturers across Bangladesh.';
        $seoKeywords = 'industrial solutions, manufacturing, garment industry, footwear, accessories';
        
        return view('templates.solutions', compact('seoTitle', 'seoDescription', 'seoKeywords'));
    }
    
    public function blog()
    {
        $blogs = Blog::all();
        
        $seoTitle = 'Blog | RS Emblem - Industry Insights & Tips';
        $seoDescription = 'Read the latest articles and industry insights from RS Emblem about printing materials, machinery, and industrial solutions.';
        $seoKeywords = 'blog, industry news, industrial insights, materials guide, machinery tips';
        
        return view('templates.blog', compact('blogs', 'seoTitle', 'seoDescription', 'seoKeywords'));
    }
    
    public function blogDetails($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        
        $seoTitle = $blog->title . ' | RS Emblem Blog';
        $seoDescription = $blog->meta_description ?? substr($blog->content, 0, 160);
        $seoKeywords = $blog->meta_keywords ?? 'industrial, materials, machinery';
        
        return view('templates.blog-post', compact('blog', 'seoTitle', 'seoDescription', 'seoKeywords'));
    }
    
    public function machinery()
    {
        $products = Product::where('product_type', 'machine')
                          ->where('is_active', true)
                          ->latest()
                          ->get();
        
        $seoTitle = 'Industrial Machinery | RS Emblem';
        $seoDescription = 'Browse our range of high-quality industrial machinery solutions. Expert equipment from trusted manufacturers for your production needs.';
        $seoKeywords = 'machinery, industrial equipment, production tools, manufacturing machinery';
        
        return view('templates.machinery', compact('products', 'seoTitle', 'seoDescription', 'seoKeywords'));
    }
    
    public function materials()
    {
        $products = Product::where('product_type', 'raw_material')
                          ->where('is_active', true)
                          ->latest()
                          ->get();
        
        $seoTitle = 'Raw Materials | Advanced Solutions - RS Emblem';
        $seoDescription = 'Premium raw materials including printing supplies, polymers, and specialty chemicals. Quality guaranteed with technical support.';
        $seoKeywords = 'raw materials, printing supplies, polymers, specialty chemicals, industrial materials';
        
        return view('templates.materials', compact('products', 'seoTitle', 'seoDescription', 'seoKeywords'));
    }
    
    public function productDetails($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        
        $seoTitle = $product->name . ' | RS Emblem';
        $seoDescription = $product->meta_description ?? substr($product->description, 0, 160);
        $seoKeywords = $product->meta_keywords ?? 'product, industrial, material';
        $ogImage = $product->image ?? asset('assets/og-image.jpg');
        
        return view('templates.product-details', compact('product', 'seoTitle', 'seoDescription', 'seoKeywords', 'ogImage'));
    }

    public function storeContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string|max:5000',
        ]);

        Contact::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Thank you! We will contact you soon.'
        ]);
    }
}
