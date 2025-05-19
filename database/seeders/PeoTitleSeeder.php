<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeoTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('peo_titles')->insert([
            [
                'id' => 1,
                'name' => 'Computer Science and Engineering',
                'sub_name' => 'CSE',
                'version' => 2024
            ],
            [
                'id' => 2,
                'name' => 'Computer Science and Engineering',
                'sub_name' => 'CSE',
                'version' => 2024
            ],
            [
                'id' => 3,
                'name' => 'Computer Science and Engineering',
                'sub_name' => 'CSE',
                'version' => 2024
            ],
            [
                'id' => 4,
                'name' => 'Computer Science and Engineering',
                'sub_name' => 'CSE',
                'version' => 2024
            ],
            [
                'id' => 5,
                'name' => 'Electrical and Electronic Engineering',
                'sub_name' => 'EEE',
                'version' => 2024
            ],
            [
                'id' => 6,
                'name' => 'Electrical and Electronic Engineering',
                'sub_name' => 'EEE',
                'version' => 2024
            ],
            [
                'id' => 7,
                'name' => 'Electrical and Electronic Engineering',
                'sub_name' => 'EEE',
                'version' => 2024
            ],
            [
                'id' => 8,
                'name' => 'Electrical and Electronic Engineering',
                'sub_name' => 'EEE',
                'version' => 2024
            ],
        ]);
    }
}
