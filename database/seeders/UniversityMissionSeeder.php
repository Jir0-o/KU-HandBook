<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UniversityMissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $missions = [
            ['university_id' => 1, 'um_number' => 'UM1', 'description' => 'Explore human potential to the fullest extent and produce self-motivated, aspiring leaders to work for the betterment of the humankind based on wisdom, freethinking, creativity and unhindered intellectual exercises.', 'version' => 2024],
            ['university_id' => 1, 'um_number' => 'UM2', 'description' => 'Ensure a transformative educational experience that enables creative learning, entrepreneurship and inquisitiveness among the students.', 'version' => 2024],
            ['university_id' => 1, 'um_number' => 'UM3', 'description' => 'Create an inclusive research environment that enables graduates to make demonstrable economic and social impacts through translating knowledge and innovation into practice driven by moral values and professional ethics.', 'version' => 2024],
        ];

        // Insert data into the university_missions table
        DB::table('university_missions')->insert($missions);
    }
}