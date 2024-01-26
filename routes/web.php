<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GroupController;

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
Route::get('/groups/create', [GroupController::class,'index'])->name('create-group');
Route::post('/groups', [GroupController::class,'index'])->name('index');
Route::get('/groups/{group}', [GroupController::class,'group'])->name('group');
Route::get('/groups/{group}/students/create', [GroupController::class,'index'])->name('index');
Route::post('/groups/{group}/students', [GroupController::class,'index'])->name('index');
Route::get('/groups/{group}/students/{student}', [\App\Http\Controllers\StudentController::class,'index'])->name('student');

