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
    return view('welcome');
});

/*Route::get('/hello-laravel', function () {
    echo "Ini adalah halaman baru <br>";
    return "Hello Laravel";
});*/

Route::get('/home','HomeController');
Route::get('/form','AuthController');
