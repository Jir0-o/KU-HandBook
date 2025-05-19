<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseTermSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('course_terms')->insert([
            ['university_id' => 1, 'name' => 'First', 'version' => 2024],
            ['university_id' => 1, 'name' => 'Second', 'version' => 2024],
            // Add more terms if needed
        ]);
    }
}
