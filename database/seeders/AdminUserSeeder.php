<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin User',
            'email' => 'admin@admin.com',
            'password' => Hash::make('potpot99'), // Replace with a secure password
            'is_admin' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
