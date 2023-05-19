<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('quizzes')->insert([
            'user_id' => 1,
            'name' => 'Įdomūs faktai',
            'description' => 'Trumpas 5 klausimų klausimynas Lietuvių kalba',
            'public' => 1,
        ]);
    }
}
