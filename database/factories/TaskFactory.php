<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {



        return [

            'name'=>fake()->name(),
            'project_id'=>\App\Models\Project::factory(),
            'description'=>fake()->text(),
            'start_date'=>fake()->date(),
            'end_date'=>fake()->date(),
            'status'=>fake()->randomElement(['InProgress', 'New','Completed']),
        ];
    }
}
