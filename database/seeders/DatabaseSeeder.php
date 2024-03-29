<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            QuizSeeder::class,
            Quiz_questionSeeder::class,
            CategorySeeder::class,
            Category_quizSeeder::class,
            BlogSeeder::class,
            CommentSeeder::class,
        ]);
    }
}
