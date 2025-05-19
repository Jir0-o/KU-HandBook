<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['university_id' => 1, 'name' => 'Theory', 'version' => 2024],
            ['university_id' => 1, 'name' => 'Sessional', 'version' => 2024],
        ];

        DB::table('course_types')->insert($data);
    }
}
