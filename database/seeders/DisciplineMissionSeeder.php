<?php

namespace Database\Seeders;

use App\Models\DisciplineMissionTitle;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DisciplineMissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $title = DisciplineMissionTitle::all()->pluck('id');
        $missions = [
            [
                'discipline_id' => 2,
                'discipline_mission_title_id' => $title->random(),
                'code' => 'M1',
                'description' => 'To provide a comprehensive educational experience for the students by incorporating in-depth domain knowledge, problem-solving capabilities, communication skills, technology-adaptation competency, and leadership guidelines.',
                'version' => 2024,
            ],
            [
                'discipline_id' => 2,
                'discipline_mission_title_id' => $title->random(),
                'code' => 'M2',
                'description' => 'To conduct high quality state of the art research for creating, exploring, and sharing cutting edge knowledge of CSE and ICT fields for the welfare of mankind.',
                'version' => 2024,
            ],
            [
                'discipline_id' => 2,
                'discipline_mission_title_id' => $title->random(),
                'code' => 'M3',
                'description' => 'To develop potential candidates for world famous high-tech industries, research, and educational institutions.',
                'version' => 2024,
            ],
            [
                'discipline_id' => 2,
                'discipline_mission_title_id' => $title->random(),
                'code' => 'M4',
                'description' => 'To make students aware of ethical responsibilities, social obligations, diversity, and economic challenges.',
                'version' => 2024,
            ],
            [
                'discipline_id' => 1,
                'discipline_mission_title_id' => $title->random(),
                'code' => 'M1',
                'description' => 'Contribute to critical discourses, inquiry, and innovation while addressing the emerging needs, challenges, and aspirations of the contingent and changing world.',
                'version' => 2024,
            ],
            [
                'discipline_id' => 1,
                'discipline_mission_title_id' => $title->random(),
                'code' => 'M2',
                'description' => 'Provide education that celebrates contextual knowledge and promotes responsibility and responsiveness in designing healthy, safe, and sustainable buildings and cities.',
                'version' => 2024,
            ],
            [
                'discipline_id' => 1,
                'discipline_mission_title_id' => $title->random(),
                'code' => 'M3',
                'description' => 'Inspire lifelong learning with the necessary ethics, attitudes, skills, and commitment to change.',
                'version' => 2024,
            ],
        ];

        DB::table('discipline_missions')->insert($missions);
    }
}
