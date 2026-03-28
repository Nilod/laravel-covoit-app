<?php

namespace Database\Seeders;

use App\Models\Campuse;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CampuseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Campuse::factory()->count(5)->create();
    }
}
