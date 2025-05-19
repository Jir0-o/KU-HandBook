<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseCLOSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'course_id' => 1,
                'code' => 'CLO1',
                'description' => 'Explain different hardware parts of a computer and their working procedure.',
                'version' => 2024,
            ],
            [
                'id' => 2,
                'course_id' => 1,
                'code' => 'CLO2',
                'description' => 'Explain different number system processing technique.',
                'version' => 2024,
            ],
            [
                'id' => 3,
                'course_id' => 2,
                'code' => 'CLO3',
                'description' => 'Understand the necessities of computer programming language.',
                'version' => 2024,
            ],
            [
                'id' => 4,
                'course_id' => 1,
                'code' => 'CLO4',
                'description' => 'Understand different types of software and their usage.',
                'version' => 2024,
            ],
            [
                'id' => 5,
                'course_id' => 2,
                'code' => 'CLO5',
                'description' => 'Explain the purpose of operating system, computer networks and security.',
                'version' => 2024,
            ],
            [
                'id' => 6,
                'course_id' => 3,
                'code' => 'CLO6',
                'description' => 'Learn office management tools such as MS Word, MS Excel and MS Power Point.',
                'version' => 2024,
            ],
            // Add other CLO data here
        ];

        DB::table('course_clos')->insert($data);
    }
}
