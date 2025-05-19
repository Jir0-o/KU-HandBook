<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CurriculumTermDurationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => 1, 'name' => 'Teaching and Learning', 'version' => 2024],
            ['id' => 2, 'name' => 'Preparatory Leave', 'version' => 2024],
            ['id' => 3, 'name' => 'Term Final Examination', 'version' => 2024],
            ['id' => 4, 'name' => 'Term Break', 'version' => 2024],
        ];

        DB::table('curriculum_term_durations')->insert($data);
    }
}

