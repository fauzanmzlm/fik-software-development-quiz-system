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

            // Add more options for each question...

            // Add options for the rest of the questions...
        ];

        foreach ($options as $option) {
            Option::create($option);
        }
    }
}
