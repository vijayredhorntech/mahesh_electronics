<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/seo', [PageController::class, 'seo'])->name('seo');
Route::get('/about-us', [PageController::class, 'about'])->name('aboutUs');
Route::get('/contact-us', [PageController::class, 'contact'])->name('contactUs');
Route::get('/download{type}', [PageController::class, 'download'])->name('download');
Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery');

Route::get('/blog', [BlogController::class, 'blog'])->name('blog');
Route::get('/blog-detail/{id}', [BlogController::class, 'blogDetail'])->name('blogDetail');

Route::get('/products/{type}', [ProductController::class, 'product'])->name('products');
Route::get('/product-detail/{type}/{id}', [ProductController::class, 'productDetail'])->name('productDetail');

Route::post('/contact-us', [ContactusController::class, 'contactPost'])->name('contactUsPost');
