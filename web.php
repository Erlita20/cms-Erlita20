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

//Praktikum 1 
/*Route::get('/',function() {
    return'Selamat Datang';
});

Route::get('/about',function() {
    return'1931710068-Erlita DesyCahyuni';
});

Route::get('/artikel/{id}',function($id) {
    return' Halaman Artikel dengan id ' .$id;
});*/
Route::get('/home', 'HomeController@home');
Route::get('/about', 'AboutController@about');
Route::get('/article/{id}', 'ArticleController@article');