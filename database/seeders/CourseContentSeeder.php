<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'course_id' => 1,
                'description' => 'Introduction to Computer: Introduction, types and generations of computers, basic organization and functional units of computers.',
                'clo_ids' => '1',
                'version' => 2024,
            ],
            [
                'id' => 2,
                'course_id' => 1,
                'description' => 'Number Systems and Code: Binary, octal, decimal and hexadecimal numbers, conversion between different number systems, binary arithmetic, BCD and ASCII codes, integer and floating-point number representation;',
                'clo_ids' => '2',
                'version' => 2024,
            ],
            [
                'id' => 3,
                'course_id' => 3,
                'description' => 'Hardware: Operations and functions of processor, Memory, various I/O devices - Keyboard, mouse, OMR, OCR, MICR, CD-ROM, printers, CRTs, computer microfilm, floppy disks, hard disks, magnetic tapes, touch screen, touch pad, light pen, optical mouse, USB devices, Mobile HDD.',
                'clo_ids' => '1',
                'version' => 2024,
            ],
            [
                'id' => 4,
                'course_id' => 2,
                'description' => 'Programming Language: Machine language, assembly language, mid-level language, high level language; Language translators: interpreters, assemblers and compilers;',
                'clo_ids' => '3',
                'version' => 2024,
            ],
            [
                'id' => 5,
                'course_id' => 1,
                'description' => 'Software: Types of software, system software and application software;',
                'clo_ids' => '4',
                'version' => 2024,
            ],
            [
                'id' => 6,
                'course_id' => 1,
                'description' => 'Operating Systems Software: DOS, Windows, UNIX and system utilities.',
                'clo_ids' => '5',
                'version' => 2024,
            ],
            [
                'id' => 7,
                'course_id' => 2,
                'description' => 'Program Development Stages: Flow charts, logic and pseudo code',
                'clo_ids' => '3,4',
                'version' => 2024,
            ],
            [
                'id' => 8,
                'course_id' => 2,
                'description' => 'Computer Network and Security: LAN, MAN, WAN, and Internet; Viruses, Trojan, Authentication.',
                'clo_ids' => '5',
                'version' => 2024,
            ],
            [
                'id' => 9,
                'course_id' => 3,
                'description' => 'Office Management Tools: MS Office',
                'clo_ids' => '6',
                'version' => 2024,
            ],
            // Add other course content data here
        ];

        DB::table('course_contents')->insert($data);
    }
}
