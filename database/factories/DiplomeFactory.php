<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Diplome>
 */
class DiplomeFactory extends Factory
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
            'Ref_diplome' => $this->faker->numberBetween(0, 100000000),
            'Nom_diplome' => $this->faker->word(),
            'Specialite' => $this->faker->word(),
            'Date_obtention' => $this->faker->dateTime(),
            'Ecole' => $this->faker->word(),
            'Ville_diplome' => $this->faker->word(),
            'DRPP' => $this->faker->numberBetween(0, 100000),
            'created_at' => null,
            'updated_at' => null,
        ];
    }
}
