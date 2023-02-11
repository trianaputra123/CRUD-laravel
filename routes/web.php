<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\BuahController;
use App\Models\BuahModel;
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

Route::get('/',[HomeController::class,'index']);
Route::get('/pemesanan',[PemesananController::class,'index'])->name('product');
Route::get('/Buah/detail/{idpemesanan}',[BuahController::class,'detail']);
Route::get('/Buah/add', [BuahController::class,'add']);
Route::get('/Buah/ubah/{idproduk}', [BuahController::class,'ubah']);
Route::get('/Buah/hapus/{idproduk}', [BuahController::class,'hapus']);
Route::post('/Buah/insert', [BuahController::class,'insert']);
Route::post('/Buah/update/{idproduk}', [BuahController::class,'update']);
Route::get('/Buah',[BuahController::class,'index'])->name('buah');
