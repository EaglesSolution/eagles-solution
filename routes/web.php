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


Route::get('/', function () {
    return view('index');
});

Route::get('/o-nama', function () {
    return view('onama');
});

Route::get('/izrada-web-sajtova', function () {
    return view('izrada-web-sajtova');
});

Route::get('/digitalni-marketing', function () {
    return view('digitalni-marketing');
});

Route::get('/seo-optimizacija', function () {
    return view('seo-optimizacija');
});

Route::get('/kontakt', function () {
    return view('kontakt');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/blog', function () {
    return view('blog');
});

