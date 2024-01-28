<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\StudentController;

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
Route::get('/groups', [GroupController::class,'index'])->name('index');
Route::get('/groups/create', [GroupController::class,'create'])->name('create.group');
Route::post('/groups', [GroupController::class,'post'])->name('post.group');
Route::get('/groups/{group}/edit', [GroupController::class,'edit'])->name('edit.group');
Route::patch('/groups/{group}', [GroupController::class,'update'])->name('update.group');
Route::get('/groups/{group}/delete', [GroupController::class,'clear'])->name('clear.group');
Route::delete('/groups/{group}', [GroupController::class,'delete'])->name('delete.group');
Route::get('/groups/{group}', [GroupController::class,'group'])->name('group');



Route::get('/groups/{group}/students/create', [StudentController::class,'create'])->name('create.student');
Route::post('/groups/{group}/students', [StudentController::class,'post'])->name('post.student');
Route::get('/groups/{group}/students/{student}/edit', [StudentController::class,'edit'])->name('edit.student');
Route::patch('/groups/{group}/students/{student}', [StudentController::class,'update'])->name('update.student');
Route::get('/groups/{group}/students/{student}/delete', [StudentController::class,'clear'])->name('clear.student');
Route::delete('/groups/{group}/students/{student}', [StudentController::class,'delete'])->name('delete.student');
Route::get('/groups/{group}/students/{student}', [StudentController::class,'index'])->name('student');

