<?php

namespace Database\Factories;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Conge>
 */
class CongeFactory extends Factory
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
            'type_conge' => $this->faker->word(),
            'id' => $this->faker->numberBetween(0, 100000000),
            'NomRemplacent' => $this->faker->word(),
            'nbj' => $this->faker->numberBetween(1, 30),
            'AnneeConge' => $this->faker->numberBetween(2020, 2028),
            'date_retour' => $this->faker->dateTime(),
            'date_debut' => $this->faker->dateTime(),
            'created_at' => null,
            'updated_at' => null,
        
        ];
    }
}
