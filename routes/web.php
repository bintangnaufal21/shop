<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/product', function () {
    return view('product');
})->name('product');

Route::get('/user', function () {
    return view('user');
})->name('user');

Route::get('/pesanan', function () {
    return view('pesanan');
})->name('pesanan');

Route::get('/laporan', function () {
    return view('laporan');
})->name('laporan');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');
