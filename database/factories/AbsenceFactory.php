<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Absence>
 */
class AbsenceFactory extends Factory
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
            'Ref_absence' => $this->faker->numberBetween(0,10000000),
            'DRPP' => $this->faker->numberBetween(0,100000),
            'justification' => $this->faker->word(),
            'cause' => $this->faker->word(),
            'commentaire' => $this->faker->word(),
            'date_retour' => $this->faker->dateTime(),
            'date_absence' => $this->faker->dateTime(),
            'created_at' => null,
            'updated_at' => null,
        ];
    }
}
