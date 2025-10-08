<?php

use App\Http\Controllers\GroupController;
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'index'])->name('users.index');

Route::resource('groups', GroupController::class);
Route::resource('users', UserController::class);
