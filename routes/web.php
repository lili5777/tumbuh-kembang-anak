<?php

use App\Http\Controllers\AdminController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/data-anak', [AdminController::class, 'dataanak'])->name('admin.dataanak');
Route::get('/get-motorik/{usia_id}', [AdminController::class, 'getMotorik']);
Route::get('/get-bicara/{usia_id}', [AdminController::class, 'getBicara']);
Route::post('/admin/tambah-data-anak', [AdminController::class, 'tambahdataanak'])->name('admin.tambahdataanak');
Route::put('/admin/edit-data-anak/{id}', [AdminController::class, 'editdataanak'])->name('admin.editdataanak');
Route::delete('/admin/hapus-data-anak/{id}', [AdminController::class, 'hapusdataanak'])->name('admin.hapusdataanak');