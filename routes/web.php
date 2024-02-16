<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoardController;
use App\Http\Controllers\CommentController;
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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/Board', [BoardController::class, 'index'])->name('board.index');
Route::post('/Board', [BoardController::class, 'store'])->name('board.store');
Route::get('/Board/edit/{id}', [BoardController::class, 'edit'])->name('board.edit');
Route::put('/Board/update/{id}', [BoardController::class, 'update'])->name('board.update');
Route::delete('/Board/destroy/{id}', [BoardController::class, 'destroy'])->name('board.destroy');

Route::post('/comment', [CommentController::class, 'store'])->name('comment.store');
Route::delete('/comment/destroy/{id}', [CommentController::class, 'destroy'])->name('comment.destroy');
