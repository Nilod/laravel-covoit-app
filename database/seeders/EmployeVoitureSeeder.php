<?php

namespace Database\Seeders;

use App\Models\Employe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Voiture;

class EmployeVoitureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employe::factory()->count(10)->create();
        foreach (Employe::all() as $employe) {
            Voiture::factory()->count(rand(0, 2))->create([
                'id_employe' => $employe->id
            ]);
        }
    }
}
