<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Watchers>
 */
class WatchersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'FirstName' => fake()->unique()->firstName(),
            'LastName' => fake()->lastName(),
            'Brgy_id' => fake()->numberBetween(1,18),
            'School_id' => fake()->numberBetween(1,500),
            'Precinct_id' => fake()->unique()->numberBetween(1,500),
        ];
    }
}
