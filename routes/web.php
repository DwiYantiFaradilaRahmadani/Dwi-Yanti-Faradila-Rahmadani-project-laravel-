<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');// ini merujuk ke halaman welcome.blade.php d folder resource/welcome
});

Route::get('/', function () {
    return view('index');// ini merujuk ke halaman welcome.blade.php
});

Route::get('/login', function () {
    return view('login');// ini merujuk ke halaman welcome.blade.php
});

Route::get('/about', function () {
    return view('about');// ini merujuk ke halaman about.blade.php
});

