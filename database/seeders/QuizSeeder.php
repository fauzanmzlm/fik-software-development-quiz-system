<?php

namespace Database\Seeders;

use App\Models\Quiz;
use Illuminate\Database\Seeder;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $quizzes = [
            // Registered Quizzes [ID 1-8]
            ['title' => 'Web Development Basics', 'slug' => 'web-dev-basics', 'description' => 'A quiz on web development basics.', 'subject_id' => 1, 'user_id' => 6, 'published' => true, 'public' => false],
            ['title' => 'Fundamentals of Requirements Engineering', 'slug' => 'requirements-engineering', 'description' => 'Quiz on Requirements Engineering.', 'subject_id' => 2, 'user_id' => 7, 'published' => true, 'public' => false],
            ['title' => 'Project Management Techniques', 'slug' => 'project-management', 'description' => 'Quiz on Software Project Management techniques.', 'subject_id' => 3, 'user_id' => 8, 'published' => true, 'public' => false],
            ['title' => 'Software Testing Best Practices', 'slug' => 'software-testing', 'description' => 'Quiz on Software Testing and Analysis.', 'subject_id' => 4, 'user_id' => 9, 'published' => true, 'public' => false],
            ['title' => 'Software Development Workshop', 'slug' => 'software-development-workshop', 'description' => 'Quiz on software development workshops.', 'subject_id' => 5, 'user_id' => 10, 'published' => true, 'public' => false],
            ['title' => 'Introduction to Compiler Development', 'slug' => 'compiler-development', 'description' => 'Quiz on compiler development.', 'subject_id' => 6, 'user_id' => 7, 'published' => true, 'public' => false],
            ['title' => 'Formal Methods in Software Engineering', 'slug' => 'formal-methods', 'description' => 'Quiz on Formal Methods.', 'subject_id' => 7, 'user_id' => 10, 'published' => true, 'public' => false],
            ['title' => 'Introduction to Data Mining', 'slug' => 'data-mining', 'description' => 'Quiz on Data Mining basics.', 'subject_id' => 8, 'user_id' => 11, 'published' => true, 'public' => false],
            // Public Quizzes  [ID 9]
            ['title' => 'Web Application Development: Coding Challenges', 'slug' => 'web-application-development-coding-challenges', 'description' => 'A quiz on web development basics.', 'subject_id' => 1, 'user_id' => 6, 'published' => true, 'public' => true],
        ];

        foreach ($quizzes as $quiz) {
            Quiz::create($quiz);
        }
    }
}
