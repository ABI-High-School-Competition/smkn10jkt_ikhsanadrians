<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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


Route::get('/',[IndexController::class,'index'])->name('index');
Route::get('/pesantiket',[IndexController::class,'pesantiket'])->name('pesantiket');
Route::post('/pesantiket',[IndexController::class,'pesantiketpost'])->name('pesantiketpost');
Route::get('/pesantiket/jadwal',[IndexController::class, 'jadwal'])->name('jadwal');
Route::post('/pesantiket/jadwal',[IndexController::class,'jadwalpost'])->name('jadwalpost');
Route::get('/pesantiket/pemesan',[IndexController::class, 'pemesan'])->name('pemesan');
Route::post('/pesantiket/pemesan',[IndexController::class,'pemesanpost'])->name('pemesanpost');
Route::get('/pesantiket/pilihkursi',[IndexController::class,'pilihkursi'])->name('pilihkursi');
Route::post('/pesantiket/pilihkursi',[IndexController::class,'pilihkursipost'])->name('pilihkursipost');
Route::get('/pesantiket/pembayaran',[IndexController::class,'pembayaran'])->name('pembayaran');
Route::post('/pesantiket/pembayaran',[IndexController::class,'pembayaran_post'])->name('pembayaran.post');
Route::get('/pesantiket/pembayaran/success',[IndexController::class,'success'])->name('pembayaran.success');
Route::get('/dashboard',[IndexController::class,'dashboard'])->name('dashboard');