<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnswersTableSeeder extends Seeder
{
    /**
     * Seed the answers table.
     *
     * @return void
     */
    public function run()
    {
        DB::table('answers')->insert([
            ['question_id' => 1, 'answer_text' => 'I live in Nairobi', 'created_at' => now(), 'updated_at' => now()],
            ['question_id' => 2, 'answer_text' => 'Paris', 'created_at' => now(), 'updated_at' => now()],
            ['question_id' => 3, 'answer_text' => 'Seven', 'created_at' => now(), 'updated_at' => now()],
            ['question_id' => 4, 'answer_text' => 'Harper Lee', 'created_at' => now(), 'updated_at' => now()],
            // Add more answers as needed
        ]);
    }
}

