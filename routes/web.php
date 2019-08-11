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
    return view(env('THEME_NAME') . '/dashboard');
});
Route::get('/login', function () {
    return view(env('THEME_NAME') . '/auth.login');
});
Route::get('/register', function () {
    return view(env('THEME_NAME') . '/auth.register');
});
Route::get('/forgot-password', function () {
    return view(env('THEME_NAME') . '/auth.forgot-password');
});
