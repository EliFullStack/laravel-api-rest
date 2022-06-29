<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlayerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->name();
        $user_id = $this->faker->unique()->numberBetween(1, User::count());

        return [
            'name' => $name,
            'throws' => $this->faker->numberBetween(1, 100),
            'user_id' => $user_id
        ];
    }
}
