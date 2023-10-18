<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

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

Route::controller(BarangController::class)->name('barang.')->prefix('barang')->group(function () { 
    Route::get('/list', 'listBarang')->name('list');
    Route::get('/list-diskon', 'listBarangDiskon')->name('list-diskon'); 
});