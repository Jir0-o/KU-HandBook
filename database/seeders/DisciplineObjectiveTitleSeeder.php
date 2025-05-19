<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DisciplineObjectiveTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id' => 1,
                'name' => 'The objectives of Forestry and Wood Technology discipline include conducting education and research in the field of
                forest science and wood technology through various programs, such as Bachelor, Masters and PhD, which will contribute
                to the sustainable management, conservation, utilization and governance of forest and forest resources.',
                'version' => 2024,
                'is_active' => 1,
            ],
            [
                'id' => 2,
                'name' => 'It is given that all students obtaining certified degrees from Bangla literature should be well trained in literary concepts.
                However, to be effective and productive reader, researcher and analyst, students need to master a variety of skills that go
                beyond course content alone. The objectives of the Discipline are categorized in the following dimensions:
                a. knowledge and understanding
                b. analytical and creative skills
                c. values, attitudes and leadership',
                'version' => 2024,
                'is_active' => 1,
            ],
            [
                'id' => 3,
                'name' => 'The objectives of Mass Communication and Journalism discipline are to offer quality education and conduct research in
                the field of Communication, Media, and Journalism through various programs, such as Bachelor, Masters and PhD, which
                will contribute to human communication, journalism, sustainable media management, digital media industry, and
                development resources.',
                'version' => 2024,
                'is_active' => 1,
            ],
            [
                'id' => 4,
                'name' => 'Economics Discipline is intended to produce high quality graduates who are intellectually and technically competent in
                building global careers in various fields of economics; and, thus, contribute to welfare of mankind.
                The objectives of Economics discipline include the following:',
                'version' => 2024,
                'is_active' => 1,
            ],
            [
                'id' => 5,
                'name' => 'It is given that all students obtaining certified degrees from Bangla literature should be well trained in literary concepts.
                However, to be effective and productive reader, researcher and analyst, students need to master a variety of skills that go
                beyond course content alone. The objectives of the Discipline are categorized in the following dimensions:
                a. knowledge and understanding
                b. analytical and creative skills
                c. values, attitudes and leadership',
                'version' => 2024,
                'is_active' => 1,
            ],
            [
                'id' => 6,
                'name' => 'The objectives of Forestry and Wood Technology discipline include conducting education and research in the field of
                forest science and wood technology through various programs, such as Bachelor, Masters and PhD, which will contribute
                to the sustainable management, conservation, utilization and governance of forest and forest resources.',
                'version' => 2024,
                'is_active' => 1,
            ],
            [
                'id' => 7,
                'name' => 'Economics Discipline is intended to produce high quality graduates who are intellectually and technically competent in
                building global careers in various fields of economics; and, thus, contribute to welfare of mankind.
                The objectives of Economics discipline include the following:',
                'version' => 2024,
                'is_active' => 1,
            ],
            // Add other Discipline Objective data here
        ];

        DB::table('discipline_objective_titles')->insert($data);
    }
}
