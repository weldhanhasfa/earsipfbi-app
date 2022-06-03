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

Route::get('/departement/create', function () {
    return view('departement.create');
});

Route::get('/departement/edit', function () {
    return view('departement.edit');
});

Route::get('/document', function () {
    return view('document.index');
});

Route::get('/document/create', function () {
    return view('document.create');
});

Route::get('/document/edit', function () {
    return view('document.edit');
});

Route::get('/distribusi', function () {
    return view('distribusi.index');
});

Route::get('/distribusi/create', function () {
    return view('distribusi.create');
});

Route::get('/distribusi/edit', function () {
    return view('distribusi.edit');
});

Route::get('/terbitan', function () {
    return view('terbitan.index');
});

Route::get('/terbitan/create', function () {
    return view('terbitan.create');
});

Route::get('/terbitan/edit', function () {
    return view('terbitan.edit');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/jenis', function () {
    return view('jenis.index');
});

Route::get('/jenis/create', function () {
    return view('jenis.create');
});

Route::get('/jenis/edit', function () {
    return view('jenis.edit');
});