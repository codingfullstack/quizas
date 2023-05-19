<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Quiz_questionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('quiz_questions')->insert([
            'quiz_id' => 1,
            'question' => 'Kokios rūšies yra Koala',
            'question_id' => 1,
            'A' => 'Meškėnas',
            'B' => 'Sterblinis žinduolis',
            'C' => 'Žinduolis',
            'answer' => 'B',
        ]);
        DB::table('quiz_questions')->insert([
            'quiz_id' => 1,
            'question' => 'Kokios formos yra Ožkų, avių ir aštuonkojų akių vyzdžiai?',
            'question_id' => 2,
            'A' => 'Stačiakampio formos',
            'B' => 'Apvalios formos',
            'answer' => 'A',
        ]);
        DB::table('quiz_questions')->insert([
            'quiz_id' => 1,
            'question' => 'Kuri valstybė yra pavadinta chemijos elemento vardu? Šita elementa  išvertus iš lotynų kalbos reikštų: „sidabras“',
            'question_id' => 3,
            'A' => 'Argentina',
            'B' => 'Ukraina',
            'C' => 'Danija',
            'answer' => 'A',
        ]);
        DB::table('quiz_questions')->insert([
            'quiz_id' => 1,
            'question' => 'Kur yra 85 % pasaulio augalijos?',
            'question_id' => 4,
            'A' => 'Ant žemės',
            'B' => 'Vandenynuose',
            'C' => 'Po žeme',
            'answer' => 'B',
        ]);
        DB::table('quiz_questions')->insert([
            'quiz_id' => 1,
            'question' => 'Brangiausias metalas pasaulyje yra kalifornis. Kiek kainuoja 1g kalifornio?',
            'question_id' => 5,
            'A' => 'Apie 3,2 mln',
            'B' => 'Mažiau nei 6,0 mln',
            'C' => 'Daugiau nei 6,5 mln',
            'answer' => 'C',
        ]);
    }
}
