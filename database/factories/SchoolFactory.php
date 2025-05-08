<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\School>
 */
class SchoolFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'School_name' => fake()->randomElement(['School1', 'School2', 'School3', 'dSchool4', 'School5']),
            'Brgy_id' => fake()->numberBetween(1,18),


        ];
    }



}
