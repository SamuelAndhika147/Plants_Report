<?php

use App\Http\Controllers\PlantController;
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

Route::get('/', [PlantController::class, 'index']);
Route::get('/create', [PlantController::class, 'create']);
Route::post('/store', [PlantController::class, 'store'])->name('store');
Route::get('/edit/{id}', [PlantController::class, 'edit'])->name('edit');
Route::patch('/update/{id}', [PlantController::class, 'update'])->name('upate');
Route::delete('/destroy/{id}', [PlantController::class, 'destroy'])->name('destroy');
