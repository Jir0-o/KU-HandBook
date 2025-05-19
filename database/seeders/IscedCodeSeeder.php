<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IscedCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('isced_codes')->insert([
            ['name' => '0413', 'version' => 2024],
            ['name' => '0714', 'version' => 2024],
            ['name' => '0821', 'version' => 2024],
            ['name' => '0521', 'version' => 2024],
            ['name' => '0916', 'version' => 2024],
            ['name' => '0388', 'version' => 2024],
            ['name' => '0542', 'version' => 2024],
            ['name' => '0888', 'version' => 2024],
            ['name' => '0541', 'version' => 2024],
            ['name' => '0222', 'version' => 2024],
            ['name' => '0232', 'version' => 2024],
            ['name' => '0231', 'version' => 2024],
            ['name' => '0213', 'version' => 2024],
            ['name' => '0321', 'version' => 2024],
            ['name' => '0831', 'version' => 2024],
            ['name' => '0111', 'version' => 2024],
            ['name' => '0311', 'version' => 2024],
            ['name' => '0421', 'version' => 2024],
            ['name' => '0531', 'version' => 2024],
            ['name' => '0533', 'version' => 2024],
            ['name' => '0731', 'version' => 2024],
            ['name' => '0314', 'version' => 2024],
        ]);
    }
}
