<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MappingCloStrategySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['clo_id' => 1, 'strategy_id' => 1, 'description' => 'Lecture and Presentation', 'version' => 2024],
            ['clo_id' => 1, 'strategy_id' => 2, 'description' => 'Continuous Assessment, Assignment and Viva.', 'version' => 2024],
            ['clo_id' => 2, 'strategy_id' => 1, 'description' => 'Lecture and Presentation', 'version' => 2024],
            ['clo_id' => 3, 'strategy_id' => 1, 'description' => 'Lecture and Presentation', 'version' => 2024],
            ['clo_id' => 4, 'strategy_id' => 1, 'description' => 'Lecture and Presentation', 'version' => 2024],
            ['clo_id' => 5, 'strategy_id' => 1, 'description' => 'Lecture and Presentation', 'version' => 2024],
            ['clo_id' => 6, 'strategy_id' => 1, 'description' => 'Lecture and Presentation', 'version' => 2024],
            ['clo_id' => 2, 'strategy_id' => 2, 'description' => 'Continuous Assessment, Assignment and Viva.', 'version' => 2024],
            ['clo_id' => 3, 'strategy_id' => 2, 'description' => 'Continuous Assessment, Assignment and Viva.', 'version' => 2024],
            ['clo_id' => 4, 'strategy_id' => 2, 'description' => 'Continuous Assessment, Assignment and Viva.', 'version' => 2024],
            ['clo_id' => 5, 'strategy_id' => 2, 'description' => 'Continuous Assessment, Assignment and Viva.', 'version' => 2024],
            ['clo_id' => 6, 'strategy_id' => 2, 'description' => 'Continuous Assessment, Assignment and Viva.', 'version' => 2024],
        ];

        DB::table('mapping_clo_strategies')->insert($data);
    }
}