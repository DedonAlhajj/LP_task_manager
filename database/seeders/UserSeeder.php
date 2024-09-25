<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            ['name' => 'alissar alhajj', 'email' => 'alissar37alhajj@gmail.com', 'password' => bcrypt('12345678')],
            ['name' => 'Dedon', 'email' => 'dedon@gmail.com', 'password' => bcrypt('12345678')],
            ['name' => 'member 1', 'email' => 'member1@gmail.com', 'password' => bcrypt('12345678')],
            ['name' => 'member 2', 'email' => 'member2@gmail.com', 'password' => bcrypt('12345678')],
        ]);
    }
}
