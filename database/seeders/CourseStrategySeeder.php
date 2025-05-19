<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseStrategySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['university_id' => 1, 'name' => 'Teaching-Learning Strategy', 'version' => 2024],
            ['university_id' => 1, 'name' => 'Assessment Strategy', 'version' => 2024],
        ];

        DB::table('course_strategies')->insert($data);
    }
}
