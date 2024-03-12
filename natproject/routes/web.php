<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/feature', function () {
    return view('feature');
})->name('feature');

Route::get('/games', function () {
    return view('games');
})->name('games');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::name('account.')->group(function () {
    Route::get('/login ', function () {
        return view('login');
    })->name('login');
    Route::get('/signup ', function () {
        return view('signup');
    })->name('signup');
    Route::get('/profile ', function () {
        return view('profile');
    })->name('profile');
});