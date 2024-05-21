<?php

use App\Http\Controllers\ProfesorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('profesor/create',[ProfesorController::class,'create']);
Route::post('profesor/store', [ProfesorController::class,'store'])->name('profesor.store');
Route::get('profesor/listar',[ProfesorController::class,'index'])->name('profesor.index');
Route::delete('profesor/{profesor}',[ProfesorController::class,'destroy'])->name('profesor.destroy');
Route::put('profesor/{profesor}',[ProfesorController::class,'update'])->name('profesor.update');
Route::get('profesor/{profesor}/editar',[ProfesorController::class,'edit'])->name('profesor.edit');
Route::get('profesor/{profesor}',[ProfesorController::class,'show'])->name('profesor.show');