<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DisciplineMissionTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $missions = [
            [
                'name' => 'Computer Science and Engineering',
                'version' => 2024,
                'is_active' => 1,
            ],
            [
                'name' => 'Computer Science and Engineering',
                'version' => 2024,
                'is_active' => 1,
            ],
            [
                'name' => 'Computer Science and Engineering',
                'version' => 2024,
                'is_active' => 1,
            ],
            [
                'name' => 'Computer Science and Engineering',
                'version' => 2024,
                'is_active' => 1,
            ],
            [
                'name' => 'Architecture',
                'version' => 2024,
                'is_active' => 1,
            ],
            [
                'name' => 'Architecture',
                'version' => 2024,
                'is_active' => 1,
            ],
            [
                'name' => 'Architecture',
                'version' => 2024,
                'is_active' => 1,
            ],
        ];

        DB::table('discipline_mission_titles')->insert($missions);
    }
}
