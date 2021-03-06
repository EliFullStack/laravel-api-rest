<?php

namespace Database\Factories;

use App\Models\Player;
use Illuminate\Database\Eloquent\Factories\Factory;

class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'dice1' => $this->faker->numberBetween(1,6),
            'dice2' => $this->faker->numberBetween(1,6),
            'player_id' => Player::all()->random()->id

        ];
    }
}
