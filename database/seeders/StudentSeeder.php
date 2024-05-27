<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = collect([
            [
                'id' => '123456',
                'name' => 'Dipraj',
                'email' => 'dipraj@gmail.com',
                'address' => 'ctg',
                'percentage' => 20,
                'age' => 24,
            ],
            [
                'id' => '123457',
                'name' => 'Rajib',
                'email' => 'rajib@gmail.com',
                'address' => 'dhaka',
                'percentage' => 85,
                'age' => 22,
            ],
            [
                'id' => '123458',
                'name' => 'Ankit',
                'email' => 'ankit@gmail.com',
                'address' => 'cumilla',
                'percentage' => 90,
                'age' => 23,
            ],
        ]);

        $students->each(function ($student) {
            Student::create($student);
        });
    }
}
