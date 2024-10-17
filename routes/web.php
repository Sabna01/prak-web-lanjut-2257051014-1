<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/user/create', function () {return view('create_user');});
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/profile/upload', [ProfileController::class, 'uploadProfilePicture'])->name('upload.profile.picture');
//Route::post('/profile/upload', [ProfileController::class, 'uploadProfilePicture'])->name('upload.profile.picture');

Route::get('/user', [UserController::class, 'index']);
Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::resource('users', UserController::class);
Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
Route::delete('/user/delete/{id}', [UserController::class, 'destroy'])->name('users.destroy');
Route::get('/show/{id}', [UserController::class, 'show'])->name('users.show');
// routes/web.php
Route::get('/user/{id}', [UserController::class, 'show'])->name('user.show');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
