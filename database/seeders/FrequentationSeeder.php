<?php

namespace Database\Seeders;

use App\Models\Employe;
use App\Models\Campuse;
use App\Models\Frequentation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FrequentationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employes = Employe::all();
        $campuses = Campuse::all();

        if ($campuses->isEmpty() || $employes->isEmpty()) {
            return;
        }

        foreach ($employes as $employe) {
            $nbCampuses = rand(0, min(3, $campuses->count()));
            
            if ($nbCampuses === 0) {
                continue;
            }

            $selectedCampuses = $campuses->random($nbCampuses);

            foreach ($selectedCampuses as $campus) {
                Frequentation::firstOrCreate(
                    [
                        'id_employe' => $employe->id,
                        'id_campuse' => $campus->id
                    ]
                );
            }
        }
    }
}
