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
    return view('landing.page.maintaice');
});

Route::get('/index', function () {
    return view('landing.page.index');
});

Route::get('/about-daycare', function () {
    return view('landing.page.about');
});

Route::get('/guru-daycare', function () {
    return view('landing.page.guru');
});

Route::get('/guru-daycare', function () {
    return view('landing.page.guru');
});

Route::get('/layanan-classes', function () {
    return view('landing.page.classes');
});

Route::get('/hubungi-kami', function () {
    return view('landing.page.contact');
});

Route::get('/gallery', function () {
    return view('landing.page.gallery');
});

