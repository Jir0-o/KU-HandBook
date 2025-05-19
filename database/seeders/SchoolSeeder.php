<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $schools = [
            ['university_id' => 1, 'name' => 'Life Science School', 'vision' => '', 'web_link' => '', 'version' => 2024],
            ['university_id' => 1, 'name' => 'Science, Engineering and Technology (SET) School', 'vision' => '', 'web_link' => '', 'version' => 2024],
            ['university_id' => 1, 'name' => 'Management and Business Administration School', 'vision' => '', 'web_link' => '', 'version' => 2024],
            ['university_id' => 1, 'name' => 'Social Science School', 'vision' => '', 'web_link' => '', 'version' => 2024],
            ['university_id' => 1, 'name' => 'Arts and Humanities School', 'vision' => '', 'web_link' => '', 'version' => 2024],
            ['university_id' => 1, 'name' => 'Fine Arts School', 'vision' => '', 'web_link' => '', 'version' => 2024],
            ['university_id' => 1, 'name' => 'Education School', 'vision' => '', 'web_link' => '', 'version' => 2024],
            ['university_id' => 1, 'name' => 'Modern Language Center', 'vision' => '', 'web_link' => '', 'version' => 2024],
            ['university_id' => 1, 'name' => 'Law School', 'vision' => '', 'web_link' => '', 'version' => 2024],
        ];

        // Insert data into the schools table
        DB::table('schools')->insert($schools);
    }
}