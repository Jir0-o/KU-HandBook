<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudyModeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('study_modes')->insert([
            ['name' => 'Full Time', 'version' => 2024],
            ['name' => 'Part Time', 'version' => 2024],
        ]);
    }
}
