<?php

use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\ImageUploadController;
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
    return view('index');
});

Route::post('/store-image', [ImageUploadController::class, 'store'])->name('store.image');
Route::post('/upload-image', [ImageUploadController::class, 'uploadImage'])->name('upload.image');
