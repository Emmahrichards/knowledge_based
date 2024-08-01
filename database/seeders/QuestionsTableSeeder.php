<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Seed the questions table.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            ['question_text' => 'Where is home?', 'category' => 'General', 'is_active' => true],
            ['question_text' => 'What is the capital of France?', 'category' => 'Geography', 'is_active' => true],
            ['question_text' => 'How many continents are there?', 'category' => 'General Knowledge', 'is_active' => true],
            ['question_text' => 'Who wrote "To Kill a Mockingbird"?', 'category' => 'Literature', 'is_active' => true],
            // Add more questions as needed
        ]);
    }
}
