<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PelamarController;
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

Route::get('/', [PelamarController::class, 'index'])->name('home');
Route::post('/kirim-lamaran', [PelamarController::class, 'store'])->name('kirim-lamaran');

Auth::routes();

Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
Route::get('/dashboard/pelamar/{id}', [AdminController::class, 'create']);

