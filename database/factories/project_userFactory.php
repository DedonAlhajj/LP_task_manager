<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\project_user>
 */
class project_userFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'project_id'=>\App\Models\Project::factory(),
            'user_id'=>\App\Models\User::factory(),
            'status'=>fake()->randomElement( ['approved','disapproved','removed']),  
              ];
    }

}
