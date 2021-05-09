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
            'uuid' => collect([
                '7f20c224-eeb7-440a-8cec-39fbd1c0042d',
                '8fc59dba-9b3c-4240-ac7d-1e8f00703b72',
                'ecaf0855-081d-4cfa-aabe-7d0fe94f9e4a'
            ])->random()
        ];
    }
}
