<?php

namespace Database\Seeders;

use App\Models\GraduateAttributeTitle;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GraduateAttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $title = GraduateAttributeTitle::all()->pluck('id');
        $data = [
            [
                'id' => 1,
                'degree_program_id' => 1,
                'graduate_attribute_title_id' => $title->random(),
                'code' => 'GA1',
                'description' => 'A knowledge base for engineering: Demonstrated competence in mathematics, engineering fundamentals, and specialized engineering knowledge appropriate to computer science and engineering.',
                'domain_ids' => '1',
                'version' => 2024,
            ],
            [
                'id' => 2,
                'degree_program_id' => 1,
                'graduate_attribute_title_id' => $title->random(),
                'code' => 'GA2',
                'description' => 'Problem analysis: An ability to use appropriate knowledge and skills to identify, formulate, analyze, and solve complex computational problems',
                'domain_ids' => '1',
                'version' => 2024,
            ],
            [
                'id' => 3,
                'degree_program_id' => 1,
                'graduate_attribute_title_id' => $title->random(),
                'code' => 'GA3',
                'description' => 'Investigation: An ability to investigate complex engineering problems by appropriate experiments, analysis and interpretation of data, and synthesis of information.',
                'domain_ids' => '2',
                'version' => 2024,
            ],
            [
                'id' => 4,
                'degree_program_id' => 1,
                'graduate_attribute_title_id' => $title->random(),
                'code' => 'GA4',
                'description' => 'Design: An ability to design software and hardware solutions for complex, open-ended engineering problems.',
                'domain_ids' => '2',
                'version' => 2024,
            ],
            [
                'id' => 5,
                'degree_program_id' => 1,
                'graduate_attribute_title_id' => $title->random(),
                'code' => 'GA5',
                'description' => 'Use of engineering tools: An ability to create, select, apply, adapt, and extend appropriate techniques, resources, and modern engineering tools.',
                'domain_ids' => '1',
                'version' => 2024,
            ],
            [
                'id' => 6,
                'degree_program_id' => 1,
                'graduate_attribute_title_id' => $title->random(),
                'code' => 'GA6',
                'description' => 'Individual and team work: An ability to work effectively as a member and leader in teams, preferably in a multi-disciplinary setting.',
                'domain_ids' => '3',
                'version' => 2024,
            ],
            [
                'id' => 7,
                'degree_program_id' => 1,
                'graduate_attribute_title_id' => $title->random(),
                'code' => 'GA7',
                'description' => 'Communication skills: An ability to communicate complex computer science and engineering concepts within the profession and with society at large.',
                'domain_ids' => '4',
                'version' => 2024,
            ],
            [
                'id' => 8,
                'degree_program_id' => 1,
                'graduate_attribute_title_id' => $title->random(),
                'code' => 'GA8',
                'description' => 'Professionalism: An understanding of the roles and responsibilities of the professional computer engineer in society.',
                'domain_ids' => '4',
                'version' => 2024,
            ],
            [
                'id' => 9,
                'degree_program_id' => 1,
                'graduate_attribute_title_id' => $title->random(),
                'code' => 'GA9',
                'description' => 'Impact of engineering on society and the environment: An ability to analyze social and environmental aspects of science and engineering activities.',
                'domain_ids' => '3',
                'version' => 2024,
            ],
            [
                'id' => 10,
                'degree_program_id' => 1,
                'graduate_attribute_title_id' => $title->random(),
                'code' => 'GA10',
                'description' => 'Ethics and equity: An ability to apply professional ethics, accountability, and equity.',
                'domain_ids' => '4',
                'version' => 2024,
            ],
            [
                'id' => 11,
                'degree_program_id' => 1,
                'graduate_attribute_title_id' => $title->random(),
                'code' => 'GA11',
                'description' => 'Project management and Financial Aspects: An ability to appropriately incorporate economics and business aspects including project, risk, and change management into the practice of engineering and to understand their limitations.',
                'domain_ids' => '4',
                'version' => 2024,
            ],
            [
                'id' => 12,
                'degree_program_id' => 1,
                'graduate_attribute_title_id' => $title->random(),
                'code' => 'GA12',
                'description' => 'Life-long learning: An ability to identify and address their own educational needs in a changing world in ways sufficient to maintain their competence and allow them to contribute to the advancement of knowledge.',
                'domain_ids' => '4',
                'version' => 2024,
            ],
            [
                'id' => 13,
                'degree_program_id' => 8,
                'graduate_attribute_title_id' => $title->random(),
                'code' => 'GA1',
                'description' => 'Core/basic knowledge (disciplinary)',
                'domain_ids' => '1',
                'version' => 2024,
            ],
            [
                'id' => 14,
                'degree_program_id' => 8,
                'graduate_attribute_title_id' => $title->random(),
                'code' => 'GA2',
                'description' => 'Technical knowledge and ability (Social-economic- environmental)',
                'domain_ids' => '1,3',
                'version' => 2024,
            ],
            [
                'id' => 15,
                'degree_program_id' => 8,
                'graduate_attribute_title_id' => $title->random(),
                'code' => 'GA3',
                'description' => 'Problem-solving',
                'domain_ids' => '1,2',
                'version' => 2024,
            ],
            [
                'id' => 16,
                'degree_program_id' => 8,
                'graduate_attribute_title_id' => $title->random(),
                'code' => 'GA4',
                'description' => 'Critical thinking and decision making',
                'domain_ids' => '1,2,4',
                'version' => 2024,
            ],
            [
                'id' => 17,
                'degree_program_id' => 8,
                'graduate_attribute_title_id' => $title->random(),
                'code' => 'GA5',
                'description' => 'Up-to-date/contemporary presentation skill',
                'domain_ids' => '1,4',
                'version' => 2024,
            ],
            [
                'id' => 18,
                'degree_program_id' => 8,
                'graduate_attribute_title_id' => $title->random(),
                'code' => 'GA6',
                'description' => 'Design Communication skill',
                'domain_ids' => '1,4',
                'version' => 2024,
            ],
            [
                'id' => 19,
                'degree_program_id' => 8,
                'graduate_attribute_title_id' => $title->random(),
                'code' => 'GA7',
                'description' => 'Enabling end-user (collaboration and negotiation)',
                'domain_ids' => '2,3',
                'version' => 2024,
            ],
            [
                'id' => 20,
                'degree_program_id' => 8,
                'graduate_attribute_title_id' => $title->random(),
                'code' => 'GA8',
                'description' => 'Professional awareness/Socio-environmental inlaid professionalism',
                'domain_ids' => '3,4',
                'version' => 2024,
            ],
            [
                'id' => 21,
                'degree_program_id' => 2,
                'graduate_attribute_title_id' => $title->random(),
                'code' => 'GA9',
                'description' => 'Real-life Problem solving, cross-disciplinary exchange',
                'domain_ids' => '1,2',
                'version' => 2024,
            ],
            [
                'id' => 22,
                'degree_program_id' => 2,
                'graduate_attribute_title_id' => $title->random(),
                'code' => 'GA10',
                'description' => 'Evident based decision making',
                'domain_ids' => '2',
                'version' => 2024,
            ],
            [
                'id' => 23,
                'degree_program_id' => 2,
                'graduate_attribute_title_id' => $title->random(),
                'code' => 'GA11',
                'description' => 'Innovative entrepreneurship/Leadership ability',
                'domain_ids' => '2,4',
                'version' => 2024,
            ],
            [
                'id' => 24,
                'degree_program_id' => 2,
                'graduate_attribute_title_id' => $title->random(),
                'code' => 'GA12',
                'description' => 'Diversified managerial capacity',
                'domain_ids' => '3,4',
                'version' => 2024,
            ],
            [
                'id' => 25,
                'degree_program_id' => 2,
                'graduate_attribute_title_id' => $title->random(),
                'code' => 'GA13',
                'description' => 'Self-exploratory capacity',
                'domain_ids' => '4',
                'version' => 2024,
            ],
        ];

        DB::table('graduate_attributes')->insert($data);
    }
}

