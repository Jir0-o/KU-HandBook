<?php

namespace Database\Seeders;

use App\Models\PeoTitle;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PEODetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $title = PeoTitle::all()->pluck('id');
        // Inserting PEO details data
        DB::table('peo_details')->insert([
            [
                'id' => 1,
                'degree_program_id' => 1,
                'peo_title_id' => $title->random(),
                'code' => 'PEO1',
                'description' => 'To prepare graduates to excel in the computing industry profession through quality education with a solid foundation in mathematics, engineering, as well as basic science and adequate practical training.',
                'domain_id' => '1,2,4',
                'version' => 2024
            ],
            [
                'id' => 2,
                'degree_program_id' => 1,
                'peo_title_id' => $title->random(),
                'code' => 'PEO2',
                'description' => 'To develop proficiency in graduates as computer scientists in emerging technologies to analyze and solve a wide range of computational problems and engage themselves in learning, understanding, and applying new ideas as the field evolves.',
                'domain_id' => '2,3,4',
                'version' => 2024
            ],
            [
                'id' => 3,
                'degree_program_id' => 1,
                'peo_title_id' => $title->random(),
                'code' => 'PEO3',
                'description' => 'To enable lifelong learning, professional as well as ethical attitude for embracing global challenges and making a positive impact on the environment and society.',
                'domain_id' => '1,2,3',
                'version' => 2024
            ],
            [
                'id' => 4,
                'degree_program_id' => 1,
                'peo_title_id' => $title->random(),
                'code' => 'PEO4',
                'description' => 'To attain the ability to adapt quickly to new environments and work as teams on multidisciplinary projects with effective communication skills and leadership qualities for becoming leaders, researchers, and entrepreneurs.',
                'domain_id' => '1,2,4',
                'version' => 2024
            ],
            [
                'id' => 5,
                'degree_program_id' => 8,
                'peo_title_id' => $title->random(),
                'code' => 'PEO1',
                'description' => 'To inculcate knowledge of philosophies, methodologies, and applications of architectural design and allied streams in sustaining environmental and societal wellbeing.',
                'domain_id' => '2,3,4',
                'version' => 2024
            ],
            [
                'id' => 6,
                'degree_program_id' => 8,
                'peo_title_id' => $title->random(),
                'code' => 'PEO2',
                'description' => 'To impart working ability with various stakeholders to attain design goals and engage with communities toward building their resilience.',
                'domain_id' => '1,2,3',
                'version' => 2024
            ],
            [
                'id' => 7,
                'degree_program_id' => 8,
                'peo_title_id' => $title->random(),
                'code' => 'PEO3',
                'description' => 'To instil capacity for design learning, decision making, problem-solving, entrepreneurship, and critical thinking, by being investigative, enterprising, scientific, and analytical with good managerial skills.',
                'domain_id' => '2,3,4',
                'version' => 2024
            ],
            [
                'id' => 8,
                'degree_program_id' => 8,
                'peo_title_id' => $title->random(),
                'code' => 'PEO4',
                'description' => 'To infuse a lifelong attitude toward leadership, self-direction, integrity, active listening and learning, time management, care, team building, and social contribution, concerning architectural design and professional practice.',
                'domain_id' => '1,2,4',
                'version' => 2024
            ],
        ]);
    }
}
