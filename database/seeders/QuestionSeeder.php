<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions = [
            // Web Application Development Questions [ID 1-5]
            ['text' => 'What does HTML stand for?', 'user_id' => 6],
            ['text' => 'What is the purpose of CSS?', 'user_id' => 6],
            ['text' => 'What does JavaScript primarily handle?', 'user_id' => 6],
            ['text' => 'What is the role of a web server?', 'user_id' => 6],
            ['text' => 'Which tag is used for the main heading?', 'user_id' => 6],

            // Requirements Engineering and Software Design Questions  [ID 6-10]
            ['text' => 'What is the purpose of a software requirements specification (SRS)?', 'user_id' => 7],
            ['text' => 'Which type of requirements focuses on how the system should behave under specific conditions?', 'user_id' => 7],
            ['text' => 'What is the difference between functional and non-functional requirements?', 'user_id' => 7],
            ['text' => 'In software design, what is meant by "modularity"?', 'user_id' => 7],
            ['text' => 'Which of the following is a commonly used design pattern in software engineering? (Singleton, Factory, Abstract Factory)', 'user_id' => 7],

            // Software Project Management Questions  [ID 11-15]
            ['text' => 'What is the role of a project manager in software development?', 'user_id' => 8],
            ['text' => 'What are the main phases of the software project management lifecycle?', 'user_id' => 8],
            ['text' => 'How does risk management contribute to the success of a software project?', 'user_id' => 8],
            ['text' => 'What is the purpose of a Gantt chart in project management?', 'user_id' => 8],
            ['text' => 'Explain the difference between Agile and Waterfall project management methodologies.', 'user_id' => 8],

            // Software Testing and Analysis Questions  [ID 16-20]
            ['text' => 'What is the primary goal of software testing?', 'user_id' => 9],
            ['text' => 'What is the difference between black-box testing and white-box testing?', 'user_id' => 9],
            ['text' => 'Which type of testing is performed without executing the code?', 'user_id' => 9],
            ['text' => 'What are the main activities involved in static analysis of software?', 'user_id' => 9],
            ['text' => 'What is regression testing, and why is it important?', 'user_id' => 9],

            // Software Development Workshop Questions  [ID 21-25]
            ['text' => 'What is version control, and why is it essential in software development?', 'user_id' => 10],
            ['text' => 'What is continuous integration (CI), and how does it improve the development process?', 'user_id' => 10],
            ['text' => 'Explain the significance of code reviews in collaborative software development.', 'user_id' => 10],
            ['text' => 'What are the key steps involved in deploying a software application?', 'user_id' => 10],
            ['text' => 'How do agile methodologies support effective software development practices?', 'user_id' => 10],

            // Compiler Development Questions  [ID 26-30]
            ['text' => 'What is the role of a lexical analyzer in a compiler?', 'user_id' => 7],
            ['text' => 'Explain the difference between a compiler and an interpreter.', 'user_id' => 7],
            ['text' => 'What is syntax analysis, and how is it used in the compilation process?', 'user_id' => 7],
            ['text' => 'What is the purpose of optimization in a compiler?', 'user_id' => 7],
            ['text' => 'What are the key stages of a typical compilation process?', 'user_id' => 7],

            // Formal Methods Questions  [ID 31-35]
            ['text' => 'What is the primary difference between dynamic and static typing in programming languages?', 'user_id' => 10],
            ['text' => 'Explain the concept of object-oriented programming and its four main principles.', 'user_id' => 10],
            ['text' => 'What are the advantages of using recursion in problem-solving?', 'user_id' => 10],
            ['text' => 'What is the difference between a stack and a queue in data structures?', 'user_id' => 10],
            ['text' => 'How does memory management work in languages that support garbage collection?', 'user_id' => 10],

            // Data Mining Questions  [ID 36-40]
            ['text' => 'What is data mining, and how is it different from traditional data analysis?', 'user_id' => 11],
            ['text' => 'Explain the concept of association rule mining and its importance in data mining.', 'user_id' => 11],
            ['text' => 'What are the key steps involved in the data mining process?', 'user_id' => 11],
            ['text' => 'How does clustering differ from classification in data mining?', 'user_id' => 11],
            ['text' => 'What is the purpose of data preprocessing in the context of data mining?', 'user_id' => 11],

            // AI Questions  [ID 41-45]
            ['text' => 'What is the main goal of AI?', 'user_id' => 10],
            ['text' => 'Which is an example of a machine learning technique?', 'user_id' => 10],
            ['text' => 'What does NLP stand for in AI?', 'user_id' => 10],
            ['text' => 'Which is not a type of neural network?', 'user_id' => 10],
            ['text' => 'What is supervised learning?', 'user_id' => 10],

            // Database Questions  [ID 46-50]
            ['text' => 'What does SQL stand for?', 'user_id' => 10],
            ['text' => 'Which is an example of a NoSQL database?', 'user_id' => 10],
            ['text' => 'What is a primary key?', 'user_id' => 10],
            ['text' => 'Which operation is used to retrieve data from a database?', 'user_id' => 10],
            ['text' => 'What does normalization in databases achieve?', 'user_id' => 10],

            // System Analysis Questions  [ID 51-55]
            ['text' => 'What is the purpose of system analysis?', 'user_id' => 7],
            ['text' => 'Which tool is commonly used in system analysis?', 'user_id' => 7],
            ['text' => 'What is a use case diagram?', 'user_id' => 7],
            ['text' => 'What is feasibility study in system development?', 'user_id' => 7],
            ['text' => 'Which is not a phase in SDLC?', 'user_id' => 7],


            // ============================== PUBLIC QUESTIONS =============================

            // Web Application Development Questions [ID 56-60]
            [
                'text' => 'What will be the output of the following CSS code?',
                'code_snippet' => 'h1 { color: red; }',
                'user_id' => 6
            ],
            [
                'text' => 'What will the following JavaScript code log to the console?',
                'code_snippet' => 'console.log(typeof "Hello, World!");',
                'user_id' => 6
            ],
            [
                'text' => 'What will be the result of the following PHP code?',
                'code_snippet' => '$number = 10; echo $number++;',
                'user_id' => 6
            ],
            [
                'text' => 'What does the following jQuery code do?',
                'code_snippet' => '$("#myButton").click(function() { alert("Button clicked!"); });',
                'user_id' => 6
            ],
            [
                'text' => 'What will be returned by the following Express.js route?',
                'code_snippet' => 'app.get("/api/data", (req, res) => { res.json({ message: "Hello, World!" }); });',
                'user_id' => 6
            ]
        ];

        foreach ($questions as $question) {
            Question::create($question);
        }

        // Next, associate questions with quizzes in the pivot table 'question_quiz'
        $questionQuizAssociations = [
            // Format: ['question_id' => X, 'quiz_id' => Y]
            ['question_id' => 1, 'quiz_id' => 1],
            ['question_id' => 2, 'quiz_id' => 1],
            ['question_id' => 3, 'quiz_id' => 1],
            ['question_id' => 4, 'quiz_id' => 1],
            ['question_id' => 5, 'quiz_id' => 1],

            ['question_id' => 6, 'quiz_id' => 2],
            ['question_id' => 7, 'quiz_id' => 2],
            ['question_id' => 8, 'quiz_id' => 2],
            ['question_id' => 9, 'quiz_id' => 2],
            ['question_id' => 10, 'quiz_id' => 2],

            ['question_id' => 11, 'quiz_id' => 3],
            ['question_id' => 12, 'quiz_id' => 3],
            ['question_id' => 13, 'quiz_id' => 3],
            ['question_id' => 14, 'quiz_id' => 3],
            ['question_id' => 15, 'quiz_id' => 3],

            ['question_id' => 16, 'quiz_id' => 4],
            ['question_id' => 17, 'quiz_id' => 4],
            ['question_id' => 18, 'quiz_id' => 4],
            ['question_id' => 19, 'quiz_id' => 4],
            ['question_id' => 20, 'quiz_id' => 4],

            ['question_id' => 21, 'quiz_id' => 5],
            ['question_id' => 22, 'quiz_id' => 5],
            ['question_id' => 23, 'quiz_id' => 5],
            ['question_id' => 24, 'quiz_id' => 5],
            ['question_id' => 25, 'quiz_id' => 5],

            ['question_id' => 26, 'quiz_id' => 6],
            ['question_id' => 27, 'quiz_id' => 6],
            ['question_id' => 28, 'quiz_id' => 6],
            ['question_id' => 29, 'quiz_id' => 6],
            ['question_id' => 30, 'quiz_id' => 6],

            ['question_id' => 31, 'quiz_id' => 7],
            ['question_id' => 32, 'quiz_id' => 7],
            ['question_id' => 33, 'quiz_id' => 7],
            ['question_id' => 34, 'quiz_id' => 7],
            ['question_id' => 35, 'quiz_id' => 7],

            ['question_id' => 36, 'quiz_id' => 8],
            ['question_id' => 37, 'quiz_id' => 8],
            ['question_id' => 38, 'quiz_id' => 8],
            ['question_id' => 39, 'quiz_id' => 8],
            ['question_id' => 40, 'quiz_id' => 8],

            ['question_id' => 41, 'quiz_id' => 9],
            ['question_id' => 42, 'quiz_id' => 9],
            ['question_id' => 43, 'quiz_id' => 9],
            ['question_id' => 44, 'quiz_id' => 9],
            ['question_id' => 45, 'quiz_id' => 9],

            ['question_id' => 46, 'quiz_id' => 10],
            ['question_id' => 47, 'quiz_id' => 10],
            ['question_id' => 48, 'quiz_id' => 10],
            ['question_id' => 49, 'quiz_id' => 10],
            ['question_id' => 50, 'quiz_id' => 10],

            ['question_id' => 51, 'quiz_id' => 11],
            ['question_id' => 52, 'quiz_id' => 11],
            ['question_id' => 53, 'quiz_id' => 11],
            ['question_id' => 54, 'quiz_id' => 11],
            ['question_id' => 55, 'quiz_id' => 11],


            // ================ PUBLIC QUESTIONS =============================

            ['question_id' => 56, 'quiz_id' => 12],
            ['question_id' => 57, 'quiz_id' => 12],
            ['question_id' => 58, 'quiz_id' => 12],
            ['question_id' => 59, 'quiz_id' => 12],
            ['question_id' => 60, 'quiz_id' => 12],

        ];

        // Insert the question-quiz associations into the pivot table
        DB::table('question_quiz')->insert($questionQuizAssociations);
    }
}
