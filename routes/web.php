<?php

use App\Http\Controllers\FileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('template.index');
    });
    Route::get('/index', function () {
        return view('Admin.index');
    });

    Route::get('/add', function () {
        return view('template.add-post');
    });

    Route::get('/files', [FileController::class, 'index'])->name('Admin.index');
    Route::get('/files/send', [FileController::class, 'send'])->name('Admin.Files.Send');
    // Route::get('/files', [FileController::class, 'index'])->name('Admin.Files.index');

    Route::post('/upload', [FileController::class, 'upload'])->name('file.upload');
    Route::get('/download/{id}', [FileController::class, 'download'])->name('file.download');
});

