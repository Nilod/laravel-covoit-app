<?php

use App\Http\Controllers\Api\EmployeController;
use App\Http\Controllers\Api\VoitureController;
use Illuminate\Support\Facades\Route;

Route::middleware('api')->group(function () {
    Route::apiResource('employes', EmployeController::class);
    Route::apiResource('voitures', VoitureController::class);
});