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
    return 'Selamat Datang';
});

Route::get('/about', function () {
    return '1931710068-Erlita Desy Cahyuni';
});

Route::get('/articles/{id}', function ($id) {
    return'Halaman artikel dengan id'.$id;
});