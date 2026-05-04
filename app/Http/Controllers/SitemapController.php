<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Product;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    /**
     * Generate XML sitemap for search engines
     */
    public function index()
    {
        $urls = [];

        // Static pages
        $staticPages = [
            ['url' => route('home'), 'lastmod' => now()->toAtomString(), 'priority' => '1.0'],
            ['url' => route('about'), 'lastmod' => now()->toAtomString(), 'priority' => '0.9'],
            ['url' => route('solutions'), 'lastmod' => now()->toAtomString(), 'priority' => '0.9'],
            ['url' => route('machinery'), 'lastmod' => now()->toAtomString(), 'priority' => '0.9'],
            ['url' => route('materials'), 'lastmod' => now()->toAtomString(), 'priority' => '0.9'],
            ['url' => route('blog'), 'lastmod' => now()->toAtomString(), 'priority' => '0.8'],
            ['url' => route('contact'), 'lastmod' => now()->toAtomString(), 'priority' => '0.7'],
        ];

        $urls = array_merge($urls, $staticPages);

        // Blog posts
        $blogs = Blog::where('is_published', 1)->get();
        foreach ($blogs as $blog) {
            $urls[] = [
                'url' => route('blog-details', $blog->slug),
                'lastmod' => $blog->updated_at->toAtomString(),
                'priority' => '0.7'
            ];
        }

        // Products
        $products = Product::where('is_active', true)->get();
        foreach ($products as $product) {
            $urls[] = [
                'url' => route('product-details', $product->slug),
                'lastmod' => $product->updated_at->toAtomString(),
                'priority' => '0.8'
            ];
        }

        $sitemap = view('sitemap', ['urls' => $urls]);

        return response($sitemap, 200)
            ->header('Content-Type', 'application/xml');
    }
}
