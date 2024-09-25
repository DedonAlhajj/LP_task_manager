<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment_Attach>
 */
class Comment_AttachFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $noteable=[Task::class,Project::class
    ];
        return [
            
            'content'=>fake()->paragraph(),
             //'file_path'=>fake()->url(),
             'message_type'=>fake()->randomElement(['text', 'image','video','audio','file']), 
            'user_id'=>\App\Models\User::factory(),
            'comm_attach_able_id'=>fake()->numberBetween(1, 10),
            'comm_attach_able_type'=>fake()->randomElement($noteable)
        ];
    }
}
