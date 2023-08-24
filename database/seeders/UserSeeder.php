<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Testing\Fakes\Fake;

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
                'bio' => 'bla bla bla bla',
                'role' => 'admin',
                'location' => 'Croatia',
                'phone' => '+3851234567',
                'email' => 'admin@gmail.com',
                'status' => 'active',
                'password' => bcrypt('12345678'),
            ],

            [
                'name' => 'Vendor',
                'lastname' => 'Vendor',
                'bio' => 'bla bla bla bla',
                'role' => 'vendor',
                'location' => 'Croatia',
                'phone' => '+3851234567',
                'email' => 'vendor@gmail.com',
                'status' => 'active',
                'password' => bcrypt('12345678'),
            ],

            [
                'name' => 'User',
                'lastname' => 'User',
                'bio' => 'bla bla bla bla',
                'role' => 'user',
                'location' => 'Croatia',
                'phone' => '+3851234567',
                'email' => 'user@gmail.com',
                'status' => 'active',
                'password' => bcrypt('12345678'),
            ],


        ]);
    }
}
