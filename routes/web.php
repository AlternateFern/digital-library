<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PerpusController;
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

Route::get('/register', [RegisterController::class, 'viewRegister']);
Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::get('admin/register', [RegisterController::class, 'viewRegisterAdmin']);
Route::post('admin/register', [RegisterController::class, 'registerAdmin'])->name('admin/register');

Route::get('/login', [LoginController::class, 'viewLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('admin/login', [LoginController::class, 'viewLoginAdmin'])->name('admin/login');
Route::post('admin/login', [LoginController::class, 'loginAdmin']);
Route::get('admin/logout', [LoginController::class, 'logoutAdmin']);

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [PerpusController::class, 'viewHome']);
    Route::get('/library', [PerpusController::class, 'viewLibrary']);
    Route::get('/library/{id}', [PerpusController::class, 'bookDetails']);
    Route::get('/add_book', [PerpusController::class, 'viewTambahBuku']);
    Route::post('/add_book', [PerpusController::class, 'proses_tambah_buku']);
    Route::get('/hapus/{id}', [PerpusController::class, 'hapus']);
});