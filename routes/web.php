<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;

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

Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');

//FAKULTAS
Route::get('fakultas', [FakultasController::class, 'index'])->name('fakultas.index');

Route::get('fakultas/create', [FakultasController::class, 'create'])->name('fakultas.create');

Route::post('fakultas/store', [FakultasController::class, 'store'])->name('fakultas.store');

Route::get('fakultas/edit/{id}', [FakultasController::class, 'edit'])->name('fakultas.edit');
Route::post('fakultas/update/{id}', [FakultasController::class, 'update'])->name('fakultas.update');
route::get('/fakultas/hapus/{id}', [FakultasController::class, 'destroy'])->name(name:'fakultas.hapus');
//END FAKULTAS

//PRODI
Route::get('prodi', [ProdiController::class, 'index'])->name('prodi.index');
Route::get('prodi/create', [ProdiController::class, 'create'])->name('prodi.create');
Route::post('prodi/store', [ProdiController::class, 'store'])->name('prodi.store');

Route::get('prodi/edit/{id}', [ProdiController::class, 'edit'])->name('prodi.edit');
Route::post('prodi/update/{id}', [ProdiController::class, 'update'])->name('prodi.update');
route::get('/prodi/hapus/{id}', [ProdiController::class, 'destroy'])->name(name:'prodi.hapus');
//END PRODI

//DOSEN
route::get('dosen',[DosenController::class,'index'])->name('dosen.index');
Route::get('dosen/create', [DosenController::class, 'create'])->name('dosen.create');
Route::post('dosen/store', [DosenController::class, 'store'])->name('dosen.store');

Route::get('dosen/edit/{dosen}', [DosenController::class, 'edit'])->name('dosen.edit');
Route::post('dosen/update/{dosen}', [DosenController::class, 'update'])->name('dosen.update');
route::get('/dosen/hapus/{dosen}', [DosenController::class, 'destroy'])->name(name:'dosen.hapus');
//END DOSEN

//MAHASISWA
Route::get('mahasiswa',[MahasiswaController::class,'index'])->name('mahasiswa.index');
route::get('mahasiswa/create',[MahasiswaController::class,'create'])->name('mahasiswa.create');
Route::post('mahasiswa/store', [MahasiswaController::class, 'store'])->name('mahasiswa.store');

route::get('mahasiswa/edit/{mahasiswa}',[MahasiswaController::class,'edit'])->name('mahasiswa.edit');
route::post('mahasiswa/update/{mahasiswa}',[MahasiswaController::class,'update'])->name('mahasiswa.update');
Route::get('mahasiswa/hapus/{mahasiswa}',[MahasiswaController::class,'destroy'])->name('mahasiswa.hapus');

Route::get('/register', [AuthController::class,'formRegister'])->name('register');
Route::post('/post-register', [AuthController::class,'post'])->name('post');




