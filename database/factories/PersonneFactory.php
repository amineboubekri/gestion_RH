<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PersonneFactory extends Factory
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
            'DRPP' => $this->faker->numberBetween(0, 1000000),
            'Num_poste' => $this->faker->word(),
            'Affiliation_Financiere' => $this->faker->word(),
            'Nom' => $this->faker->word(),
            'Prenom' => $this->faker->word(),
            'Nom_Français' => $this->faker->word(),
            'Prenom_Français' => $this->faker->word(),
            'CIN' => $this->faker->bothify('?-#####'),
            'date_Naissance' => $this->faker->dateTime(),
            'Lieu_Naissance' => $this->faker->streetAddress(),
            'Adresse' => $this->faker->streetAddress(),
            'Telephone' => $this->faker->e164PhoneNumber(),
            'Situation_Familiale' => $this->faker->word(),
            'Nombre_enfant' => $this->faker->numberBetween(0, 20),
            'Lieu_Travail' => $this->faker->cityPrefix(),
            'date_emboche' => $this->faker->dateTime(),
            'Situation_Administrative' => $this->faker->word(),
            'date_recrutement' => $this->faker->dateTime(),
            'image' => $this->faker->word(),
            'created_at' => null,
            'updated_at' => null,
        ];
    }
}
