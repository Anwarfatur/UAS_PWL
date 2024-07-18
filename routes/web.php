<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\homepage;
use App\Http\Controllers\PengaduanController;
use Illuminate\Support\Facades\Route;

Route::get('/', [homepage::class, 'index']);

Route::get('/admin', [Admin::class, 'index']);

Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/berita/create', [BeritaController::class, 'create']);
Route::post('/berita/store', [BeritaController::class, 'store']);
Route::get('/berita/edit/{id}', [BeritaController::class, 'edit']);
Route::post('/berita/update/{id}', [BeritaController::class, 'update']);
Route::post('/berita/destroy/{id}', [BeritaController::class, 'destroy']);

Route::get('/galeri', [GaleriController::class, 'index']);
Route::get('/galeri/create', [GaleriController::class, 'create']);
Route::post('/galeri/store', [GaleriController::class, 'store']);
Route::get('/galeri/edit/{id}', [GaleriController::class, 'edit']);
Route::post('/galeri/update/{id}', [GaleriController::class, 'update']);
Route::post('/galeri/destroy/{id}', [GaleriController::class, 'destroy']);

Route::post('pengaduan/store', [PengaduanController::class, 'store'])->name('pengaduan.store');
Route::get('pengaduan', [PengaduanController::class, 'index'])->name('pengaduan.index');

