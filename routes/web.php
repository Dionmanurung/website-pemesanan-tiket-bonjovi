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
    return view('home', [
        "title" => "Home | Bon Jovi"
    ]);
});
Route::get('/home', function () {
    return view('home', [
        "title" => "Home | Bon Jovi"
    ]);
});

Route::get('/news', function () {
    return view('news', [
        "title" => "News | Bon Jovi"
    ]);
});

Route::get('/tickets', function () {
    return view('tickets', [
        "title" => "Tickets | Bon Jovi"
    ]);
});

Route::get('/us', function () {
    return view('us', [
        "title" => "ContactUs | Bon Jovi"
    ]);
});

Route::get('/regis', function () {
    return view('regis', [
        "title" => "Registrasi | Bon Jovi"
    ]);
});

