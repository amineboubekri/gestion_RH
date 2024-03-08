<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Echelle>
 */
class EchelleFactory extends Factory
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
            'Designation_echelle' => $this->faker->word(),
            'Date_echelle' => $this->faker->dateTime(),
            'created_at' => null,
            'updated_at' => null,
        ];
    }
}
