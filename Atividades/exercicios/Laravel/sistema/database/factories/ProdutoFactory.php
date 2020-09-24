<?php

namespace Database\Factories;

use App\Models\Produto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProdutoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Produto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->word,
            'um' => $this->faker->randomElement($array= array('pç', 'kg', 'l', 'm')),
            'qtd_estoque' => $this->faker->numberBetween(0, 1000)
        ];
    }
}
