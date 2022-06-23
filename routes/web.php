<?php

use App\Http\Controllers\DepartementController;
use App\Http\Controllers\JenisController;
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

Route::redirect('/', 'login');

Route::middleware('auth')->group(function(){
    Route::get('/home', function () {
        return view('home');
    });

    Route::resource('/jenis', JenisController::class);

    Route::resource('/departement', DepartementController::class);

});