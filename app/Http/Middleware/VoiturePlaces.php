<?php

namespace App\Http\Middleware;

use App\Models\Voiture;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VoiturePlaces
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $voiture = Voiture::find($request->route('voiture'));
        
        if (!$voiture) {
            return redirect()->back();
        }

        if ($voiture->nb_places >= 8) {
            return redirect()->back()->with('error', 'Visualisation des bus en cours');
        }

        return $next($request);
    }
}
