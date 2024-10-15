<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class EducatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::factory()->educator()->count(7)->create();

        $role = User::ROLE_EDUCATOR;

        $users = [
            // 6
            [
                'name' => 'DR. WAN MOHD AMIR FAZAMIN BIN WAN HAMZAH',
                'email' => 'wanmohdamirfazamin@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('123'),
                'created_at' => now(),
                'updated_at' => now(),
                'remember_token' => Str::random(10),
                'role' => $role,
            ],
            // 7
            [
                'name' => 'DR. ONG YEW CHUAN',
                'email' => 'onyewchuan@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('123'),
                'created_at' => now(),
                'updated_at' => now(),
                'remember_token' => Str::random(10),
                'role' => $role,
                
            ],
            // 8
            [
                'name' => 'DR. ABD. RASID BIN MAMAT',
                'email' => 'abdrasid@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('123'),
                'created_at' => now(),
                'updated_at' => now(),
                'remember_token' => Str::random(10),
                'role' => $role,
            ],
            // 9
            [
                'name' => 'DR. MOHD KAMIR BIN YUSOF',
                'email' => 'mohdkamir@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('123'),
                'created_at' => now(),
                'updated_at' => now(),
                'remember_token' => Str::random(10),
                'role' => $role,
            ],
            // 10
            [
                'name' => 'DR. JULAILY AIDA BINTI JUSOH',
                'email' => 'julailyaida@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('123'),
                'created_at' => now(),
                'updated_at' => now(),
                'remember_token' => Str::random(10),
                'role' => $role,
            ],
            // 11
            [
                'name' => 'PROF. MADYA DR. AZWA BIN ABDUL AZIZ',
                'email' => 'azwa@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('123'),
                'created_at' => now(),
                'updated_at' => now(),
                'remember_token' => Str::random(10),
                'role' => $role,
            ],
        ];

        DB::table('users')->insert($users);
    }
}
