<?php

namespace Database\Factories;
use App\Models\Project;
use App\Models\User;


use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
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
                'details'=>fake()->text(),
                'start_date'=>fake()->date(),
                'end_date'=>fake()->date(),
                'status'=>fake()->randomElement(['InProgress', 'New','Completed']),
                'created_by'=>User::all()->random()->id,
            
        ];
    }
}
