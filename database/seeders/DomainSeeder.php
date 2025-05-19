<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DomainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Inserting domain data
        DB::table('domains')->insert([
            ['id' => 1, 'name' => 'Fundamental', 'version' => 2024],
            ['id' => 2, 'name' => 'Thinking', 'version' => 2024],
            ['id' => 3, 'name' => 'Social', 'version' => 2024],
            ['id' => 4, 'name' => 'Personal', 'version' => 2024],
        ]);
    }
}
