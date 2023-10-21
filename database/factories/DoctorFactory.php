<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctor>
 */
class DoctorFactory extends Factory
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
            "username" => fake()->userName(),
            "password" => fake()->password($minLength = 6, $maxLength = 12),
            "first_name" => fake()->firstName(),
            "middle_name" => fake()->lastName(),
            "last_name" => fake()->lastName(),
            "date_of_birth" => fake()->dateTimeBetween("-80 years", "now"),
            "age" => fake()->numberBetween(1, 100),
            "mobile_number" => fake()->numberBetween(9150000000, 9280000000),
            "email" => fake()->safeEmail(),
            "department" => fake()->word(),
            "address" => fake()->address(),


        ];
    }
}
