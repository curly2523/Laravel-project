<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager as ControllersAuthManager;
use App\Http\Controllers\ProductController;

Route::get('/card', function () {
    return view('index2');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/alert', function () {
    return view('alert');
});

Route::get('/badge', function () {
    return view('badge');
});

Route::get('/button', function () {
    return view('button');
});

Route::get('/calendar', function () {
    return view('calendar');
});

Route::get('/chart', function () {
    return view('chart');
});

Route::get('/fontawesome', function () {
    return view('fontawesome');
});

Route::get('/forget-pass', function () {
    return view('forget-pass');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/grid', function () {
    return view('grid');
});

Route::get('/inbox', function () {
    return view('inbox');
});

Route::get('/layout', function () {
    return view('layout');
});

Route::get('/map', function () {
    return view('map');
});

Route::get('/modal', function () {
    return view('modal');
});

Route::get('/progress-bar', function () {
    return view('progress-bar');
});

Route::get('/switch', function () {
    return view('switch');
});

Route::get('/tab', function () {
    return view('tab');
});

Route::get('/table', function () {
    return view('table');
});

Route::get('/typo', function () {
    return view('typo');
});

Route::get('/index4',  function () {
    return view('index4');
});

//dashboards

Route::get('/', function () {
    return view('welcome');
})->name(('welcome'));

Route::get('/home',function () {
    return view('home');
} )->name('home')->middleware('auth');

Route::get('/inventory', [ProductController::class, 'index'] )->name('inventory');

Route::get('/search', [ProductController::class, 'search'] )->name('search');

//reg,log routes

Route::get('/register',  [ControllersAuthManager::class, 'registration'])->name('register');

Route::post('/register', [ControllersAuthManager::class, 'registrationPost'])->name('register.post');

Route::post('/logout', [ControllersAuthManager::class,'logout'])->name(('logout'));

Route::get('/login', [ControllersAuthManager::class, 'login'])->name('login');

Route::post('/login', [ControllersAuthManager::class, 'loginPost'])->name('login.post');

// Product routes
Route::get('/product/create', [ProductController::class, 'create'])->name('products.create');

Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');

Route::put('/product/{product}/update', [ProductController::class, 'update'])->name('products.update');

Route::delete('/product/{product}/delete', [ProductController::class, 'delete'])->name('products.delete');

Route::post('/inventory', [ProductController::class, 'store'])->name('products.store');
