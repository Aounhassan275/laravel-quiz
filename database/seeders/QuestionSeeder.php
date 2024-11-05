<?php

namespace Database\Seeders;

use App\Models\User;
use Harishdurga\LaravelQuiz\Models\Question;
use Harishdurga\LaravelQuiz\Models\QuestionOption;
use Harishdurga\LaravelQuiz\Models\Quiz;
use Harishdurga\LaravelQuiz\Models\QuizAttempt;
use Harishdurga\LaravelQuiz\Models\QuizAttemptAnswer;
use Harishdurga\LaravelQuiz\Models\QuizAuthor;
use Harishdurga\LaravelQuiz\Models\QuizQuestion;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $question = Question::create([
            'name' => 'What is an algorithm?',
            'question_type_id' => 1,
            'is_active' => true,
            'media_url' => 'url',
            'media_type' => 'image'
        ]);

        $question->topics()->attach([1, 2]);

        for($i = 0;$i < 4;$i++){
            $question_two_option_one = QuestionOption::create([
                'question_id' => $question->id,
                'name' => 'Option '.$i,
                'is_correct' => true,
                'media_type'=>'image',
                'media_url'=>'media url'
            ]);
        }
        $quiz = Quiz::create([
            'name' => 'Computer Science Quiz',
            'description' => 'Test your knowledge of computer science',
            'slug' => 'computer-science-quiz',
            'time_between_attempts' => 0, //Time in seconds between each attempt
            'total_marks' => 10,
            'pass_marks' => 6,
            'max_attempts' => 1,
            'is_published' => 1,
            'valid_from' => now(),
            'valid_upto' => now()->addDay(5),
            'media_url'=>'',
            'media_type'=>'',
            'negative_marking_settings'=>[
                'enable_negative_marks' => true,
                'negative_marking_type' => 'fixed',
                'negative_mark_value' => 0,
            ]
        ]);
        $quiz->topics()->attach([1, 2]);
        $admin = User::create(
            [
                'name' => "John Doe",
                'email' => 'author@mail.com',
                'password' => Hash::make('1234'),
            ]
        );
        QuizAuthor::create([
            'quiz_id' => $quiz->id,
            'author_id' => $admin->id,
            'author_type' => get_class($admin),
            'author_role' => 'admin',
        ]);
        $quiz->quizAuthors->first()->author; //Original User
        $quiz_question =  QuizQuestion::create([
            'quiz_id' => $quiz->id,
            'question_id' => $question->id,
            'marks' => 3,
            'order' => 1,
            'negative_marks'=>1,
            'is_optional'=>false
        ]);
        $participant = User::find(1);
        $quiz_attempt = QuizAttempt::create([
            'quiz_id' => $quiz->id,
            'participant_id' => $participant->id,
            'participant_type' => get_class($participant)
        ]);
        QuizAttemptAnswer::create(
            [
                'quiz_attempt_id' => $quiz_attempt->id,
                'quiz_question_id' => $quiz_question->id,
                'question_option_id' => 1,
            ]
        );
    }
}
