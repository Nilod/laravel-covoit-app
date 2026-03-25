<?php

namespace Database\Factories;

use App\Models\Campuse;
use App\Models\Voiture;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trajet>
 */
class TrajetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date_time_depart' => $this->faker->dateTime(), 
            'date_time_arrivee' => $this->faker->dateTime(), 
            'id_campuse_depart' => Campuse::factory(), 
            'id_campuse_arrivee' => Campuse::factory(), 
            'id_voiture' => Voiture::factory()
        ];
    }
}
