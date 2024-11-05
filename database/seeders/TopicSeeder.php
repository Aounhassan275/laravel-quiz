<?php

namespace Database\Seeders;

use Harishdurga\LaravelQuiz\Models\Topic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $computer_science = Topic::create([
            'name' => 'Computer Science',
            'slug' => 'computer-science',
        ]);
        $algorithms = Topic::create([
            'name' => 'Algorithms',
            'slug' => 'algorithms'
        ]);
        $computer_science->children()->save($algorithms);
    }
}
