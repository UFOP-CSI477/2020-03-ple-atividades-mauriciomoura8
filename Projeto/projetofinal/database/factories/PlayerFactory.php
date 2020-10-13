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
            'nome' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'idOnline' => $this->faker->unique()->userName,
            'timeEscolhido' =>$this->faker->word,
            'cidade' =>$this->faker->city,
            'plataforma' =>$this->faker->word,
        ];
    }
}
