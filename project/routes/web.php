<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TbldeskController;
use App\Http\Controllers\TbladminController;
use App\Http\Controllers\ReportController;

Route::get('/', [TbldeskController::class, 'index']);
Route::get('/admin/login', [TbladminController::class, 'index'])->name('login')->middleware('guest');
Route::post('/admin/login/auth', [TbladminController::class, 'authenticate']);

Route::delete('/admin/desk/delete/{id}', [TbldeskController::class, 'deleteDesk'])->middleware('auth');
Route::put('/admin/desk/edit/{id}', [TbldeskController::class, 'editDesk'])->middleware('auth');
Route::get('/admin/desk/{id}', [TbldeskController::class, 'editDeskPage'])->middleware('auth');
Route::get('/admin/dashboard', [TbldeskController::class, 'dashboard']);
Route::get('/admin/manage', [TbldeskController::class, 'manage']);
Route::get('/logout', [TbladminController::class, 'logout'])->middleware('auth')->name('logout');

Route::get('/admin/report', [ReportController::class, 'index'])->middleware('auth');
Route::post('/admin/report/list', [ReportController::class, 'reportList'])->middleware('auth');




