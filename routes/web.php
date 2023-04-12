<?php

use App\Http\Controllers\Categorias;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [Categorias::class, 'index']);
Route::get('/servicios', [Categorias::class, 'servicios']);
Route::get('/create', [Categorias::class, 'create']);
Route::post('/store', [Categorias::class, 'store']);
Route::get('/edit/{id}', [Categorias::class, 'edit'])->name('edit');
Route::put('/update/{id}', [Categorias::class, 'update'])->name('update');
Route::get('/show/{id}', [Categorias::class, 'show'])->name('show');
Route::delete('/destroy/{id}', [Categorias::class, 'destroy'])->name('destroy');