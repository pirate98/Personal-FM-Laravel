<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AccountFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->name,
            'account_number' => fake()->numerify('04#########'),
        ];
    }
}
