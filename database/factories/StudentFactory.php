<?php

namespace Database\Factories;

use App\Models\Student;
use App\Utility\ProjectConstants;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'code' => rand(111111, 999999),
            'name' => $this->faker->name,
            'type' => array_rand(ProjectConstants::$studentTypes),
            'dob' => $this->faker->dateTimeBetween('-30 years', '-10 years')->format('Y-m-d'),
            'gender' => array_rand(ProjectConstants::$genders),
            'blood_group' => array_rand(ProjectConstants::$bloodGroups),
            'suborno_card_no' => $this->faker->randomDigitNotNull(),
            'nid' => rand(11111111111, 99999999999999999),
            'present_address' => $this->faker->address,
            'permanent_address' => $this->faker->address,
        ];
    }

    public function configure(): StudentFactory
    {
        return $this->afterCreating(function (Student $obj) {
            $parentInfo = [
                'father_name' => $this->faker->name,
                'father_email' => $this->faker->unique()->email,
                'father_number' => $this->faker->phoneNumber,
                'mother_name' => $this->faker->name,
                'mother_email' => $this->faker->unique()->email,
                'mother_number' => $this->faker->phoneNumber,
            ];

            $obj->parentDetail()->create($parentInfo);
        });
    }
}
