<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class StudentUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create or update a student user
        User::updateOrCreate(
            ['email' => 'student@example.com'],
            [
                'name' => 'Student User',
                'password' => Hash::make('password'),
                'role' => User::ROLE_STUDENT,
            ]
        );

        // Optional: teacher and admin for testing
        User::updateOrCreate(
            ['email' => 'teacher@example.com'],
            [
                'name' => 'Teacher User',
                'password' => Hash::make('password'),
                'role' => User::ROLE_TEACHER,
            ]
        );

        User::updateOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Admin User',
                'password' => Hash::make('password'),
                'role' => User::ROLE_ADMIN,
            ]
        );
    }
}
