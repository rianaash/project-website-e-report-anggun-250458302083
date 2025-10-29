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
        DB::table('users')->insert(array(
            array(
                'name' => 'Admin Hj',
                'email' => '0bMlF@example.com',
                'phone' => '08123456789',
                'nik' => '123456789',
                'address' => 'Jalan Jendral Sudirman',
                'gender' => 'male',
                'role' => 'admin',
                'password' => bcrypt('password'),
            ), 
            array(
                'name' => 'geto',
                'email' => 'dfghj@example.com',
                'phone' => '08222222',
                'nik' => '22222222',
                'address' => 'Jalan Jendral Sudirman',
                'gender' => 'male',
                'role' => 'user',
                'password' => bcrypt('password'),
            )           
        ));
    }
}
