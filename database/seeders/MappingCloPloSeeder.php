<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MappingCloPloSeeder extends Seeder
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
                'clo_id' => 1,
                'plo_ids' => '1,8,3',
                'version' => 2024,
            ],
            [
                'id' => 2,
                'clo_id' => 2,
                'plo_ids' => '1,2,8,5',
                'version' => 2024,
            ],
            [
                'id' => 3,
                'clo_id' => 3,
                'plo_ids' => '1,8,2',
                'version' => 2024,
            ],
            [
                'id' => 4,
                'clo_id' => 4,
                'plo_ids' => '1,8,7',
                'version' => 2024,
            ],
            [
                'id' => 5,
                'clo_id' => 5,
                'plo_ids' => '1,2,8,4',
                'version' => 2024,
            ],
            [
                'id' => 6,
                'clo_id' => 6,
                'plo_ids' => '3,4,5,1',
                'version' => 2024,
            ],
        ];

        DB::table('mapping_clo_plos')->insert($data);
    }
}
