<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'Admin',
            'role_id' => 1,
            'email' => 'admin@material.com',
            'password' => ('secret'),
            'picture' => 'profile/avatar-m3.jpg'
        ]);

        User::factory()->create([
            'name' => 'Creator',
            'role_id' => 2,
            'email' => 'creator@material.com',
            'password' => ('secret'),
            'picture' => 'profile/avatar-w1.jpg'
        ]);

        User::factory()->create([
            'name' => 'Member',
            'role_id' => 3,
            'email' => 'member@material.com',
            'password' => ('secret'),
            'picture' => 'profile/avatar-w2.jpg'
        ]);
    }
}
