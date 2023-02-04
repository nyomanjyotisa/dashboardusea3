<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\JenisBiotaController;
use App\Http\Controllers\BiotaController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;

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
Route::group(['prefix' => 'jenis-biota', 'as' => 'jenis-biota.'], function () {
    Route::get('/', [JenisBiotaController::class,'index'])->name('index');
    Route::get('/destroy/{id}', [JenisBiotaController::class,'destroy'])->name('destroy');
    Route::get('/show{id}', [JenisBiotaController::class,'show'])->name('show');
    Route::get('/edit/{id}', [JenisBiotaController::class,'edit'])->name('edit');
    Route::get('/create', [JenisBiotaController::class,'create'])->name('create');
    Route::post('/store', [JenisBiotaController::class,'store'])->name('store');
    Route::post('/update/{id}', [JenisBiotaController::class,'update'])->name('update');
});

Route::group(['prefix' => 'biota', 'as' => 'biota.'], function () {
    Route::get('/', [BiotaController::class,'index'])->name('index');
    Route::get('/destroy/{id}', [BiotaController::class,'destroy'])->name('destroy');
    Route::get('/show{id}', [BiotaController::class,'show'])->name('show');
    Route::get('/edit/{id}', [BiotaController::class,'edit'])->name('edit');
    Route::get('/create', [BiotaController::class,'create'])->name('create');
    Route::post('/store', [BiotaController::class,'store'])->name('store');
    Route::post('/update/{id}', [BiotaController::class,'update'])->name('update');
});

Auth::routes();
//Language Translation
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');

//Update User Details
Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
});

Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
