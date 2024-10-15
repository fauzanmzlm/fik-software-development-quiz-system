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
            // Web Development Questions [ID 1-5]
            ['text' => 'What does HTML stand for?', 'quiz_id' => 1],
            ['text' => 'What is the purpose of CSS?', 'quiz_id' => 1],
            ['text' => 'What does JavaScript primarily handle?', 'quiz_id' => 1],
            ['text' => 'What is the role of a web server?', 'quiz_id' => 1],
            ['text' => 'Which tag is used for the main heading?', 'quiz_id' => 1],

            // Requirements Engineering Questions  [ID 6-10]
            ['text' => 'What is a functional requirement?', 'quiz_id' => 2],
            ['text' => 'What is a non-functional requirement?', 'quiz_id' => 2],
            ['text' => '', 'quiz_id' => 2],
            ['text' => '', 'quiz_id' => 2],
            ['text' => '', 'quiz_id' => 2],

            // Software Design Questions  [ID 11-15]
            ['text' => 'What is the primary goal of software design?', 'quiz_id' => 3],
            ['text' => 'Which of the following is a design principle that encourages loose coupling?', 'quiz_id' => 3],
            ['text' => 'Which design pattern is typically used to ensure a class only has one instance?', 'quiz_id' => 3],
            ['text' => 'In software design, which architecture model separates concerns between the user interface, business logic, and data?', 'quiz_id' => 3],
            ['text' => 'Which of the following is an example of a structural design pattern?', 'quiz_id' => 3],

            // Software Project Management Questions  [ID 16-20]
            ['text' => '', 'quiz_id' => 4],
            ['text' => '', 'quiz_id' => 4],
            ['text' => '', 'quiz_id' => 4],
            ['text' => '', 'quiz_id' => 4],
            ['text' => '', 'quiz_id' => 4],

            // Software Testing and Analysis Questions  [ID 21-25]
            ['text' => '', 'quiz_id' => 5],
            ['text' => '', 'quiz_id' => 5],
            ['text' => '', 'quiz_id' => 5],
            ['text' => '', 'quiz_id' => 5],
            ['text' => '', 'quiz_id' => 5],

            // Software Development Workshop Questions  [ID 26-30]
            ['text' => '', 'quiz_id' => 6],
            ['text' => '', 'quiz_id' => 6],
            ['text' => '', 'quiz_id' => 6],
            ['text' => '', 'quiz_id' => 6],
            ['text' => '', 'quiz_id' => 6],

            // Compiler Development Questions  [ID 31-35]
            ['text' => '', 'quiz_id' => 7],
            ['text' => '', 'quiz_id' => 7],
            ['text' => '', 'quiz_id' => 7],
            ['text' => '', 'quiz_id' => 7],
            ['text' => '', 'quiz_id' => 7],

            // Formal Methods Questions  [ID 36-40]
            ['text' => '', 'quiz_id' => 8],
            ['text' => '', 'quiz_id' => 8],
            ['text' => '', 'quiz_id' => 8],
            ['text' => '', 'quiz_id' => 8],
            ['text' => '', 'quiz_id' => 8],

            // Data Mining Questions  [ID 41-45]
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
