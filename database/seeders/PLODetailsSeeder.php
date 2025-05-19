<?php

namespace Database\Seeders;

use App\Models\PloTitle;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PLODetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $title = PloTitle::all()->pluck('id');

        DB::table('plo_details')->insert([
            [
                'id' => 1,
                'skill_type' => 'Fundamental Skills',
                'degree_program_id' => 1,
                'plo_title_id' => $title->random(),
                'code' => 'PLO1',
                'description' => 'Engineering Knowledge: Apply the knowledge of mathematics, science, engineering fundamentals, and a computer engineering specialization to the solution of complex engineering problems.',
                'version' => 2024,
            ],
            [
                'id' => 2,
                'skill_type' => 'Thinking Skills',
                'degree_program_id' => 1,
                'plo_title_id' => $title->random(),
                'code' => 'PLO2',
                'description' => 'Problem Analysis: Identify, formulate, and analyze complex engineering problems and reach substantiated conclusions using mathematics, natural sciences, and engineering sciences.',
                'version' => 2024,
            ],
            [
                'id' => 3,
                'skill_type' => 'Social Skills',
                'degree_program_id' => 1,
                'plo_title_id' => $title->random(),
                'code' => 'PLO3',
                'description' => 'Modern Tool Usage: Create, select and apply appropriate techniques, resources, and modern engineering and ICT tools including prediction and modeling to complex engineering activities with an understanding of the limitations.',
                'version' => 2024,
            ],
            [
                'id' => 4,
                'skill_type' => 'Personal Skills',
                'degree_program_id' => 1,
                'plo_title_id' => $title->random(),
                'code' => 'PLO4',
                'description' => 'Individual Work and Teamwork: Function effectively as an individual and as a member or leader of diverse teams in multidisciplinary settings.',
                'version' => 2024,
            ],
            // Add the rest of the data here
            [
                'id' => 5,
                'skill_type' => 'Personal Skills',
                'degree_program_id' => 1,
                'plo_title_id' => $title->random(),
                'code' => 'PLO5',
                'description' => 'Communication: Communicate effectively about complex engineering activities with the engineering community and with society at large. Be able to comprehend and write effective reports, design documentation, make effective presentations and give as well as receive clear instructions.',
                'version' => 2024,
            ],
            // Add the rest of the data here
            [
                'id' => 6,
                'skill_type' => 'Personal Skills',
                'degree_program_id' => 1,
                'plo_title_id' => $title->random(),
                'code' => 'PLO6',
                'description' => 'Environment and Sustainability: Understand the impact of professional engineering solutions in societal and environmental contexts and demonstrate the knowledge of, and need for sustainable development.',
                'version' => 2024,
            ],
        ]);
    }
}
