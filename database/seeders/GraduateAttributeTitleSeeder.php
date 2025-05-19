<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GraduateAttributeTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id' => 1,
                'name' => 'Graduate Attribute 1',
                'sub_name' => 'Sub Graduate Attribute 1',
                'version' => 2024,
            ],
            [
                'id' => 2,
                'name' => 'Graduate Attribute 2',
                'sub_name' => 'Sub Graduate Attribute 2',
                'version' => 2024,
            ],
            [
                'id' => 3,
                'name' => 'Graduate Attribute 3',
                'sub_name' => 'Sub Graduate Attribute 3',
                'version' => 2024,
            ],
            [
                'id' => 4,
                'name' => 'Graduate Attribute 4',
                'sub_name' => 'Sub Graduate Attribute 4',
                'version' => 2024,
            ],
            [
                'id' => 5,
                'name' => 'Graduate Attribute 5',
                'sub_name' => 'Sub Graduate Attribute 5',
                'version' => 2024,
            ],
            [
                'id' => 6,
                'name' => 'Graduate Attribute 6',
                'sub_name' => 'Sub Graduate Attribute 6',
                'version' => 2024,
            ],
            [
                'id' => 7,
                'name' => 'Graduate Attribute 7',
                'sub_name' => 'Sub Graduate Attribute 7',
                'version' => 2024,
            ],
            [
                'id' => 8,
                'name' => 'Graduate Attribute 8',
                'sub_name' => 'Sub Graduate Attribute 8',
                'version' => 2024,
            ],
            [
                'id' => 9,
                'name' => 'Graduate Attribute 9',
                'sub_name' => 'Sub Graduate Attribute 9',
                'version' => 2024,
            ],
            [
                'id' => 10,
                'name' => 'Graduate Attribute 10',
                'sub_name' => 'Sub Graduate Attribute 10',
                'version' => 2024,
            ],
            [
                'id' => 11,
                'name' => 'Graduate Attribute 11',
                'sub_name' => 'Sub Graduate Attribute 11',
                'version' => 2024,
            ],
            [
                'id' => 12,
                'name' => 'Graduate Attribute 12',
                'sub_name' => 'Sub Graduate Attribute 12',
                'version' => 2024,
            ],
            [
                'id' => 13,
                'name' => 'Graduate Attribute 13',
                'sub_name' => 'Sub Graduate Attribute 13',
                'version' => 2024,
            ],
            [
                'id' => 14,
                'name' => 'Graduate Attribute 14',
                'sub_name' => 'Sub Graduate Attribute 14',
                'version' => 2024,
            ],
            [
                'id' => 15,
                'name' => 'Graduate Attribute 15',
                'sub_name' => 'Sub Graduate Attribute 15',
                'version' => 2024,
            ],
            [
                'id' => 16,
                'name' => 'Graduate Attribute 16',
                'sub_name' => 'Sub Graduate Attribute 16',
                'version' => 2024,
            ],
            [
                'id' => 17,
                'name' => 'Graduate Attribute 17',
                'sub_name' => 'Sub Graduate Attribute 17',
                'version' => 2024,
            ],
            [
                'id' => 18,
                'name' => 'Graduate Attribute 18',
                'sub_name' => 'Sub Graduate Attribute 18',
                'version' => 2024,
            ],
            [
                'id' => 19,
                'name' => 'Graduate Attribute 19',
                'sub_name' => 'Sub Graduate Attribute 19',
                'version' => 2024,
            ],
            [
                'id' => 20,
                'name' => 'Graduate Attribute 20',
                'sub_name' => 'Sub Graduate Attribute 20',
                'version' => 2024,
            ],
            [
                'id' => 21,
                'name' => 'Graduate Attribute 21',
                'sub_name' => 'Sub Graduate Attribute 21',
                'version' => 2024,
            ],
            [
                'id' => 22,
                'name' => 'Graduate Attribute 22',
                'sub_name' => 'Sub Graduate Attribute 22',
                'version' => 2024,
            ],
            [
                'id' => 23,
                'name' => 'Graduate Attribute 23',
                'sub_name' => 'Sub Graduate Attribute 23',
                'version' => 2024,
            ],
            [
                'id' => 24,
                'name' => 'Graduate Attribute 24',
                'sub_name' => 'Sub Graduate Attribute 24',
                'version' => 2024,
            ],
            [
                'id' => 25,
                'name' => 'Graduate Attribute 25',
                'sub_name' => 'Sub Graduate Attribute 25',
                'version' => 2024,
            ],
        ];

        DB::table('graduate_attribute_titles')->insert($data);
    }
}
