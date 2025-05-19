<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BnqfLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $levels = [
            ['university_id' => 1, 'name' => '1', 'version' => 2024],
            ['university_id' => 1, 'name' => '2', 'version' => 2024],
            ['university_id' => 1, 'name' => '3', 'version' => 2024],
            ['university_id' => 1, 'name' => '4', 'version' => 2024],
            ['university_id' => 1, 'name' => '5', 'version' => 2024],
            ['university_id' => 1, 'name' => '6', 'version' => 2024],
            ['university_id' => 1, 'name' => '7', 'version' => 2024],
        ];

        // Insert data into the names table
        DB::table('bnqf_levels')->insert($levels);
    }
}

