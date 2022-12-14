<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\haloController;
use App\Http\Controllers\SiswaController;

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

 Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
     return $request->user();
});


Route::get("helo", function(){
    $data = ["me" => "ganteng"];

    return $data;
});

Route::resource('halocontroller',haloController::class);
Route::resource('siswacontroller',SiswaController::class);