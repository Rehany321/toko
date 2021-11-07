<?php

use App\Http\Controllers\CobaController;
use App\Http\Controllers\BlogController;
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
});

Route::get('/coba-routing', function () {
    return 'Ini adalah hasil percobaan routing';
});

// route dengan parameter
Route::get('/coba-routing/{nama}', function($nama) {
    return 'Ini adalah hasil percobaan routing. Kenalin, aku ' . $nama;
});

// route dengan parameter opsional
Route::get('/coba-routing/{nama?}', function($nama = "Nilai Default") {
    return 'Ini adalah hasil percobaan routing. Kenalin, aku ' . $nama;
});

Route::get('/barang', function () {
    return view('Barang.add-barang');
});
Route::get('/add-barang', 'App\Http\Controllers\BarangController@index');

// Route::get('/', function () {
//     return view('coba', array(
//         "name" => "Budi"
//     ));
// });

Route::get('/coba', [CobaController::class, 'index']);
Route::get('/blog', [BlogController::class, 'index']);

