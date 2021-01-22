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

Route::get('/', 'TiketController@index');
Route::get('/candi', function () {
    return view("home");
});
Route::get('/candi', function () {
    return view("candi");
});
Route::get('/atraksi', function () {
    return view("atraksi");
});
Route::get('/venue', function () {
    return view("venue");
});
Route::get('/agenda', function () {
    return view("agenda");
});
