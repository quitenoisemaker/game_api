<?php

namespace Database\Factories;

use App\Models\Player;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlayerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Player::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //

            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'nickname' => $this->faker->userName,
            'password' => $this->faker->password,
            'last_login' => $this->faker->dateTime($max = 'now', $timezone = null)

        ];
    }
}
