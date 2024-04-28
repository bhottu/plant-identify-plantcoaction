<?php


use App\Http\Controllers\PlantIdentificationController;

Route::get('/', [PlantIdentificationController::class, 'index']);
Route::post('/identify', [PlantIdentificationController::class, 'identify']);
