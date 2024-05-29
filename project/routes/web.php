<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TbldeskController;
use App\Http\Controllers\TbladminController;

Route::get('/', [TbldeskController::class, 'index']);
Route::get('/admin/login', [TbladminController::class, 'index'])->name('login')->middleware('guest');
Route::post('/admin/login/auth', [TbladminController::class, 'authenticate']);


