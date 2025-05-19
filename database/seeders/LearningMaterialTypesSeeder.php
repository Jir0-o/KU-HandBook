<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LearningMaterialTypesSeeder extends Seeder
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
                'university_id' => 1,
                'name' => 'Recommended Readings',
                'version' => 2024,
            ],
            [
                'id' => 2,
                'university_id' => 1,
                'name' => 'Supplementary Readings',
                'version' => 2024,
            ],
        ];

        DB::table('learning_material_types')->insert($data);
    }
}
