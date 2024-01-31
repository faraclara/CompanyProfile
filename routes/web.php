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

    $data = [
        'content' => 'home/home/index'
    ];
    return view('home.layouts.wrapper', $data);
});


Route::get('/about', function() {
    $data = [
        'content' => 'home/about/index'
    ];
    return view('home.layouts.wrapper', $data);
});

Route::get('/services', function() {
    $data = [
        'content' => 'home/services/index'
    ];
    return view('home.layouts.wrapper', $data);
});

Route::get('/blog', function() {
    $data = [
        'content' => 'home/blog/index'
    ];
    return view('home.layouts.wrapper', $data);
});

Route::get('/contact', function() {
    $data = [
        'content' => 'home/contact/index'
    ];
    return view('home.layouts.wrapper', $data);
});


Route::get('/login', function() {
    $data = [
        'content' => 'home/auth/login'
    ];
    return view('home.layouts.wrapper', $data);
});


// ===========ADMIN=============

Route::prefix('/admin')->group(function () {
    Route::get('/dashboard', function(){
        return view('admin.layouts.wrapper');
    });
});

