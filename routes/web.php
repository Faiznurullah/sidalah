<?php

use App\Http\Controllers\EskulController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtamaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;



Route::get('/', [UtamaController::class, 'index']);

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');

// Route Guru
Route::get('/guru', [GuruController::class, 'index'])->name('guru');
Route::get('/guru/detail/{id}', [GuruController::class, 'detail']);
Route::get('/guru/add', [GuruController::class, 'add']);
Route::post('/guru/insert', [GuruController::class, 'insert']);
Route::get('/guru/edit/{id}', [GuruController::class, 'edit']);
Route::post('/guru/update/{id}', [GuruController::class, 'update']);
Route::get('/guru/hapus/{id}', [GuruController::class, 'delete']);

// Route Staff
Route::get('/staff', [StaffController::class, 'index'])->name('staff');
Route::get('/staff/detail/{id}', [StaffController::class, 'detail']);
Route::get('/staff/add', [StaffController::class, 'add']);
Route::post('/staff/insert', [StaffController::class, 'insert']);
Route::get('/staff/edit/{id}', [StaffController::class, 'edit']);
Route::post('/staff/update/{id}', [StaffController::class, 'update']);
Route::get('/staff/hapus/{id}', [StaffController::class, 'delete']);


// Route Siswa
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa');
Route::get('/siswa/detail/{id}', [SiswaController::class, 'detail']);
Route::get('/siswa/add', [SiswaController::class, 'add']);
Route::post('/siswa/insert', [SiswaController::class, 'insert']);
Route::get('/siswa/edit/{id}', [SiswaController::class, 'edit']);
Route::post('/siswa/update/{id}', [SiswaController::class, 'update']);
Route::get('/siswa/hapus/{id}', [SiswaController::class, 'delete']);

// Route Siswa
Route::get('/kelas', [KelasController::class, 'index'])->name('kelas');
Route::get('/kelas/detail/{id}', [KelasController::class, 'detail']);
Route::get('/kelas/add', [KelasController::class, 'add']);
Route::post('/kelas/insert', [KelasController::class, 'insert']);
Route::get('/kelas/edit/{id}', [KelasController::class, 'edit']);
Route::post('/kelas/update/{id}', [KelasController::class, 'update']);
Route::get('/kelas/hapus/{id}', [KelasController::class, 'delete']);

// Route Siswa
Route::get('/jabatan', [JabatanController::class, 'index'])->name('jabatan');
Route::get('/jabatan/add', [JabatanController::class, 'add']);
Route::post('/jabatan/insert', [JabatanController::class, 'insert']);
Route::get('/jabatan/edit/{id}', [JabatanController::class, 'edit']);
Route::post('/jabatan/update/{id}', [JabatanController::class, 'update']);
Route::get('/jabatan/hapus/{id}', [JabatanController::class, 'delete']);


// Route Fasilitas
Route::get('/fasilitas', [FasilitasController::class, 'index'])->name('fasilitas');
Route::get('/fasilitas/detail/{id}', [FasilitasController::class, 'detail']);
Route::get('/fasilitas/add', [FasilitasController::class, 'add']);
Route::post('/fasilitas/insert', [FasilitasController::class, 'insert']);
Route::get('/fasilitas/edit/{id}', [FasilitasController::class, 'edit']);
Route::post('/fasilitas/update/{id}', [FasilitasController::class, 'update']);
Route::get('/fasilitas/hapus/{id}', [FasilitasController::class, 'delete']);

// Route Eskul
Route::get('/eskul', [EskulController::class, 'index'])->name('eskul');
Route::get('/eskul/detail/{id}', [EskulController::class, 'detail']);
Route::get('/eskul/add', [EskulController::class, 'add']);
Route::post('/eskul/insert', [EskulController::class, 'insert']);
Route::get('/eskul/edit/{id}', [EskulController::class, 'edit']);
Route::post('/eskul/update/{id}', [EskulController::class, 'update']);
Route::get('/eskul/hapus/{id}', [EskulController::class, 'delete']);




