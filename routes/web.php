<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

// auth
Route::middleware('isGuest')->group(function () {
    Route::get('/', [TodoController::class, 'login'])->name('login');
    Route::get('/register', [TodoController::class, 'register'])->name('register');
    Route::post('/register', [TodoController::class, 'inputRegister'])->name('register.post');
    Route::post('/login', [TodoController::class, 'auth'])->name('login.auth');
});

Route::get('/logout', [TodoController::class, 'logout'])->name('logout');
Route::get('/user', [TodoController::class, 'user'])->name('user');
Route::get('/profile', [TodoController::class, 'profile'])->name('profile');


Route::middleware('isLogin', 'CekRole:admin,user')->prefix('/todo')->name('todo.')->group(function () {
    Route::get('/', [TodoController::class, 'index'])->name('index');
    Route::get('/profile', [TodoController::class, 'profile'])->name('profile');
    Route::get('/logout', [TodoController::class, 'logout'])->name('logout');
    Route::get('/profile/upload', [TodoController::class, 'profileUpload'])->name('profileUpload');
    Route::patch('/profile/change', [TodoController::class, 'changeProfile'])->name('changeProfile');
});

// todo
Route::middleware('isLogin', 'CekRole:user')->prefix('/todo')->name('todo.')->group(function () {
    Route::get('/complated', [TodoController::class, 'complated'])->name('complated');
    Route::get('/create', [TodoController::class, 'create'])->name('create');
    Route::post('/store', [TodoController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [TodoController::class, 'edit'])->name('edit');
    Route::patch('/update/{id}', [TodoController::class, 'update'])->name('update');
    Route::get('/delete/{id}', [TodoController::class, 'destroy'])->name('delete');
    Route::patch('/complated/{id}', [TodoController::class, 'updateComplated'])->name('update-complated');
});

Route::middleware('isLogin', 'CekRole:admin')->prefix('/todo')->name('todo.')->group(function () {
    Route::get('/user', [TodoController::class, 'user'])->name('user');

});

Route::get('/error', [TodoController::class, 'error'])->name('error');
