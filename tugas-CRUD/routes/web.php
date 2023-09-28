<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbsenController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/absensi',[AbsenController::class, 'index'])->name('absensi');
Route::get('/create',[AbsenController::class, 'create'])->name('create');
Route::post('/insertdata',[AbsenController::class, 'insertdata'])->name('insertdata');