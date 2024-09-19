<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Call the AnswersTableSeeder
        //$this->call(AnswersTableSeeder::class);
        $this->call(CategorySeeder::class);
        // Create a single user with specific attributes
        /*User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/

        // If you want to create multiple users, you can use the following line instead
        // User::factory(10)->create();
    }
}
