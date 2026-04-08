<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

// Frontend Routes
Route::name('frontend.')->group(function () {
    Route::get('/', function () {
        return view('frontend.home');
    })->name('home');

    Route::get('/about', function () {
        return view('frontend.about');
    })->name('about');

    Route::get('/services', function () {
        return view('frontend.services');
    })->name('services');

    Route::get('/products', function () {
        return view('frontend.products');
    })->name('products');

    Route::get('/contact', function () {
        return view('frontend.contact');
    })->name('contact');

    Route::get('/consulting', function () {
        return view('frontend.consulting');
    })->name('consulting');

    Route::get('/search', function () {
        $query = request('q');
        $results = collect();
        
        if ($query) {
            // Search in services
            $services = \App\Models\Service::where('title', 'like', "%{$query}%")
                ->orWhere('description', 'like', "%{$query}%")
                ->get()
                ->map(function ($item) {
                    $item->type = 'Service';
                    $item->url = route('frontend.services');
                    return $item;
                });
            
            // Search in products
            $products = \App\Models\Product::where('title', 'like', "%{$query}%")
                ->orWhere('description', 'like', "%{$query}%")
                ->get()
                ->map(function ($item) {
                    $item->type = 'Product';
                    $item->url = route('frontend.products');
                    return $item;
                });
            
            // Search in blogs
            $blogs = \App\Models\Blog::where('title', 'like', "%{$query}%")
                ->orWhere('content', 'like', "%{$query}%")
                ->get()
                ->map(function ($item) {
                    $item->type = 'Blog';
                    $item->url = route('frontend.home');
                    return $item;
                });
            
            // Static page content search
            $staticPages = collect([
                (object) ['title' => 'About Us', 'description' => 'Goldiva Minerals is a mineral services company based in Uganda, providing solutions in gold handling, processing, documentation, and consultancy.', 'type' => 'Page', 'url' => route('frontend.about')],
                (object) ['title' => 'Our Services', 'description' => 'Buying & Selling, Smelting, Documentation, Mineral Consultancy - Comprehensive mineral services tailored to meet your needs.', 'type' => 'Page', 'url' => route('frontend.services')],
                (object) ['title' => 'Our Products', 'description' => 'Gold Doré, Processed Gold, Gold Dust, Gold Nuggets, Gold-bearing Materials - Premium mineral products sourced through trusted channels.', 'type' => 'Page', 'url' => route('frontend.products')],
                (object) ['title' => 'Contact Us', 'description' => 'Get in touch with Goldiva Minerals. Located in Kololo, Kampala, Uganda. Email: support@goldivaminerals.com', 'type' => 'Page', 'url' => route('frontend.contact')],
                (object) ['title' => 'Consulting Services', 'description' => 'Expert mineral consultancy services for mining operations, investment decisions, and industry best practices.', 'type' => 'Page', 'url' => route('frontend.consulting')],
            ])->filter(function ($page) use ($query) {
                return stripos($page->title, $query) !== false || stripos($page->description, $query) !== false;
            });
            
            $results = $services->concat($products)->concat($blogs)->concat($staticPages);
        }
        
        return view('frontend.search', compact('query', 'results'));
    })->name('search');
});

// Auth Routes
Auth::routes();

// Admin Routes
Route::prefix('admin')->name('admin.')->middleware(['auth', 'role:admin|site manager'])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

    Route::resource('blogs', BlogController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('galleries', GalleryController::class);
    Route::resource('contacts', ContactController::class);
    Route::resource('products', ProductController::class);

    Route::middleware(['role:admin'])->group(function () {
        Route::resource('users', UserController::class);
        Route::resource('roles', RoleController::class);
    });
});
