<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\Pegawai2Controller;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SembakoController;
use App\Http\Controllers\KaryawanController;



Route::get('/publishfrontend', function () {
    return view('publishfrontend');
});

Route::get('/ets', function () {
    return view('ets');
});

Route::get('/ltree', function () {
    return view('ltree');
});

Route::get('/p1', function () {
    return view('p1');
});

Route::get('/p4', function () {
    return view('p4');
});

Route::get('/p7part1', function () {
    return view('p7part1');
});

Route::get('/p7part2', function () {
    return view('p7part2');
});

Route::get('/dosen', [Link::class,'index']);
//Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);

Route::get('/formulir', [Pegawai2Controller::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);


Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

// CRUD Pegawai
Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah']);
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
Route::post('/pegawai/store', [PegawaiController::class, 'store']);
Route::post('/pegawai/update', [PegawaiController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiController::class, 'cari']);

//CRUD Sembako
Route::get('/sembako', [SembakoController::class, 'index']);
Route::get('/sembako/tambah', [SembakoController::class, 'tambah']);
Route::post('/sembako/store', [SembakoController::class, 'store']);
Route::get('/sembako/edit/{id}', [SembakoController::class, 'edit']);
Route::post('/sembako/update', [SembakoController::class, 'update']);
Route::get('/sembako/hapus/{id}', [SembakoController::class, 'hapus']);
Route::get('/sembako/cari', [SembakoController::class, 'cari']);

//CRUD Karyawan
Route::get('/karyawan', [KaryawanController::class, 'index']);
Route::get('/karyawan/tambah', [KaryawanController::class, 'tambah']);
Route::post('/karyawan/store', [KaryawanController::class, 'store']);
Route::get('/karyawan/hapus/{kodepegawai}', [KaryawanController::class, 'hapus']);

