<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseLearningMaterialSeeder extends Seeder
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
                'course_id' => 1,
                'learning_material_type_id' => 1,
                'name' => 'V. Rajaraman. Fundamentals of Computers. PHI Learning Private Limited, India, 5th Edition, 2010.
A. K. Gupta and S. K. Sarkar. Elements of Computer Science. S. Chand and Company Ltd., India, 3rd Edition, 2004.',
                'version' => 2024,
            ],
            [
                'id' => 2,
                'course_id' => 1,
                'learning_material_type_id' => 2,
                'name' => 'P. Norotn and J. M. Goodman. Peter Norton\'s Inside the PC. Pearson Education, 8th Edition, US, 1999.
C. Frye and J. Lambert. Microsoft Office 2016 Step by Step. Pearson Education, 2015.',
                'version' => 2024,
            ],
        ];

        DB::table('course_learning_materials')->insert($data);
    }
}
