<?php

use App\Http\Controllers\FileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Auth::routes();

Route::get('/', function () {
    return view('template.index');
});
Route::get('/index', function () {
    return view('Admin.index');
});
Route::get('/files', [FileController::class, 'index'])->name('Admin.Files.index');
Route::post('/upload', [FileController::class, 'upload'])->name('file.upload');
Route::get('/download/{id}', [FileController::class, 'download'])->name('file.download');

Route::middleware(['auth'])->group(function () {
});
