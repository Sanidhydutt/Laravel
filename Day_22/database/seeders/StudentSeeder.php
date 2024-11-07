<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        $students = collect([
            [
                'name' => 'John Doe',
                'email' => 'jn@example.com',
            ],
            [
                'name' => 'Jane',
                'email' => 'jane@example.com',
            ],
            [
                'name' => 'Bob Smith',
                'email' => 'bob@example.com',
            ],
            [
                'name' => 'Alice Johnson',
                'email' => 'alice@example.com',
            ],
        ]);

        // Loop through each student in the collection and create the record
        $students->each(function ($student) {
            Student::insert($student);
        });

        // // Additional individual student creation
        // Student::create([
        //     'name' => 'SanidhyDutt',
        //     'email' => 'Sanidhydutt@gmail.com'
        // ]);
    }
}
