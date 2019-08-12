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


Auth::routes();
Route::get('/', function () {
    return view(env('THEME_NAME') . '/dashboard');
});
Route::get('/forgot-password', function () {
    return view(env('THEME_NAME') . '/auth.forgot-password');
});
Route::get('/buttons', function () {
    return view(env('THEME_NAME') . '/components.buttons');
});
Route::get('/cards', function () {
    return view(env('THEME_NAME') . '/components.cards');
});
Route::get('/colors', function () {
    return view(env('THEME_NAME') . '/utilities.colors');
});
Route::get('/borders', function () {
    return view(env('THEME_NAME') . '/utilities.borders');
});
Route::get('/animations', function () {
    return view(env('THEME_NAME') . '/utilities.animations');
});
Route::get('/other', function () {
    return view(env('THEME_NAME') . '/utilities.other');
});
Route::get('/404', function () {
    return view(env('THEME_NAME') . '/pages.404');
});
Route::get('/blank', function () {
    return view(env('THEME_NAME') . '/pages.blank');
});
Route::get('/charts', function () {
    return view(env('THEME_NAME') . '/charts');
});
Route::get('/tables', function () {
    return view(env('THEME_NAME') . '/tables');
});
Route::get('/backend', 'BackendController@index')->name('backend');
Route::get('/plugins', 'MoodleController@index')->name('plugins');
