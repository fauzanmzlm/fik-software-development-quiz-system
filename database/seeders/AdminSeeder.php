<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::factory()->admin()->count(5)->create();
        $role = User::ROLE_ADMIN;

        $users = [
            [
                'name' => 'DANIEL HAW SOON KIAT',
                'email' => 'danielhaw@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('123'),
                'created_at' => now(),
                'updated_at' => now(),
                'remember_token' => Str::random(10),
                'role' => $role,
            ],
            [
                'name' => 'MUHAMMAD FAUZAN BIN MAZLAM',
                'email' => 'fauzanmazlam@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('123'),
                'created_at' => now(),
                'updated_at' => now(),
                'remember_token' => Str::random(10),
                'role' => $role,
            ],
            [
                'name' => 'MUHAMAD DANIEL BIN NORAZLAN',
                'email' => 'danielnorazlan@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('123'),
                'created_at' => now(),
                'updated_at' => now(),
                'remember_token' => Str::random(10),
                'role' => $role,
            ],
            [
                'name' => 'AMIRUL HAFIZ BIN ABD RAHMAN',
                'email' => 'amirulhafiz@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('123'),
                'created_at' => now(),
                'updated_at' => now(),
                'remember_token' => Str::random(10),
                'role' => $role,
            ],
            [
                'name' => 'FARIS BIN FAUZI',
                'email' => 'farisfauzi@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password123'),
                'created_at' => now(),
                'updated_at' => now(),
                'remember_token' => Str::random(10),
                'role' => $role,
            ],
        ];

        DB::table('users')->insert($users);
    }
}
