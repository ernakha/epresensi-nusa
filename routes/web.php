<?php

use App\Http\Controllers\GuruController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    });
});

Route::prefix('guru')->group(function () {
    Route::get('/view', [GuruController::class, 'index'])->name('guru.view');
    Route::get('/add', [GuruController::class, 'add'])->name('guru.add');
    Route::post('/store', [GuruController::class, 'store'])->name('guru.store');
    Route::get('/edit/{id}', [GuruController::class, 'edit'])->name('guru.edit');
    Route::post('/update/{id}', [GuruController::class, 'update'])->name('guru.update');
    Route::get('/hapus/{id}', [GuruController::class, 'delete'])->name('guru.delete');
});

