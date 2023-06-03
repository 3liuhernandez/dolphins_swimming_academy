<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_admins')->insert([
            "username" => "admin@gmail.com",
            "password" => bcrypt("admin"),
        ]);

        DB::table('users')->insert([
            "name" => "admin",
            "username" => "admin",
            "email" => "admin@gmail.com",
            "password" => bcrypt("admin"),
        ]);
    }
}
