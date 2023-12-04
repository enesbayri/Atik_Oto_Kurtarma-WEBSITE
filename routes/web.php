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
})->name("anasayfa");

Route::get('/hizmetlerimiz', function () {
    return view('hizmetler');
})->name("hizmetlerimiz");


Route::get('/galeri', function () {
    return view('galeri');
})->name("galeri");

Route::get('/atikotomotiv', function () {
    return view('atikoto');
})->name("atikoto");

Route::get('/iletisim', function () {
    return view('iletisim');
})->name("iletisim");

