<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class VotingTransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'Number of Votes' => fake()->numberBetween(100,800),
            'Brgy_id' => fake()->numberBetween(1,18),
            'School_id' => fake()->numberBetween(1,100),
            'Watcher_id' => fake()->unique()->numberBetween(1,500),
            'Precinct_id' => fake()->unique()->numberBetween(1,500),
        ];
    }
}
