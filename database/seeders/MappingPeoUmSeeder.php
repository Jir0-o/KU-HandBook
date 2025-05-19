<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MappingPeoUmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['um_id' => 1, 'peo_id' => 1],
            ['um_id' => 1, 'peo_id' => 2],
            ['um_id' => 1, 'peo_id' => 3],
            ['um_id' => 1, 'peo_id' => 4],
            ['um_id' => 2, 'peo_id' => 1],
            ['um_id' => 2, 'peo_id' => 2],
            ['um_id' => 2, 'peo_id' => 3],
            ['um_id' => 2, 'peo_id' => 4],
            ['um_id' => 3, 'peo_id' => 1],
            ['um_id' => 3, 'peo_id' => 2],
            ['um_id' => 3, 'peo_id' => 3],
            ['um_id' => 3, 'peo_id' => 4],
        ];

        DB::table('mapping_peo_ums')->insert($data);
    }
}
