<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
            [
                'name' => 'shofi',
                'email' => 'shofi@gmail.com',
                'password' => bcrypt('Dilaumami123'),
                'remember_token' => '1232312',
                'created_at' => '2021-01-01 00:00:00',
                'updated_at' => '2021-01-01 00:00:00',
                'email_verified_at' => '2021-01-01 00:00:00',
                'roles' => 'USER',
            ]
    );
    }
}
