<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Welcome Page
// Route::get('/', function () {
//     return view('welcome');
// });

// Home Page
Route::get('/', function () {
    return view('home');
});

// Contact Page
Route::get('/contact', function () {
    return view('contact');
});

// Blog Page
Route::get('/posts/first-post', function () {
    return view('posts.show');
});

// About Page
Route::get('/about', function () {
    return view('about');
});

// About Page
Route::get('/profile', function () {
    return view('profile');
});