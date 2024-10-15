<?php

namespace Database\Seeders;

use App\Models\Option;
use Illuminate\Database\Seeder;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $options = [
            // Options for question 1 (HTML)
            ['text' => 'HyperText Markup Language', 'correct' => true, 'question_id' => 1],
            ['text' => 'HyperText Machine Language', 'correct' => false, 'question_id' => 1],
            ['text' => 'HyperText Main Language', 'correct' => false, 'question_id' => 1],
            ['text' => 'HyperTech Markup Language', 'correct' => false, 'question_id' => 1],

            // Options for question 2 (CSS)
            ['text' => 'Cascading Style Sheets', 'correct' => true, 'question_id' => 2],
            ['text' => 'Color Style Sheets', 'correct' => false, 'question_id' => 2],
            ['text' => 'Cascading Script Sheets', 'correct' => false, 'question_id' => 2],
            ['text' => 'Colorful Style Sheets', 'correct' => false, 'question_id' => 2],

            // Options for question 2 (CSS)
            ['text' => 'Cascading Style Sheets', 'correct' => true, 'question_id' => 2],
            ['text' => 'Color Style Sheets', 'correct' => false, 'question_id' => 2],
            ['text' => 'Cascading Script Sheets', 'correct' => false, 'question_id' => 2],
            ['text' => 'Colorful Style Sheets', 'correct' => false, 'question_id' => 2],




            // Options for the first question
            ['text' => 'To implement code faster', 'correct' => false, 'question_id' => 11],
            ['text' => 'To meet the functional and non-functional requirements', 'correct' => true, 'question_id' => 11],
            ['text' => 'To manage the budget of the project', 'correct' => false, 'question_id' => 11],
            ['text' => 'To finalize the testing process', 'correct' => false, 'question_id' => 11],

            // Options for the second question
            ['text' => 'Encapsulation', 'correct' => false, 'question_id' => 12],
            ['text' => 'Separation of concerns', 'correct' => true, 'question_id' => 12],
            ['text' => 'Polymorphism', 'correct' => false, 'question_id' => 12],
            ['text' => 'Inheritance', 'correct' => false, 'question_id' => 12],

            // Options for the third question
            ['text' => 'Factory Pattern', 'correct' => false, 'question_id' => 3],
            ['text' => 'Singleton Pattern', 'correct' => true, 'question_id' => 3],
            ['text' => 'Observer Pattern', 'correct' => false, 'question_id' => 3],
            ['text' => 'Adapter Pattern', 'correct' => false, 'question_id' => 3],

            // Options for the fourth question
            ['text' => 'Model-View-Controller (MVC)', 'correct' => true, 'question_id' => 3],
            ['text' => 'Client-Server Model', 'correct' => false, 'question_id' => 3],
            ['text' => 'Event-Driven Architecture', 'correct' => false, 'question_id' => 3],
            ['text' => 'Monolithic Architecture', 'correct' => false, 'question_id' => 3],

            // Options for the fifth question
            ['text' => 'Observer Pattern', 'correct' => false, 'question_id' => 3],
            ['text' => 'Decorator Pattern', 'correct' => true, 'question_id' => 3],
            ['text' => 'Command Pattern', 'correct' => false, 'question_id' => 3],
            ['text' => 'Strategy Pattern', 'correct' => false, 'question_id' => 3],
        ];

        foreach ($options as $option) {
            Option::create($option);
        }
    }
}
