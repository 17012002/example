<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserData>
 */
class UserDataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->name();
        $gender = $this->faker->randomElement(['male', 'female']);
        
        return [
            'name' => $name,
            'password' => $this->faker->password(),
            'gender' => $gender,
            'subscriptions' => $this->faker->numberBetween(1,26),
            'date_of_the_creation_of_the_account' => $this->faker->dateTimeThisDecade($max = 'now', $timezone = null),
        ];
    }
}

