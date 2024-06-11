<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/index', [BookController::class , 'index']);
Route::get('/show{datos}', [BookController::class , 'show'])->name('crud.show');
Route::get('/create/nuevo', [BookController::class , 'create'])->name('crud.create');
Route::post('/store', [BookController::class , 'store'])->name('crud.store');
Route::get('/show/{datos}/edit', [BookController::class , 'edit'])->name('crud.edit');
Route::put('/show/{datos}', [BookController::class , 'update'])->name('crud.update');
Route::delete('/delete/{datos}', [BookController::class , 'destroy'])->name('crud.destroy');

