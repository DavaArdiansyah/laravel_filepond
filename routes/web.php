<?php

use App\Http\Controllers\FileUploadController;
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
    return view('tes');
});

Route::post('/data-pengguna/alumni/impor/tmp-upload', [FileUploadController::class, 'store']);
Route::post('/revert', [FileUploadController::class, 'revert']);
Route::post('/restore', [FileUploadController::class, 'restore']);
Route::get('/load/{file}', [FileUploadController::class, 'load']);
