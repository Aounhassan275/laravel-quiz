<?php

namespace App\Http\Controllers;

use Harishdurga\LaravelQuiz\Models\QuizAttempt;
use Illuminate\Http\Request;

class TestingController extends Controller
{
    public function calculateScore(){
        $quiz_attempt = QuizAttempt::first();
        return "Calculated Score For a Quiz: " .$quiz_attempt->calculate_score();
    }
}
