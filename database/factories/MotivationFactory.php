<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Motivation>
 */
class MotivationFactory extends Factory
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
            'Type_motivation' => $this->faker->word(),
            'Occasion' => $this->faker->word(),
            'Date_motivation' => $this->faker->dateTime(),
            'Commentaire' => $this->faker->word(),
            'created_at' => null,
            'updated_at' => null,
        ];
    }
}
