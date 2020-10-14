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
        $time = array('Barcelona', 'Real Madrid', 'Atletico de madrid', 'Bayern munich', 'Borussia Dortmund', 'Arsenal', 'Chelsea', 'Liverpool', 'United', 'City', 'Lyon', 'PSG', 'Tottenham', 'Atalanta');
        $plataforma = array('PS4', 'XONE', 'PC');
        return [
            'nome' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'idOnline' => $this->faker->unique()->userName,
            'timeEscolhido' =>$this->faker->randomElement($time),
            'cidade' =>$this->faker->city,
            'plataforma' =>$this->faker->randomElement($plataforma),
        ];
    }
}
