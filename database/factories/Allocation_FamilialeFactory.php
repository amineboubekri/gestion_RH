<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Allocation_Familiale>
 */
class Allocation_FamilialeFactory extends Factory
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
            'Ref_allocation_familiale' => $this->faker->numberBetween(0, 100000000),
            'Type_allocation_familiale' => $this->faker->word(),
            'Valeur_allocation_familiale' => $this->faker->word(),
            'date_allocation' => $this->faker->dateTime(),
            'DRPP' => $this->faker->numberBetween(0, 100000000),
            'created_at' => null,
            'updated_at' => null,
        ];
    }
}
