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
            ['question_id' => 'contact', 'answer_text' => 'I live in Nairobi', 'created_at' => now(), 'updated_at' => now()],
            ['question_id' => 'customer', 'answer_text' => 'Paris', 'created_at' => now(), 'updated_at' => now()],
            ['question_id' => 'application', 'answer_text' => 'Seven', 'created_at' => now(), 'updated_at' => now()],
            ['question_id' => 'bcc', 'answer_text' => 'Harper Lee', 'created_at' => now(), 'updated_at' => now()],
            // Add more answers as needed
        ]);
    }
}

