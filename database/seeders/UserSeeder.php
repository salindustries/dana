<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

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
            'role_id' => Role::ADMIN,
            'email' => 'technical@sallehuddin.com',
            'password' => ('secret'),
            'picture' => 'profile/avatar-m3.jpg'
        ]);

        User::factory()->create([
            'name' => 'Auditor',
            'role_id' => Role::AUDITOR,
            'email' => 'audit@sallehuddin.com',
            'password' => ('secret'),
            'picture' => 'profile/avatar-w1.jpg'
        ]);

        User::factory()->create([
            'name' => 'Organization Admin',
            'role_id' => Role::ORG_ADMIN,
            'email' => 'org.admin@' . config('custom.organization_mail_domain'),
            'password' => ('secret'),
            'picture' => 'profile/avatar-m2.jpg'
        ]);

        User::factory()->create([
            'name' => 'Organization Auditor',
            'role_id' => Role::ORG_AUDITOR,
            'email' => 'org.audit@' . config('custom.organization_mail_domain'),
            'password' => ('secret'),
            'picture' => 'profile/avatar-w2.jpg'
        ]);

        User::factory()->create([
            'name' => 'Business Manager',
            'role_id' => Role::BIZ_MANAGER,
            'email' => 'biz.manager@' . config('custom.organization_mail_domain'),
            'password' => ('secret'),
            'picture' => 'profile/avatar-w3.jpg'
        ]);

        User::factory()->create([
            'name' => 'Business Executive',
            'role_id' => Role::BIZ_EXEC,
            'email' => 'biz.exec@' . config('custom.organization_mail_domain'),
            'password' => ('secret'),
            'picture' => 'profile/avatar-m4.jpg'
        ]);
    }
}
