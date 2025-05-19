<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseAreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['university_id' => 1, 'name' => 'General Education (GED) Courses', 'version' => 2024],
            ['university_id' => 1, 'name' => 'Core/Compulsory Courses', 'version' => 2024],
            ['university_id' => 1, 'name' => 'Optional/Elective Courses', 'version' => 2024],
            ['university_id' => 1, 'name' => 'Capstone Courses', 'version' => 2024],
        ];

        DB::table('course_areas')->insert($data);
    }
}
