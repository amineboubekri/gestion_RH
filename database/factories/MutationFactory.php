<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mutation>
 */
class MutationFactory extends Factory
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
            'ville_Mutation' => $this->faker->word(),
            'Ref_Mutation' => $this->faker->numberBetween(0, 100000000),
            'DRPP' => $this->faker->numberBetween(0, 1000000),
            'lieu_Travail' => $this->faker->word(),
            'date_mutation' => $this->faker->dateTime(),
            'created_at' => null,
            'updated_at' => null,
        ];
    }
}
