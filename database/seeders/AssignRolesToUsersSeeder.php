<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AssignRolesToUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // افتراضًا أن لديك مستخدمين بالفعل
        $admin = User::where('email', 'dedon@gmail.com')->first();
        $manager = User::where('email', 'alissar37alhajj@gmail.com')->first();
        $teamMember1 = User::where('email', 'member1@gmail.com')->first();
        $teamMember2 = User::where('email', 'member2@gmail.com')->first();

        // تعيين الأدوار
        if ($admin) {
            $admin->assignRole('Admin');
        }

        if ($manager) {
            $manager->assignRole('Manager');
        }

        if ($teamMember1) {
            $teamMember1->assignRole('Team Member');
        }
        if ($teamMember2) {
            $teamMember2->assignRole('Team Member');
        }
    }
}
