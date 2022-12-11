<?php

use App\Http\Controllers\dbcontroller;
use App\Http\Controllers\gurucontroller;
use App\Http\Controllers\kelascontroller;
use App\Http\Controllers\muridcontroller;
use App\Http\Controllers\muridklsxController;
use App\Http\Controllers\muridklsxiController;
use App\Http\Controllers\muridklsxiiController;
use App\Http\Controllers\pelanggarancontroller;
use App\Http\Controllers\violationController;
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

Route::get('/', [dbcontroller::class, 'index']);


// kelas
Route::get('/dashboard/kelas', [kelascontroller::class, 'index']);
Route::get('/dashboard/form-kelas', [kelascontroller::class, 'create']);
Route::post('/dashboard/form-kelas', [kelascontroller::class, 'store']);
Route::get('/dashboard/detailkelas/{id}', [kelascontroller::class, 'show']);
Route::delete('/dashboard/hapuskelas/{id}', [kelascontroller::class, 'destroy']);
Route::get('/dashboard/{id}/editkelas', [kelascontroller::class, 'edit']);
Route::put('/dashboard/simpaneditkelas/{id}', [kelascontroller::class, 'update']);
Route::get('/dashboard/kelas-deleted', [kelascontroller::class, 'deleteduser']);
Route::get('/dashboard/{id}/restoreuser', [muridcontroller::class, 'restore']);


// murid
Route::get('/dashboard/murid', [muridcontroller::class, 'index']);
Route::get('/dashboard/form-murid', [muridcontroller::class, 'create']);
Route::post('/dashboard/form-murid', [muridcontroller::class, 'store']);
Route::get('/dashboard/detailmurid/{id}', [muridcontroller::class, 'show']);
Route::delete('/dashboard/hapusmurid/{id}', [muridcontroller::class, 'destroy']);
Route::get('/dashboard/{id}/editmurid', [muridcontroller::class, 'edit']);
Route::put('/dashboard/simpaneditmurid/{id}', [muridcontroller::class, 'update']);
Route::get('/dashboard/murid-deleted', [muridcontroller::class, 'deletedmurid']);
Route::get('/dashboard/{id}/restoremurid', [muridcontroller::class, 'restore']);
Route::delete('/dashboard/forcedeletemurid/{id}', [muridcontroller::class, 'forceDelete']);

// muridkls10
Route::get('/dashboard/muridX', [muridklsxController::class, 'index']);
// muridkls11
Route::get('/dashboard/muridXI', [muridklsxiController::class, 'index']);
// muridkls12
Route::get('/dashboard/muridXII', [muridklsxiiController::class, 'index']);



// violation
Route::get('/dashboard/violation', [violationController::class, 'index']);
Route::get('/dashboard/form-violation', [violationcontroller::class, 'create']);
Route::post('/dashboard/form-violation', [violationcontroller::class, 'store']);
Route::get('/dashboard/{id}/editviolation', [violationcontroller::class, 'edit']);
Route::put('/dashboard/simpaneditviolation/{id}', [violationcontroller::class, 'update']);


// guru
Route::get('/dashboard/guru', [gurucontroller::class, 'index']);
Route::get('/dashboard/form-guru', [gurucontroller::class, 'create']);
Route::post('/dashboard/form-guru', [gurucontroller::class, 'store']);
Route::get('/dashboard/detailguru/{id}', [gurucontroller::class, 'show']);
Route::delete('/dashboard/hapusguru/{id}', [gurucontroller::class, 'destroy']);
Route::get('/dashboard/{id}/editguru', [gurucontroller::class, 'edit']);
Route::put('/dashboard/simpaneditguru/{id}', [gurucontroller::class, 'update']);
Route::get('/dashboard/guru-deleted', [gurucontroller::class, 'deletedguru']);
Route::get('/dashboard/{id}/restoreguru', [gurucontroller::class, 'restore']);
Route::delete('/dashboard/forcedeleteguru/{id}', [gurucontroller::class, 'forceDelete']);


// pelanggaran
Route::get('/dashboard/data-pelanggaran', [pelanggarancontroller::class, 'index']);
Route::get('/dashboard/form-pelanggaran', [pelanggarancontroller::class, 'create']);
Route::post('/dashboard/form-pelanggaran', [pelanggarancontroller::class, 'store']);
Route::get('/dashboard/detailpelanggaran/{id}', [pelanggarancontroller::class, 'show']);
Route::delete('/dashboard/hapuspelanggaran/{id}', [pelanggarancontroller::class, 'destroy']);
Route::get('/dashboard/{id}/editpelanggaran', [pelanggarancontroller::class, 'edit']);
Route::put('/dashboard/simpaneditpelanggaran/{id}', [pelanggarancontroller::class, 'update']);

