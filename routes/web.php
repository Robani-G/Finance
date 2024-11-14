<?php

use App\Http\Controllers\CompanyController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PdfController;


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('Admin.Dashboard');
    });
    Route::get('/index', function () {
        return view('Admin.index');
    });
    Route::get('/index', [FileController::class, 'index'])->name('Admin.file.index');

    Route::get('/add', function () {
        return view('template.letter-box');
    });

    Route::get('/company/index', function () {
        return view('Admin.Company.Index');
    });

    Route::get('/Dashboard', [HomeController::class, 'index'])->name('home');

    //Car Categories
    Route::prefix('Company')->name('Admin.Company.')->controller(CompanyController::class)->group(function () {
        Route::get('/Create', 'Create')->name('Create');
        Route::delete('/delete/{id}', 'Destroy')->name('Destroy');
        Route::get('/Edit/{id}', 'Edit')->name('Edit');
        Route::get('/Index', 'Index')->name('Index');
        Route::get('/Show/{id}', 'Show')->name('Show');
        Route::post('/Store', 'Store')->name('Store');
        Route::put('/Update/{id}', 'Update')->name('Update');
    });
    Route::prefix('Requests')->name('Admin.Requests.')->controller(FileController::class)->group(function () {
        Route::get('/Create', 'Create')->name('Create');
        Route::delete('/delete/{id}', 'Destroy')->name('Destroy');
        Route::get('/Edit/{id}', 'Edit')->name('Edit');
        Route::get('/Index', 'Index')->name('Index');
        Route::get('/Approve', 'ApproveIndex')->name('ApproveIndex');
        Route::get('/ApproveCreate/{id}', 'ApproveCreate')->name('ApproveCreate');
        Route::post('/ApproveStatus/{id}', 'ApproveStatus')->name('ApproveStatus');
        // Route::get('/Print/{id}', 'RequestPdf')->name('Print');

        Route::get('/Show/{id}', 'Show')->name('Show');
        Route::post('/Store', 'Store')->name('Store');
        Route::put('/Update/{id}', 'Update')->name('Update');
    });
    Route::get('/Print/{id}', [PdFController::class, 'RequestPdf'])->name('Admin.Requests.Print');

    // Route  ::get('/files', [FileController::class, 'index'])->name('Admin.file.index');
    Route::get('/files/send', [FileController::class, 'send'])->name('Admin.Files.Send');
    // // Route::get('/files', [FileController::class, 'index'])->name('Admin.Files.index');

    // Route::post('/upload', [FileController::class, 'upload'])->name('file.upload');
    // Route::get('/download/{id}', [FileController::class, 'download'])->name('file.download');
});


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
