<?php

use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\ProfileController;
use Illuminate\Support\Facades\Route;


/**Admin route */
Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

/** Profile route */
Route::get('profile', [ProfileController::class, 'index'])->name('profile');

/**Admin profile CRUD */
Route::get('admin/edit', [AdminProfileController::class, 'edit'])->name('edit');
Route::patch('admin/update', [AdminProfileController::class, 'update'])->name('update');
Route::delete('admin/delete', [ProfileController::class, 'destroy'])->name('destroy');
