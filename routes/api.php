<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

Route::middleware('api')->group(function () {
    Route::get('parameter',[ApiController::class,'getParameter']);
    Route::get('tout_categorie',[ApiController::class,'listeCategories']);
});


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
