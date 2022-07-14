<?php

use App\Http\Controllers\GolonganController;
use App\Http\Controllers\KaryawanController;
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

route::middleware(['auth'])->group(function () {

    route::get('/golongan', [GolonganController::class, 'index']);
    route::get('/golongan/create', [GolonganController::class, 'create']);
    route::post('/golongan/store', [GolonganController::class, 'store']);
    route::get('/golongan/{id}/edit', [GolonganController::class, 'edit']);
    route::put('/golongan/{id}', [GolonganController::class, 'update']);
    route::delete('/golongan/{id}', [GolonganController::class, 'destroy']);

    route::get('/karyawan', [KaryawanController::class, 'index']);
    route::get('/karyawan/create', [KaryawanController::class, 'create']);
    route::post('/karyawan/store', [KaryawanController::class, 'store']);
    route::get('/karyawan/{id}/edit', [KaryawanController::class, 'edit']);
    route::put('/karyawan/{id}', [KaryawanController::class, 'update']);
    route::delete('/karyawan/{id}', [KaryawanController::class, 'destroy']);
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
