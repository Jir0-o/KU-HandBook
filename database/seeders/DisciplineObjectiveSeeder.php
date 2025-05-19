<?php

namespace Database\Seeders;

use App\Models\DisciplineObjectiveTitle;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DisciplineObjectiveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $title = DisciplineObjectiveTitle::all()->pluck('id');
        $data = [
            [
                'id' => 1,
                'discipline_id' => 2,
                'discipline_objective_title_id' => $title->random(),
                'code' => 'O1',
                'description' => 'To teach students to solve ICT problems efficiently, effectively, innovatively, and intelligently.',
                'version' => 2024,
            ],
            [
                'id' => 2,
                'discipline_id' => 2,
                'discipline_objective_title_id' => $title->random(),
                'code' => 'O2',
                'description' => 'To develop the students to use the techniques, skills and modern hardware and software engineering tools.',
                'version' => 2024,
            ],
            [
                'id' => 3,
                'discipline_id' => 2,
                'discipline_objective_title_id' => $title->random(),
                'code' => 'O3',
                'description' => 'To offer state of the art prospectuses to the students in both technical and scientific knowledge for the professionals and academics.',
                'version' => 2024,
            ],
            [
                'id' => 4,
                'discipline_id' => 2,
                'discipline_objective_title_id' => $title->random(),
                'code' => 'O4',
                'description' => 'To build the future leadership for technological industries at the national and international levels.',
                'version' => 2024,
            ],
            [
                'id' => 5,
                'discipline_id' => 1,
                'discipline_objective_title_id' => $title->random(),
                'code' => 'O1',
                'description' => 'To enable a thought-provoking learning environment founded on critical inquiry, innovation, and experimentation, while prioritizing the unique cultural landscape of Bangladesh.',
                'version' => 2024,
            ],
            [
                'id' => 6,
                'discipline_id' => 1,
                'discipline_objective_title_id' => $title->random(),
                'code' => 'O2',
                'description' => 'To educate students with contextual knowledge, responsiveness, professional skills, and attitudes in designing buildings and cities that would ensure health, safety, and sustainability ascertained by a rigorous interdisciplinary exchange between emerging discourses, practices, and socio-environmental needs, aspirations, and challenges.',
                'version' => 2024,
            ],
            [
                'id' => 7,
                'discipline_id' => 1,
                'discipline_objective_title_id' => $title->random(),
                'code' => 'O3',
                'description' => 'To produce skilled and committed professionals with a solid contextual foundation, who could act as leaders and team players, pioneer diversified career paths, and yield novel design approaches, thinking, and methodologies to tackle the challenges posed by the contingent and changing world.',
                'version' => 2024,
            ],
            // Add other Discipline Objective data here
        ];

        DB::table('discipline_objectives')->insert($data);
    }
}
