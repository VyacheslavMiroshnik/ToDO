<?php

use App\Http\Controllers\GroupController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [GroupController::class,'index'])->name('index');

Route::prefix('groups')->group(function () {
    Route::get('/', [GroupController::class,'index'])->name('index');
    Route::get('create', [GroupController::class,'create'])->name('create.group')->middleware('can:post,group');
    Route::post('/', [GroupController::class,'post'])->name('post.group')->middleware('can:post,group');
    Route::get('{group}/edit', [GroupController::class,'edit'])->name('edit.group')->middleware('can:update,group');
    Route::patch('{group}', [GroupController::class,'update'])->name('update.group')->middleware('can:update,group');
    Route::get('{group}/delete', [GroupController::class,'clear'])->name('clear.group')->middleware('can:delete,group');
    Route::delete('{group}', [GroupController::class,'delete'])->name('delete.group')->middleware('can:delete,group');
    Route::get('{group}', [GroupController::class,'group'])->name('group');
});

Route::prefix('groups/{group}/students')->group(function () {
    Route::get('create', [StudentController::class,'create'])->name('create.student')->middleware('can:post,student');
    Route::post('/', [StudentController::class,'post'])->name('post.student')->middleware('can:post,student');
	Route::get('{student}/edit', [StudentController::class,'edit'])->name('edit.student')->middleware('can:update,student');
    Route::patch('{student}', [StudentController::class,'update'])->name('update.student')->middleware('can:update,student');
    Route::get('{student}/delete', [StudentController::class,'clear'])->name('clear.student')->middleware('can:delete,student');
    Route::delete('{student}', [StudentController::class,'delete'])->name('delete.student')->middleware('can:delete,student');
    Route::get('{student}', [StudentController::class,'index'])->name('student');
});

Auth::routes();

Route::get('/user', [\App\Http\Controllers\UserController::class, 'index'])->name('user');
