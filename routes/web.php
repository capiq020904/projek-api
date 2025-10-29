<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FakultasController;
use Illuminate\Support\Facades\Route;

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

Route::get('fakultas', [FakultasController::class, 'index'])->name('fakultas.index');

Route::get('fakultas/create', [FakultasController::class, 'create'])->name('fakultas.create');

Route::post('fakultas/store', [FakultasController::class, 'store'])->name('fakultas.store');

Route::get('fakultas/edit/{id}', [FakultasController::class, 'edit'])->name('fakultas.edit');
Route::post('fakultas/update/{id}', [FakultasController::class, 'update'])->name('fakultas.update');
route::get('/fakultas/hapus/{id}', [FakultasController::class, 'destroy'])->name(name:'fakultas.hapus');






Route::get('/profile', function(){
    return view('profile');
});
