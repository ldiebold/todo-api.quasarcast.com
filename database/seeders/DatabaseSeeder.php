<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Todo;
use App\Models\TodoList;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Collection::times(3, function () {
            Project::factory()
                ->hasComments(rand(0, 3))
                ->has(
                    TodoList::factory(rand(0, 3))
                        ->hasComments(rand(0, 4))
                        ->has(
                            Todo::factory(rand(1, 5))
                                ->hasComments(rand(0, 6))
                        )
                )
                ->create();
        });
    }
}
