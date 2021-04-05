<?php

use App\Http\Controllers\ProblemController;
use App\Http\Controllers\UserController;
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



Auth::routes();

Route::get('/', [ProblemController::class,'home'])->name('home');
Route::get('/user/edit', [UserController::class,'edit'])->name('user.edit');
Route::patch('/user', [UserController::class,'update'])->name('user.update');


Route::get('/calender',[ProblemController::class,'calender'])->name('calender');
Route::get('/problem/create',[ProblemController::class,'create'])->name('create');
Route::post('/problem',[ProblemController::class,'store']);
Route::get('/problem/list',[ProblemController::class,'list']);
Route::get('/problem/{problem}/edit',[ProblemController::class,'edit']);
Route::patch('/problem/{problem}',[ProblemController::class,'update']);
Route::get('/problem/{problem}',[ProblemController::class,'show']);
Route::get('/date/{date}',[ProblemController::class,'show_with_date'])->name('date');

