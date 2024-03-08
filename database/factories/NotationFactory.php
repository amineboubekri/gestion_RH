<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Notation>
 */
class NotationFactory extends Factory
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
            'Note_appliquee' => $this->faker->randomFloat(1, 10, 20),
            'Note_rentabilite' => $this->faker->randomFloat(1, 10, 20),
            'Note_capacite' => $this->faker->randomFloat(1, 10, 20),
            'Note_comportement_professionnel' => $this->faker->randomFloat(1, 10, 20),
            'Note_recherche' => $this->faker->randomFloat(1, 10, 20),
            'Mention' => $this->faker->word(),
            'Commentaire' => $this->faker->word(),
            'Annee'=>$this->faker->year(),
            'DRPP' => $this->faker->numberBetween(0,10000),
            'created_at' => null,
            'updated_at' => null,
        ];
    }
}
