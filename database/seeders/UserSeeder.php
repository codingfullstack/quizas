<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
USE Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Justas',
            'email' => 'justinas.sadauskiu@gmail.com',
            'password' => Hash::make('123456789'),
            'is_admin'=> 1,
        ]);
        DB::table('users')->insert([
            'name' => 'Mantas',
            'email' => 'mantas@gmail.com',
            'password' => Hash::make('123456789'),
            'is_admin'=> 0,
        ]);
        DB::table('users')->insert([
            'name' => 'Romas',
            'email' => 'romas@gmail.com',
            'password' => Hash::make('123456789'),
            'is_admin'=> 0,
        ]);
        DB::table('users')->insert([
            'name' => 'Domas',
            'email' => 'domas@gmail.com',
            'password' => Hash::make('123456789'),
            'is_admin'=> 0,
        ]);
    }
}
