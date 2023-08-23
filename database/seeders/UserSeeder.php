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
            [
                'name' => 'Admin',
                'lastname' => 'Admin',
                'role' => 'admin',
                'email' => 'admin@gmail.com',
                'status' => 'active',
                'password' => bcrypt('12345678'),
            ],

            [
                'name' => 'Vendor',
                'lastname' => 'Vendor',
                'role' => 'vendor',
                'email' => 'vendor@gmail.com',
                'status' => 'active',
                'password' => bcrypt('12345678'),
            ],

            [
                'name' => 'User',
                'lastname' => 'User',
                'role' => 'user',
                'email' => 'user@gmail.com',
                'status' => 'active',
                'password' => bcrypt('12345678'),
            ],


        ]);
    }
}
