<?php

namespace Database\Factories;

use App\Models\TodoList;
use Illuminate\Database\Eloquent\Factories\Factory;

class TodoListFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TodoList::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'label' => $this->faker->word(),
            'color' => $this->faker->randomElement(['red', 'orange', 'blue-4', 'green-5', 'brown-6']),
            'icon' => $this->faker->randomElement(['mdi-bookmark', 'mdi-fish', 'mdi-shopping', 'mdi-hammer']),
            'ip' => collect([
                '123.123.123.123',
                '222.222.222.222',
                '777.888.999'
            ])->random()
        ];
    }
}
