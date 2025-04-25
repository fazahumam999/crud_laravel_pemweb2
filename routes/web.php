<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BarangController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/barang', [BarangController::class, 'barang']);

Route::get('/barang/create', [BarangController::class, 'create'])->name('barang.create');

Route::post('/barang', [BarangController::class, 'store'])->name('barang.store');

Route::get('/barang/{id}/edit', [BarangController::class, 'edit'])->name('barang');

Route::put('/barang/{id}', [BarangController::class, 'update'])->name('barang.update');

Route::delete('/barang/{id}',[BarangController::class, 'destroy'])->name('barang.destroy');


