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
            'uuid' => collect([
                '7f20c224-eeb7-440a-8cec-39fbd1c0042d',
                '8fc59dba-9b3c-4240-ac7d-1e8f00703b72',
                'ecaf0855-081d-4cfa-aabe-7d0fe94f9e4a'
            ])->random()
        ];
    }
}
