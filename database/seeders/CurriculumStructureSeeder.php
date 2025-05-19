<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CurriculumStructureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'degree_program_id' => 1,
                'year' => 4,
                'term' => 8,
                'admission_requirement' => 'The applicants having HSC or equivalent degree will be eligible for admission into this program. Other terms and conditions are set or revised periodically by the appropriate authority.',
                'total_min_credit_required' => 157.5,
                'available_credit' => 238.5,
                'total_class_per_term' => 14,
                'min_cgpa_to_graduate' => 2.5,
                'max_academic_years_to_complete' => 7,
                'version' => 2024,
            ],
        ];

        DB::table('curriculum_structures')->insert($data);
    }
}
