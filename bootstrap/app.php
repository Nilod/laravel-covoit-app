<?php

use App\Models\Employe;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\VoitureEmploye;
use App\Http\Middleware\CampusEmploye;
use App\Http\Middleware\VoiturePlaces;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->alias([
            'employe.voitures' => VoitureEmploye::class,
            'employe.campuses' => CampusEmploye::class,
            'voiture.places' => VoiturePlaces::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
