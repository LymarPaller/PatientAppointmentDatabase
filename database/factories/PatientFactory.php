<?php

namespace Database\Factories;

use App\Models\Doctor;
use App\Models\Prescription;
use App\Models\Vital;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $arrayBloodType = ['A', '-A', 'AB', '-AB', 'O', '-O'];
        $arrayType = ['in patient', 'out patient'];
        $arrayStatus = ["pending", "on going", "discharged"];

        return [
            //
            "full_name" => fake()->name(),
            "date_of_birth" => fake()->dateTimeBetween("-80 years", "now"),
            "age" => fake()->numberBetween(1, 100),
            "blood_type" => $arrayBloodType[rand(0,5)],
            "mobile_number" => fake()->numberBetween(9150000000, 9280000000),
            "address" => fake()->address(),
            "email" => fake()->safeEmail(),
            "date_of_appointment" => fake()->dateTimeBetween("-1 week", "now"),
            "type" => $arrayType[rand(0,1)],
            "status" => $arrayStatus[rand(0,2)],

            'vitals_id' => Vital::factory(),
            'prescription_id' => Prescription::factory(),
            'doctors_id' => Doctor::factory(),

        ];
    }
}
