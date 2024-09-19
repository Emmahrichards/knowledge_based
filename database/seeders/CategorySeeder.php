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
            ['name' => 'contact',  'created_at' => now(), 'updated_at' => now()],
            ['name' => 'customer',  'created_at' => now(), 'updated_at' => now()],
            ['name' => 'application',  'created_at' => now(), 'updated_at' => now()],
            ['name' => 'bcc', 'created_at' => now(), 'updated_at' => now()],
            // Add more answers as needed
        ]);
    }
}
