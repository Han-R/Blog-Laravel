<?php

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
    return view('user/blog');
});

Route::get('post', function () {
    return view('user/post');
})->name('post');

Route::get('admin/home', function () {
    return view('admin.home');
})->name('home');
