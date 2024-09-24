<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AssignRolesToUsersSeeder1 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // إنشاء صلاحيات
        Permission::create(['name' => 'create project']);
        Permission::create(['name' => 'view project']);

        $admin = Role::where('name', 'Admin')->first();
        $manager = Role::where('email', 'Manager')->first();
        $teamMember1 = Role::where('email', 'Team Member')->first();
        // إنشاء أدوار

        // تعيين الصلاحيات للأدوار
        $admin->givePermissionTo(Permission::all());
        $manager->givePermissionTo(['create tasks', 'edit tasks', 'view tasks','show tasks']);
        $teamMember1->givePermissionTo('view tasks','edit tasks statues','show tasks');
    }
}
