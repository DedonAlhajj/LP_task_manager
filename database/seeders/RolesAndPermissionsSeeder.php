<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // إنشاء صلاحيات
        Permission::create(['name' => 'create tasks']);
        Permission::create(['name' => 'edit tasks']);
        Permission::create(['name' => 'show tasks']);
        Permission::create(['name' => 'edit tasks statues']);
        Permission::create(['name' => 'delete tasks']);
        Permission::create(['name' => 'view tasks']);

        // إنشاء أدوار
        $adminRole = Role::create(['name' => 'Admin']);
        $managerRole = Role::create(['name' => 'Manager']);
        $teamMemberRole = Role::create(['name' => 'Team Member']);

        // تعيين الصلاحيات للأدوار
        $adminRole->givePermissionTo(Permission::all());
        $managerRole->givePermissionTo(['create tasks', 'edit tasks', 'view tasks','show tasks']);
        $teamMemberRole->givePermissionTo('view tasks','edit tasks statues','show tasks');
    }


}
