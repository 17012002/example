<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BFFid>
 */
class BFFidFactory extends Factory
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
            'bff_bracelet_id' => $this->faker->bankAccountNumber(),
            'name' => $name,
            'password' => $this->faker->password(),
            'gender' => $gender,
            'date_of_the_creation_of_the_account' => $this->faker->dateTimeThisDecade($max = 'now', $timezone = null),
        ];
    }
}
