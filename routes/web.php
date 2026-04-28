<?php
use App\Http\Controllers\PageController;


use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/solutions', [PageController::class, 'solutions'])->name('solutions');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/blog/{id}', [PageController::class, 'blogDetails'])->name('blog-details');
Route::get('/machinery', [PageController::class, 'machinery'])->name('machinery');
Route::get('/materials', [PageController::class, 'materials'])->name('materials');
Route::get('/product/{id}', [PageController::class, 'productDetails'])->name('product-details');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');


require __DIR__.'/auth.php';
require __DIR__.'/merchant.php';
require __DIR__.'/admin.php';
