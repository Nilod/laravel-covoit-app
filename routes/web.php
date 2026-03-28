<?php

use App\Http\Controllers\EmployeController;
use App\Http\Controllers\VoitureController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/employes', [EmployeController::class, 'index'])->name('employes.index');
Route::get('/employes/{employe}', [EmployeController::class, 'show'])->middleware('employe.voitures')->middleware('employe.campuses')->name('employes.show');
Route::get('/employes/{employe}/addVoiture', [EmployeController::class, 'addVoiture'])->name('employes.addVoiture');
//hyprctl dispatch splitratio 0.3Route::post('/employe', [EmployeController::class, 'store'])->name('employe.store');

Route::resource('voitures', VoitureController::class)->except('show');
Route::get('voitures/{voiture}', [VoitureController::class, 'show'])->middleware('voiture.places')->name('voitures.show');