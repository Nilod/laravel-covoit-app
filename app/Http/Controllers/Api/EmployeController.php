<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employe;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employes = Employe::all();
        return $employes;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $new_employe = $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'email' => 'required|email'
        ]);

        $Employe = Employe::create($new_employe);

        return response()->json($Employe, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Employe::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $employe = Employe::findOrFail($id);

        $updated_data = $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'email' => 'required|email'
        ]);

        $employe->update($updated_data);

        return response()->json($employe);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Employe::destroy($id);
        return response()->json(['message' => 'Employe supprimé']);
    }
}
