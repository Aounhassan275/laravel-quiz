<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Harishdurga\LaravelQuiz\Database\Seeders\QuestionTypeSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);        
        $this->call(QuestionTypeSeeder::class);        
        $this->call(TopicSeeder::class);        
        $this->call(QuestionSeeder::class);        
    }
}
