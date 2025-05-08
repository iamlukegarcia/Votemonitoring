<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Precinct>
 */
class PrecinctFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'PrecinctCode' => fake()->unique()->numerify('precinct-####'),
            'Brgy_id' => fake()->numberBetween(1,18),
            'School_id' => fake()->numberBetween(11,70),

        ];
    }
}
