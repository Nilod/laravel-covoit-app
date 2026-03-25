<?php

use App\Http\Controllers\EmployeController;
use App\Http\Controllers\VoitureController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('employes', EmployeController::class);
Route::get('/employes', [EmployeController::class, 'index'])->name('employes.index');
//hyprctl dispatch splitratio 0.3Route::post('/employe', [EmployeController::class, 'store'])->name('employe.store');

Route::resource('voitures', VoitureController::class);