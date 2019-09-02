<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@integer.com',
            'email_verified_at' => now(),
            'password' => bcrypt('admin_integer'), // admin_integer
            'remember_token' => Str::random(10),
        ]);
    }
}
