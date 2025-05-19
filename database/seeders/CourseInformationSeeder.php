<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseInformationSeeder extends Seeder
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
                'code' => '0714 02 CSE 1100',
                'year_id' => 1,
                'term_id' => 1,
                'name' => 'Computer Fundamentals Laboratory',
                'status' => 'core',
                'course_area_id' => 3,
                'course_type_id' => 2,
                'credit' => 1.5,
                'total_hours' => 3,
                'pre_requisite' => '',
                'description' => 'This course is designed to provide fundamental understanding of computer: hardware, and software to better equip students for further study',
                'version' => 2024,
            ],
            [
                'id' => 2,
                'degree_program_id' => 6,
                'code' => '0916 11 Phar 1101',
                'year_id' => 1,
                'term_id' => 1,
                'name' => 'Pharmacognosy-I',
                'status' => 'Optional',
                'course_area_id' => 3,
                'course_type_id' => 1,
                'credit' => 3,
                'total_hours' => 3,
                'pre_requisite' => '3',
                'description' => 'Pharmacognosy deals with the detailed study of drugs of natural origin. Drugs of natural origin play an invaluable role in the drug discovery process. The implementation of the achieved knowledge of pharmacognosy will encourage the local community to the commercial cultivation of medicinal plants for the socio-economic development of the country.',
                'version' => 2024,
            ],
            [
                'id' => 3,
                'degree_program_id' => 1,
                'code' => '0541 02 Math 1151',
                'year_id' => 1,
                'term_id' => 1,
                'name' => 'Calculus',
                'status' => 'core',
                'course_area_id' => 1,
                'course_type_id' => 1,
                'credit' => 3,
                'total_hours' => 3,
                'pre_requisite' => '3',
                'description' => 'This course intends to provide a clear understanding of the ideas of Calculus as a solid foundation for subsequent courses in mathematics and other disciplines as well as for direct application to real life applications.',
                'version' => 2024,
            ],
            // Add other course information data here
        ];

        DB::table('course_infos')->insert($data);
    }
}
