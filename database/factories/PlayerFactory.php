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
        $name = $this->faker->default('Anonymous')->name();

        return [
            'name' => $name,
            'throws' => $this->faker->numberBetween(1, 100),
            'user_id' => User::all()->random()->id
        ];
    }
}
