<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        DB::table('users')->insert([
                'name' => 'siam',
                'email' => "siam@dev.com",
                'password' => Hash::make('12345678'),
                'role' => 'admin',
                'image' => 'admin.png'
        ]);
    }
}
