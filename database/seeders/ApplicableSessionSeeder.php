<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApplicableSessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sessions = [
            ['university_id' => 1, 'name' => '2021-22 and onwards', 'version' => 2024],
        ];

        // Insert data into the applicable_sessions table
        DB::table('applicable_sessions')->insert($sessions);
    }
}

