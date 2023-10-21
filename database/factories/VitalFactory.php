<?php

namespace Database\Factories;

use App\Models\Doctor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vital>
 */
class VitalFactory extends Factory
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
            "date" => fake()->dateTimeBetween("-1 week", "now"),
            "details" => fake()->sentence(5),
            'doctors_id' => Doctor::factory(),
        ];
    }
}
