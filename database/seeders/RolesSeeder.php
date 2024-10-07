<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'SuperAdmin',
            'description' => 'System Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('roles')->insert([
            'name' => 'Auditor',
            'description' => 'System Auditor',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('roles')->insert([
            'name' => 'OrgAdmin',
            'description' => 'Organization Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('roles')->insert([
            'name' => 'OrgAuditor',
            'description' => 'Organization Auditor',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('roles')->insert([
            'name' => 'BusinessManager',
            'description' => 'Business Manager',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('roles')->insert([
            'name' => 'BusinessExec',
            'description' => 'Business Executive',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
