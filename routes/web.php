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
