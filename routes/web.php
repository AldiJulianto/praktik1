<?php

use App\Http\Controllers\BiodataController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('home', [HomeController::class, 'home']);
Route:: get('/list_siswa', [BiodataController::class, 'index'])->name('list-siswa');
Route:: get('/list_siswa', [HomeController::class, 'index'])->name('lihat-siswa');

// Route::get('form_tambah_siswa', function () {
//     return view('form_tambah_siswa');
// });

Route:: get('form_tambah_siswa', [BiodataController::class, 'create'])->name('add-siswa');
Route:: post('/store_siswa', [BiodataController::class, 'store']);
