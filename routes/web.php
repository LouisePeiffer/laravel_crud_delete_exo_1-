<?php

use App\Http\Controllers\CreateMembreController;
use App\Http\Controllers\FemmesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MembreController;
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

// FRONT
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/membres', [MembreController::class, 'index'])->name('membres');
Route::get('/femmes', [MembreController::class, 'femmes'])->name('membres.femmes');
Route::get('/hommes', [MembreController::class, 'hommes'])->name('membres.hommes');

// BACK

// CRUD -> create
Route::get('/admin/membres/create',[CreateMembreController::class, 'create'])->name('create.membre');
Route::post('/admin/membres/store',[CreateMembreController::class, 'store'])->name('store.membre');

// CRUD -> delete
Route::delete('/admin/membre/{id}/delete', [MembreController::class, 'destroy'])->name('destroy.membre')
;