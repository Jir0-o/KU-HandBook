<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseYearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['university_id' => 1, 'name' => 'First', 'version' => 2024],
            ['university_id' => 1, 'name' => 'Second', 'version' => 2024],
            ['university_id' => 1, 'name' => 'Third', 'version' => 2024],
            ['university_id' => 1, 'name' => 'Fourth', 'version' => 2024],
            ['university_id' => 1, 'name' => 'Fifth', 'version' => 2024],
        ];

        DB::table('course_years')->insert($data);
    }
}
