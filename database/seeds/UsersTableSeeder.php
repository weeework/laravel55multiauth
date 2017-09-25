<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            'name' => 'User',
            'email' => 'user@mail.com',
            'password' => bcrypt('password')
        ];

        $admin = [
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('password')
        ];

        DB::table('users')->insert($user);
        DB::table('admins')->insert($admin);
    }
}
