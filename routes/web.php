<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', [ProfileController::class, 'profile']);
Route::get('/profile/{nama}',[ProfileController::class, 'profile']);
Route::get('/profile/{nama}/{kelas}/{npm}',[ProfileController::class, 'profile']);
Route::get('/user/profile', [UserController::class,'profile']);
Route::get('/user/create', [UserController::class,'create']);
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
Route::get('/user/list', [UserController::class, 'index'])->name('user.index');
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/show/{id}', [UserController::class, 'show'])->name('user.show');
Route::get('/user/{id}', [UserController::class, 'show'])->name('user.show');
Route::resource('users', UserController::class);
Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
Route::delete('/user/delete/{id}', [UserController::class, 'destroy'])->name('users.destroy');
Route::get('/user', [UserController::class, 'index'])->name('user.list');


Route::get('/show/{id}', [UserController::class, 'show'])->name('user.show');
Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');
Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::get('/user', [UserController::class, 'index'])->name('user.list');
Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');