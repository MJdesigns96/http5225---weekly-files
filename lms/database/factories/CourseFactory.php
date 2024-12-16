<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //extra feature in laravel that lets us get test data for our db
            'courseName' => fake() -> words(3, true),
            'courseID' => strtoupper(fake()->bothify('???###')),
            'description' => fake() -> paragraph(),
        ];
    }
}
