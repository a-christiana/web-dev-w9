<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaptopController;

Route::get('/', [LaptopController::class, 'index']);
Route::get('/create-laptop', [LaptopController::class, 'create']);
Route::post('/save-laptop', [LaptopController::class, 'store'])->name('save-laptop');
Route::get('/edit-laptop/{laptop}', [LaptopController::class, 'edit'])->name('edit-laptop');
Route::put('/update-laptop/{laptop}', [LaptopController::class, 'update'])->name('update-laptop');
Route::post('/delete-laptop', [LaptopController::class, 'destroy'])->name('delete-laptop');