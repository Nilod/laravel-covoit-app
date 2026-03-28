<?php

namespace App\Http\Middleware;

use App\Models\Employe;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VoitureEmploye
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $employe = Employe::find($request->route('employe'));
        if ($employe->voitures()->count() == 0) {
            return redirect()->route('employes.addVoiture', $employe->id)->with('error', 'Cet employé n\'a pas de voiture, créez-en une.');
        }
        return $next($request);
    }
}
