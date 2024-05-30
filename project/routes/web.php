<?php

use App\Http\Controllers\ManageAssignController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TbldeskController;
use App\Http\Controllers\TbladminController;
use App\Models\Tblstudents;
use App\Http\Controllers\ReportController;

Route::get('/', [TbldeskController::class, 'index'])->middleware('guest');
Route::get('/admin/login', [TbladminController::class, 'index'])->name('login')->middleware('guest');
Route::post('/admin/login/auth', [TbladminController::class, 'authenticate']);
Route::get('/admin/dashboard', [TbldeskController::class, 'dashboard'])->middleware('auth');
Route::get('/admin/manage', [TbldeskController::class, 'manage'])->middleware('auth');
Route::post('/create-student', [StudentController::class, 'createStudentSubmit'])->middleware('auth');
Route::get('/admin/create-student', [StudentController::class, 'createStudent'])->middleware('auth');
Route::get('/edit-student/{studentId}', [StudentController::class, 'edit'])->middleware('auth');
Route::get('/delete-student/{studentId}', [StudentController::class, 'delete'])->middleware('auth');
Route::post('/submit-edit-student/{studentId}', [StudentController::class, 'editsubmit'])->middleware('auth');
Route::get('/admin/manage-student', [StudentController::class, 'index'])->middleware('auth');
Route::get('/admin/student-detail/{studentId}', [StudentController::class, 'detailStudent'])->middleware('auth');
Route::get('/logout', [TbladminController::class, 'logout'])->middleware('auth')->name('logout')->middleware('auth');
Route::delete('/admin/desk/delete/{id}', [TbldeskController::class, 'deleteDesk'])->middleware('auth');
Route::put('/admin/desk/edit/{id}', [TbldeskController::class, 'editDesk'])->middleware('auth');
Route::get('/admin/desk/{id}', [TbldeskController::class, 'editDeskPage'])->middleware('auth');
Route::get('/admin/dashboard', [TbldeskController::class, 'dashboard']);
Route::get('/admin/manage', [TbldeskController::class, 'manage']);
Route::get('/logout', [TbladminController::class, 'logout'])->middleware('auth')->name('logout');
Route::get('/admin/report', [ReportController::class, 'index'])->middleware('auth');
Route::post('/admin/report/list', [ReportController::class, 'reportList'])->middleware('auth');
Route::post('/unassign/{studentId}', [StudentController::class, 'unassign'])->middleware('auth');
Route::post('/assign/{studentId}', [StudentController::class, 'assign'])->middleware('auth');
Route::get('/admin/assign-unassign', [ManageAssignController::class, 'index'])->middleware('auth');





