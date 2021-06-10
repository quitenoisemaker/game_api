<?php

namespace Database\Factories;

use App\Models\GameApi;
use Illuminate\Database\Eloquent\Factories\Factory;

class GameApiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = GameApi::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //

            'name' => $this->faker->word,
            'version' => $this->faker->numberBetween(1, 10)
        ];
    }
}
