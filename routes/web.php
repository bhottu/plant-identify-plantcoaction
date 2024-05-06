<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlantIdentificationController;

Route::post('/identify-plant', [PlantIdentificationController::class, 'identifyPlant']);