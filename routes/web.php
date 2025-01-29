<?php
use App\Http\Controllers\PersonaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PersonaController::class, 'index'])->name('index');
Route::get('/create', [PersonaController::class, 'create'])->name('creacion');
Route::post('/store', [PersonaController::class,'store'])->name('store');
Route::get('/show/{id}', [PersonaController::class,'show'])->name('show');
Route::get('/edit/{id}', [PersonaController::class,'edit'])->name('edit');
Route::put('/update/{id}', [PersonaController::class,'update'])->name('update');
Route::delete('/destroy/{id}', [PersonaController::class,'destroy'])->name('destroy');