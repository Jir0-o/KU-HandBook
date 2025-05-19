<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UniversitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('universities')->insert([
            [
                'id' => 1,
                'name' => 'Khulna University',
                'vision' => 'Creation of global leaders who will contribute to make knowledge-based just society through accelerating inclusive and transformative growth of Bangladesh and the world. The university aims to achieve this vision through scholarly enquiry and contribution to the global knowledge pool.',
                'location' => 'Khulna University (Bengali: খুলনা বিশ্ববিদ্যালয়) is a public university in Gollamari, Khulna, Bangladesh. It is near the river Moyur, beside the Sher e Bangla Road (Khulna-Satkhira highway). The academic programs of Khulna University started on 31 August 1991 with 80 students in four disciplines. As of 2023, the university has 29 disciplines under 8 schools.',
                'web' => 'https://ku.ac.bd/',
                'Address' => 'Sher-E-Bangla Rd, Khulna 9208, Bangladesh',
                'Phone' => '',
                'version' => 2024,
            ],
        ]);
    }
}
