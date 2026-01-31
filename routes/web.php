<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HelpcenterController;
use App\Http\Controllers\HostingController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AuthController;

// Auth Routes
Route::controller(AuthController::class)->group(function () {
    Route::get('login', 'showLogin')->name('login');
    Route::post('login', 'login')->name('login.post');
    Route::get('sign-in', 'showLogin')->name('signin');
    Route::get('sign-up', 'showRegister')->name('signup');
    Route::get('register', 'showRegister')->name('register');
    Route::post('register', 'register')->name('register.post');
    Route::post('logout', 'logout')->name('logout');
    Route::middleware('auth')->group(function () {
        Route::get('dashboard', 'dashboard')->name('dashboard');
        Route::get('services', 'services')->name('services');
        Route::get('profile', 'profile')->name('profile');
        Route::post('profile', 'updateProfile')->name('updateProfile');
    });
});

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'indexTwo')->name('index'); // Changed to indexTwo
    Route::get('/home-one', 'index')->name('indexOne'); // Renamed original index
    // Login moved to AuthController
    Route::get('tos', 'tos')->name('tos');
    Route::get('privacy', 'privacy')->name('privacy');
    Route::get('refund', 'refund')->name('refund');
});

//  Home
Route::prefix('home')->group(function () {
    Route::controller(HomeController::class)->group(function () {
        Route::get('/index-five', 'indexFive')->name('indexFive');
        Route::get('/index-four', 'indexFour')->name('indexFour');
        Route::get('/index-six', 'indexSix')->name('indexSix');
        Route::get('/index-three', 'indexThree')->name('indexThree');
        Route::get('/index-two', 'indexTwo')->name('indexTwo');
        Route::get('/tos', 'tos')->name('tos');
        Route::get('/index-two', 'indexTwo')->name('indexTwo');
    });
});

//  Helpcenter
Route::prefix('helpcenter')->group(function () {
    Route::controller(HelpcenterController::class)->group(function () {
        Route::get('/faq', 'faq')->name('faq');
    });
});

//  Hosting
Route::prefix('hosting')->group(function () {
    Route::controller(HostingController::class)->group(function () {
        route::get('cloudHosting', 'cloudHosting')->name('cloudHosting');
        route::get('dedicatedHosting', 'dedicatedHosting')->name('dedicatedHosting');
        route::get('resellerHosting', 'resellerHosting')->name('resellerHosting');
        route::get('sharedHosting', 'sharedHosting')->name('sharedHosting');
        route::get('vpsHosting', 'vpsHosting')->name('vpsHosting');
        route::get('wordpressHosting', 'wordpressHosting')->name('wordpressHosting');
    });
});

//  Pages
Route::prefix('pages')->group(function () {
    Route::controller(PagesController::class)->group(function () {
        Route::get('page-error', 'pageError')->name('pageError');
        Route::get('about', 'about')->name('about');
        // Route::get('blog', 'blog')->name('blog');
        // Route::get('blogDetails', 'blogDetails')->name('blogDetails');
        // Route::get('blogList', 'blogList')->name('blogList');
        Route::get('contact', 'contact')->name('contact');
        Route::get('domainChecker', 'domainChecker')->name('domainChecker');
        Route::get('knowledgebase', 'knowledgebase')->name('knowledgebase');
        Route::get('pricing', 'pricing')->name('pricing');
        // signin & signup moved to AuthController
        Route::get('support', 'support')->name('support');
    });
});

Route::controller(App\Http\Controllers\CartController::class)->group(function () {
    Route::get('/cart', 'index')->name('cart.index');
    Route::post('/cart/add', 'addToCart')->name('cart.add');
    Route::post('/cart/remove', 'removeFromCart')->name('cart.remove');
    Route::get('/checkout', 'checkout')->name('checkout');
});