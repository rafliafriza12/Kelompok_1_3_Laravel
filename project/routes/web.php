<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TbldeskController;
use App\Http\Controllers\TbladminController;
use App\Models\Tblstudents;

Route::get('/', [TbldeskController::class, 'index'])->middleware('guest');
Route::get('/admin/login', [TbladminController::class, 'index'])->name('login')->middleware('guest');
Route::post('/admin/login/auth', [TbladminController::class, 'authenticate']);

Route::get('/admin/dashboard', [TbldeskController::class, 'dashboard'])->middleware('auth');
Route::get('/admin/manage', [TbldeskController::class, 'manage'])->middleware('auth');
Route::get('/edit-student/{studentId}', [StudentController::class, 'edit'])->middleware('auth');
Route::get('/delete-student/{studentId}', [StudentController::class, 'delete'])->middleware('auth');
Route::post('/submit-edit-student/{studentId}', [StudentController::class, 'editsubmit'])->middleware('auth');
Route::get('/admin/manage-student', [StudentController::class, 'index'])->middleware('auth');
Route::get('/admin/student-detail/{studentId}', [StudentController::class, 'detailStudent'])->middleware('auth');
Route::get('/logout', [TbladminController::class, 'logout'])->middleware('auth')->name('logout')->middleware('auth');
