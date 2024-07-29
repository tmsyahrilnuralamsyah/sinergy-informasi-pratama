<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

Route::get('/', [AdminController::class, 'dataKaryawan'])->name('dataKaryawan');
Route::post('/', [AdminController::class, 'dataKaryawanFilter'])->name('dataKaryawanFilter');
Route::post('/tambah-karyawan', [AdminController::class, 'tambahKaryawan'])->name('tambahKaryawan');
Route::put('/edit-karyawan/{id}', [AdminController::class, 'editKaryawan'])->name('editKaryawan');
Route::delete('/hapus-karyawan/{id}', [AdminController::class, 'hapusKaryawan'])->name('hapusKaryawan');

// Route::get('/cekAPI', function() {
//     $clientId = env('GOOGLE_DRIVE_CLIENT_ID');
//     $clientSecret = env('GOOGLE_DRIVE_CLIENT_SECRET');
//     $refreshToken = env('GOOGLE_DRIVE_REFRESH_TOKEN');
//     $folderId = env('GOOGLE_DRIVE_FOLDER');

//     dd($clientId, $clientSecret, $refreshToken, $folderId);
// });