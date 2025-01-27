<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // SUBJEK PENGKHUSUSAN [ID 1-8]
        Subject::create(['name' => 'Web Application Development']);
        Subject::create(['name' => 'Requirements Engineering and Software Design']);
        Subject::create(['name' => 'Software Project Management']);
        Subject::create(['name' => 'Software Testing and Analysis']);
        Subject::create(['name' => 'Software Development Workshop']);
        Subject::create(['name' => 'Compiler Development']);
        Subject::create(['name' => 'Formal Methods']);
        Subject::create(['name' => 'Data Mining']);
        // SUBJEK TERAS [ID 9-11]
        Subject::create(['name' => 'Artificial Intelligence']);
        Subject::create(['name' => 'Database']);
        Subject::create(['name' => 'System Analysis and Design']);
    }
}
