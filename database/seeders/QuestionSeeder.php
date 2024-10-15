<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions = [
            // Web Development Questions
            ['text' => 'What does HTML stand for?', 'quiz_id' => 1],
            ['text' => 'What is the purpose of CSS?', 'quiz_id' => 1],
            ['text' => 'What does JavaScript primarily handle?', 'quiz_id' => 1],
            ['text' => 'What is the role of a web server?', 'quiz_id' => 1],
            ['text' => 'Which tag is used for the main heading?', 'quiz_id' => 1],
            ['text' => 'What does HTTP stand for?', 'quiz_id' => 1],
            ['text' => 'Which CSS property is used to change text color?', 'quiz_id' => 1],
            ['text' => 'What is a database used for?', 'quiz_id' => 1],
            ['text' => 'What does SQL stand for?', 'quiz_id' => 1],
            ['text' => 'Which of the following is a NoSQL database?', 'quiz_id' => 1],

            // Requirements Engineering Questions
            ['text' => 'What is a functional requirement?', 'quiz_id' => 2],
            ['text' => 'What is a non-functional requirement?', 'quiz_id' => 2],
            ['text' => '', 'quiz_id' => 2],
            ['text' => '', 'quiz_id' => 2],
            ['text' => '', 'quiz_id' => 2],
            ['text' => '', 'quiz_id' => 2],
            ['text' => '', 'quiz_id' => 2],
            ['text' => '', 'quiz_id' => 2],
            ['text' => '', 'quiz_id' => 2],
            ['text' => '', 'quiz_id' => 2],

            // Software Design Questions
            ['text' => '', 'quiz_id' => 3],
            ['text' => '', 'quiz_id' => 3],
            ['text' => '', 'quiz_id' => 3],
            ['text' => '', 'quiz_id' => 3],
            ['text' => '', 'quiz_id' => 3],
            ['text' => '', 'quiz_id' => 3],
            ['text' => '', 'quiz_id' => 3],
            ['text' => '', 'quiz_id' => 3],
            ['text' => '', 'quiz_id' => 3],
            ['text' => '', 'quiz_id' => 3],

            // Software Project Management Questions
            ['text' => '', 'quiz_id' => 4],
            ['text' => '', 'quiz_id' => 4],
            ['text' => '', 'quiz_id' => 4],
            ['text' => '', 'quiz_id' => 4],
            ['text' => '', 'quiz_id' => 4],
            ['text' => '', 'quiz_id' => 4],
            ['text' => '', 'quiz_id' => 4],
            ['text' => '', 'quiz_id' => 4],
            ['text' => '', 'quiz_id' => 4],
            ['text' => '', 'quiz_id' => 4],

            // Software Testing and Analysis Questions
            ['text' => '', 'quiz_id' => 5],
            ['text' => '', 'quiz_id' => 5],
            ['text' => '', 'quiz_id' => 5],
            ['text' => '', 'quiz_id' => 5],
            ['text' => '', 'quiz_id' => 5],
            ['text' => '', 'quiz_id' => 5],
            ['text' => '', 'quiz_id' => 5],
            ['text' => '', 'quiz_id' => 5],
            ['text' => '', 'quiz_id' => 5],
            ['text' => '', 'quiz_id' => 5],

            // Software Development Workshop Questions
            ['text' => '', 'quiz_id' => 6],
            ['text' => '', 'quiz_id' => 6],
            ['text' => '', 'quiz_id' => 6],
            ['text' => '', 'quiz_id' => 6],
            ['text' => '', 'quiz_id' => 6],
            ['text' => '', 'quiz_id' => 6],
            ['text' => '', 'quiz_id' => 6],
            ['text' => '', 'quiz_id' => 6],
            ['text' => '', 'quiz_id' => 6],
            ['text' => '', 'quiz_id' => 6],

            // Compiler Development Questions
            ['text' => '', 'quiz_id' => 7],
            ['text' => '', 'quiz_id' => 7],
            ['text' => '', 'quiz_id' => 7],
            ['text' => '', 'quiz_id' => 7],
            ['text' => '', 'quiz_id' => 7],
            ['text' => '', 'quiz_id' => 7],
            ['text' => '', 'quiz_id' => 7],
            ['text' => '', 'quiz_id' => 7],
            ['text' => '', 'quiz_id' => 7],
            ['text' => '', 'quiz_id' => 7],

            // Formal Methods Questions
            ['text' => '', 'quiz_id' => 8],
            ['text' => '', 'quiz_id' => 8],
            ['text' => '', 'quiz_id' => 8],
            ['text' => '', 'quiz_id' => 8],
            ['text' => '', 'quiz_id' => 8],
            ['text' => '', 'quiz_id' => 8],
            ['text' => '', 'quiz_id' => 8],
            ['text' => '', 'quiz_id' => 8],
            ['text' => '', 'quiz_id' => 8],
            ['text' => '', 'quiz_id' => 8],

            // Data Mining Questions
            ['text' => '', 'quiz_id' => 9],
            ['text' => '', 'quiz_id' => 9],
            ['text' => '', 'quiz_id' => 9],
            ['text' => '', 'quiz_id' => 9],
            ['text' => '', 'quiz_id' => 9],
            ['text' => '', 'quiz_id' => 9],
            ['text' => '', 'quiz_id' => 9],
            ['text' => '', 'quiz_id' => 9],
            ['text' => '', 'quiz_id' => 9],
            ['text' => '', 'quiz_id' => 9],
        ];

        foreach ($questions as $question) {
            Question::create($question);
        }
    }
}
