<?php

use Illuminate\Support\Facades\Route;
use App\Http\Conteollers\AuthManager;
use App\Http\Controllers\AuthManager as ControllersAuthManager;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('index2');
})->name(('welcome'));

Route::get('/card', function () {
    return view('index2');
});

Route::get('/index.html', function () {
    return view('index');
});

Route::get('/index2.html', function () {
  return view('index2');
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

Route::get('/index3.html', function () {
    return view('index3');
})->name('home');

Route::get('/index4.html', function () {
    return view('index4');
});

Route::get('/layout', function () {
    return view('layout');
});

Route::get('/login.html', [ControllersAuthManager::class, 'login'])->name('login');

Route::post('/login.html', [ControllersAuthManager::class, 'loginPost'])->name('login.post');

Route::get('/map', function () {
    return view('map');
});

Route::get('/modal', function () {
    return view('modal');
});

Route::get('/progress-bar', function () {
    return view('progress-bar');
});

Route::get('/register.html',  [ControllersAuthManager::class, 'registration'])->name('register');

Route::post('/register.html', [ControllersAuthManager::class, 'registrationPost'])->name('register.post');

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

Route::post('/logout', [ControllersAuthManager::class,'logout'])->name(('logout'));