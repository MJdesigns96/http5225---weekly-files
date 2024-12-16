<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Student;
use App\Models\Courses;
use App\Models\Faculty;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Courses::factory() -> create([
            'courseID' => 'HTTP5225',
            'courseName' => 'PHP',
            'description' => 'Lets learn c#',
            'faculty_id' => '1'
        ]);
        Faculty::factory() -> create([
            'name' => 'Gary'
        ]);
        Faculty::factory() -> create([
            'name' => 'Mark'
        ]);
        Faculty::factory() -> create([
            'name' => 'Anna'
        ]);

        Student::factory(100)->create();
       Courses::factory(20)->create();
    }
}
