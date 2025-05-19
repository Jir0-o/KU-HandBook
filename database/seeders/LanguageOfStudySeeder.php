<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageOfStudySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('language_of_studies')->insert([
            ['name' => 'English', 'version' => 2024],
            ['name' => 'Both Bangla and English', 'version' => 2024],
            ['name' => 'Bangla', 'version' => 2024],
        ]);
    }
}
