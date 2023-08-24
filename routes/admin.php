<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\ProfileController;
use Illuminate\Support\Facades\Route;


/**Admin route */
Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

/** Profile route */
Route::get('profile', [ProfileController::class, 'index'])->name('profile');