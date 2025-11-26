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

Route::get('/', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard.index');

//FAKULTAS
Route::get('fakultas', [FakultasController::class, 'index'])->middleware('auth')->name('fakultas.index');

Route::get('fakultas/create', [FakultasController::class, 'create'])->middleware('auth')->name('fakultas.create');

Route::post('fakultas/store', [FakultasController::class, 'store'])->middleware('auth')->name('fakultas.store');

Route::get('fakultas/edit/{id}', [FakultasController::class, 'edit'])->middleware('auth')->name('fakultas.edit');
Route::post('fakultas/update/{id}', [FakultasController::class, 'update'])->middleware('auth')->name('fakultas.update');
route::get('/fakultas/hapus/{id}', [FakultasController::class, 'destroy'])->middleware('auth')->name(name:'fakultas.hapus');
//END FAKULTAS

//PRODI
Route::get('prodi', [ProdiController::class, 'index'])->middleware('auth')->name('prodi.index');
Route::get('prodi/create', [ProdiController::class, 'create'])->middleware('auth')->name('prodi.create');
Route::post('prodi/store', [ProdiController::class, 'store'])->middleware('auth')->name('prodi.store');

Route::get('prodi/edit/{id}', [ProdiController::class, 'edit'])->middleware('auth')->name('prodi.edit');
Route::post('prodi/update/{id}', [ProdiController::class, 'update'])->middleware('auth')->name('prodi.update');
route::get('/prodi/hapus/{id}', [ProdiController::class, 'destroy'])->middleware('auth')->name(name:'prodi.hapus');
//END PRODI

//DOSEN
route::get('dosen',[DosenController::class,'index'])->middleware('auth')->name('dosen.index');
Route::get('dosen/create', [DosenController::class, 'create'])->middleware('auth')->name('dosen.create');
Route::post('dosen/store', [DosenController::class, 'store'])->middleware('auth')->name('dosen.store');

Route::get('dosen/edit/{dosen}', [DosenController::class, 'edit'])->middleware('auth')->name('dosen.edit');
Route::post('dosen/update/{dosen}', [DosenController::class, 'update'])->middleware('auth')->name('dosen.update');
route::get('/dosen/hapus/{dosen}', [DosenController::class, 'destroy'])->middleware('auth')->name(name:'dosen.hapus');
//END DOSEN

//MAHASISWA
Route::get('mahasiswa',[MahasiswaController::class,'index'])->middleware('auth')->name('mahasiswa.index');
route::get('mahasiswa/create',[MahasiswaController::class,'create'])->middleware('auth')->name('mahasiswa.create');
Route::post('mahasiswa/store', [MahasiswaController::class, 'store'])->middleware('auth')->name('mahasiswa.store');

route::get('mahasiswa/edit/{mahasiswa}',[MahasiswaController::class,'edit'])->middleware('auth')->name('mahasiswa.edit');
route::post('mahasiswa/update/{mahasiswa}',[MahasiswaController::class,'update'])->middleware('auth')->name('mahasiswa.update');
Route::get('mahasiswa/hapus/{mahasiswa}',[MahasiswaController::class,'destroy'])->middleware('auth')->name('mahasiswa.hapus');

Route::get('/register', [AuthController::class,'formRegister'])->name('register');
Route::post('/post-register', [AuthController::class,'post'])->name('post');


Route::get('/login', [AuthController::class,'formLogin'])->name('login');
Route::post('/post-login', [AuthController::class,'authenticate'])->name('post.login');

Route::get('/logout', [AuthController::class,'logout'])->middleware('auth')->name('logout');