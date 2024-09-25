<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Checklist;
use App\Models\Comment_Attach;
use App\Models\Project;
use App\Models\project_user;
use App\Models\Task;
use App\Models\task_user;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RolesAndPermissionsSeeder::class,
        ]);
        User::factory()->count(10)->create();
        Project::factory()->count(10)->create();
        project_user::factory()->count(10)->create();
        Task::factory()->count(10)->create();
        task_user::factory()->count(10)->create();
        Checklist::factory()->count(10)->create();
        Comment_Attach::factory()->count(10)->create();


    }
}
