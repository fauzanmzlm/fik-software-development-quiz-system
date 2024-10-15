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
        Subject::create(['name' => 'Web Application Development']);
        Subject::create(['name' => 'Requirements Engineering and Software Design']);
        Subject::create(['name' => 'Software Project Management']);
        Subject::create(['name' => 'Software Testing and Analysis']); 
        Subject::create(['name' => 'Software Development Workshop']);
        Subject::create(['name' => 'Compiler Development']); 
        Subject::create(['name' => 'Formal Methods']); 
        Subject::create(['name' => 'Data Mining']); 
    }
}
