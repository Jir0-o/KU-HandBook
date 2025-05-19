<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DegreeCourseAreaNotesSeeder extends Seeder
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
                'degree_program_id' => 1,
                'course_area_id' => 1,
                'note' => '** 25.40 % from GED courses',
                'version' => 2024,
            ],
            [
                'id' => 2,
                'degree_program_id' => 1,
                'course_area_id' => 2,
                'note' => '*** Thesis, project, internship etc. courses',
                'version' => 2024,
            ],
            [
                'id' => 3,
                'degree_program_id' => 6,
                'course_area_id' => 1,
                'note' => '** 25.0% GED courses [Please note that GED courses should be at least 25%]',
                'version' => 2024,
            ],
        ];

        DB::table('degree_course_area_notes')->insert($data);
    }
}
