<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PlantController;
use App\Http\Controllers\RegisterController;
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

Route::middleware('isGuest')->group(function () {
    Route::get('/', [PlantController::class, 'register']);
    Route::post('/register', [RegisterController::class, 'register']);
    Route::get('/login', [PlantController::class, 'login']);
    Route::post('/auth', [LoginController::class, 'login']);
});


Route::middleware('isLogin')->group(function () {
    Route::get('/home', [PlantController::class, 'index']);
    Route::get('/create', [PlantController::class, 'create']);
    Route::post('/store', [PlantController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [PlantController::class, 'edit'])->name('edit');
    Route::patch('/update/{id}', [PlantController::class, 'update'])->name('update');
    Route::delete('/destroy/{id}', [PlantController::class, 'destroy'])->name('destroy');
});

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


