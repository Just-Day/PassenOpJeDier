<?php

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


Route::middleware(['auth', 'age'])->group(function(){
    Route::get('/pet/create', [App\Http\Controllers\PetController::class, 'create']);
    Route::post('/pet', [App\Http\Controllers\PetController::class, 'store']);
    Route::get('/house/create', [App\Http\Controllers\HousesController::class, 'create']);
    Route::post('/house', [App\Http\Controllers\HousesController::class, 'store']);
    Route::get('/pet/{id}/review', [App\Http\Controllers\ReviewsController::class, 'show']);
    Route::post('/pet/{id}/review', [App\Http\Controllers\ReviewsController::class, 'store']);
    Route::get('/house/{id}/review', [App\Http\Controllers\ReviewsHouseController::class, 'show']);
    Route::post('/house/{id}/review', [App\Http\Controllers\ReviewsHouseController::class, 'store']);
});

Route::middleware(['auth', 'admin'])->group(function(){
    Route::get('/users', [App\Http\Controllers\UsersController::class, 'index']);
    Route::get('/users/{id}', [App\Http\Controllers\UsersController::class, 'show']);
    Route::post('/users/{id}', [App\Http\Controllers\UsersController::class, 'store']);
    Route::delete('/users/{id}', [App\Http\Controllers\UsersController::class, 'delete']);
});

Route::middleware(['auth'])->group(function(){
    Route::get('/pet', [App\Http\Controllers\PetController::class, 'index']);
    Route::get('/pet/{id}', [App\Http\Controllers\PetController::class, 'show']);
    Route::get('/house', [App\Http\Controllers\HousesController::class, 'index']);
    Route::get('/house/{id}', [App\Http\Controllers\HousesController::class, 'show']);
});

Route::get('/', [App\Http\Controllers\MainController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
