<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mission>
 */
class MissionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'DRPP' => $this->faker->numberBetween(0, 100000),
            'Objet_mission' => $this->faker->word(),
            'Ville_mission' => $this->faker->word(),
            'Date_debut' => $this->faker->dateTime(),
            'Date_retour' => $this->faker->dateTime(),
            'created_at' => null,
            'updated_at' => null,
        ];
    }
}
