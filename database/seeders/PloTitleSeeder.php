<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PloTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('plo_titles')->insert([
            [
                'id' => 1,
                'name' => 'PLO1',
                'sub_name' => 'Engineering Knowledge',
                'version' => 2024,
            ],
            [
                'id' => 2,
                'name' => 'PLO2',
                'sub_name' => 'Problem Analysis',
                'version' => 2024,
            ],
            [
                'id' => 3,
                'name' => 'PLO3',
                'sub_name' => 'Modern Tool Usage',
                'version' => 2024,
            ],
            [
                'id' => 4,
                'name' => 'PLO4',
                'sub_name' => 'Individual Work and Teamwork',
                'version' => 2024,
            ],
            // Add the rest of the data here
            [
                'id' => 5,
                'name' => 'PLO5',
                'sub_name' => 'Communication',
                'version' => 2024,
            ],
            // Add the rest of the data here
            [
                'id' => 6,
                'name' => 'PLO6',
                'sub_name' => 'Environment and Sustainability',
                'version' => 2024,
            ],
        ]);
    }
}
