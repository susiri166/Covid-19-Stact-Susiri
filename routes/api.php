<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::prefix('/covid')->group(function(){
    Route::get('/', [CovidController::class,'index'])->name("covid");
    Route::post('/', [CovidController::class,'store'])->name("covid.store");
    Route::post('/update', [CovidController::class,'update'])->name("covid.update");
   
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
