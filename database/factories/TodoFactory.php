<?php

namespace Database\Factories;

use App\Models\Todo;
use Illuminate\Database\Eloquent\Factories\Factory;

class TodoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Todo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'label' => $this->faker->words($nb = 4, $asText = true),
            'complete' => $this->faker->boolean($changeOfGettingTrue = 80),
            'ip' => collect([
                '123.123.123.123',
                '222.222.222.222',
                '777.888.999'
            ])->random()
        ];
    }
}
