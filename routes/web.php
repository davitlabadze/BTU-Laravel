<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\TrashController;
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

Route::resource('/posts', PostController::class)->except('show','create');

Route::get('trash', [TrashController::class, 'index'])->name('trash.index');
Route::delete('trash/{id}', [TrashController::class, 'delete'])->name('trash.delete');
Route::get('trash/restore/one/{id}', [TrashController::class, 'restore'])->name('trash.restore');
Route::get('trash/restore_all', [TrashController::class, 'restore_all'])->name('trash.restore_all');

