<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class EducatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->educator()->count(7)->create();
    }
}
