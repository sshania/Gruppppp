<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GrupController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can reg ister web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/grup',[GrupController::class, 'index'])->name('grup.index');
Route::get('/grup/create',[GrupController::class, 'create'])->name('grup.create');
Route::post('/grup/store',[GrupController::class, 'store'])->name('grup.store');

Route::get('/grup/{grup}/edit',[GrupController::class, 'edit'])->name('grup.edit');
Route::put('/grup/{grup}/update',[GrupController::class, 'update'])->name('grup.update');
Route::delete('/grup/{grup}/destroy',[GrupController::class, 'destroy'])->name('grup.destroy');