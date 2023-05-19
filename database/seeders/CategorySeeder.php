<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'name' => 'Gamtos mokslai',
        ]);
        DB::table('categories')->insert([
            'name' => 'Menas',
        ]);
        DB::table('categories')->insert([
            'name' => 'Buitis',
        ]);
        DB::table('categories')->insert([
            'name' => 'Klasika',
        ]);
    }
}
