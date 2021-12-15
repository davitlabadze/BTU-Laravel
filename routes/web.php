<?php

use App\Http\Controllers\TaskController;
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

Route::resource('tasks',TaskController::class);
Route::delete('trash/delete_all', [TrashController::class, 'delete_all'])->name('trash.delete_all');

