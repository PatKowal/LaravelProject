<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\People>
 */
class PeopleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>$this->faker->name(),
            'lastname'=>$this->faker->lastName(),
            'phone'=>$this->faker->phoneNumber(),
            'address'=>$this->faker->streetAddress(),
            'city'=>$this->faker->city(),
            'country'=>$this->faker->country()
        ];
    }
}
