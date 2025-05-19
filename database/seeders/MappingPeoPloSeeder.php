<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MappingPeoPloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mapping_peo_plos')->insert([
            [
                'id' => 1,
                'peo_id' => 1,
                'plo_id' => 1,
            ],
            [
                'id' => 2,
                'peo_id' => 8,
                'plo_id' => 2,
            ],
            [
                'id' => 3,
                'peo_id' => 6,
                'plo_id' => 4,
            ],
            [
                'id' => 4,
                'peo_id' => 1,
                'plo_id' => 5,
            ],
            [
                'id' => 5,
                'peo_id' => 1,
                'plo_id' => 6,
            ],
            [
                'id' => 6,
                'peo_id' => 1,
                'plo_id' => 3,
            ],
            [
                'id' => 7,
                'peo_id' => 6,
                'plo_id' => 1,
            ],
            [
                'id' => 8,
                'peo_id' => 7,
                'plo_id' => 5,
            ],
            [
                'id' => 9,
                'peo_id' => 3,
                'plo_id' => 2,
            ],
            // Add the rest of the data here
            [
                'id' => 10,
                'peo_id' => 2,
                'plo_id' => 1,
            ],
            // Add the rest of the data here
            [
                'id' => 30,
                'peo_id' => 2,
                'plo_id' => 2,
            ],
            // Add the rest of the data here
            // Repeat this pattern for the remaining mapping data
        ]);
    }
}
