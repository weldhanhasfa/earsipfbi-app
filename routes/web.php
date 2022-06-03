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
    return view('home');
});

Route::get('/departement', function () {
    return view('departement.index');
});

Route::get('/document', function () {
    return view('document.index');
});

Route::get('/distribusi', function () {
    return view('distribusi.index');
});

Route::get('/terbitan', function () {
    return view('terbitan.index');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/jenis', function () {
    return view('jenis.index');
});