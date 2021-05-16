<?php

use App\Http\Controllers\juniorSheet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//Route::get('/codeforces_problem',[juniorSheet::class,'getProblemsSolved']);
Route::get('/all_problems/{email}',[juniorSheet::class,'juniorSheetApi']);
Route::get('/codeforces_problem/{username}',[juniorSheet::class,'getProblemsSolved']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
