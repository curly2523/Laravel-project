<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/card', function () {
    return view('card');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/index2', function () {
    return view('index2');
});