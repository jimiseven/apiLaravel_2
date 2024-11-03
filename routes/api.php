<?php

use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\InformeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::apiResource('estudiantes', EstudianteController::class);
Route::apiResource('informes', InformeController::class);
