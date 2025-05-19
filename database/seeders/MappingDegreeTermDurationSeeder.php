<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MappingDegreeTermDurationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['degree_program_id' => 1, 'term_duration_id' => 1, 'value' => 14, 'unit' => 'Weeks', 'version' => 2024],
            ['degree_program_id' => 1, 'term_duration_id' => 2, 'value' => 2, 'unit' => 'Weeks', 'version' => 2024],
            ['degree_program_id' => 1, 'term_duration_id' => 3, 'value' => 4, 'unit' => 'Weeks', 'version' => 2024],
            ['degree_program_id' => 1, 'term_duration_id' => 4, 'value' => 2, 'unit' => 'Weeks', 'version' => 2024],
            ['degree_program_id' => 8, 'term_duration_id' => 1, 'value' => 14, 'unit' => 'Weeks', 'version' => 2024],
            ['degree_program_id' => 8, 'term_duration_id' => 2, 'value' => 2, 'unit' => 'Weeks', 'version' => 2024],
            ['degree_program_id' => 8, 'term_duration_id' => 3, 'value' => 4, 'unit' => 'Weeks', 'version' => 2024],
            ['degree_program_id' => 8, 'term_duration_id' => 4, 'value' => 2, 'unit' => 'Weeks', 'version' => 2024],
        ];

        DB::table('mapping_degree_term_durations')->insert($data);
    }
}

