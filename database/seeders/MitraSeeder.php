<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MitraSeeder extends Seeder
{
    public function run(): void
    {
        $mitras = [
            [
                'mit_name' => 'Amala',
                'pm_name' => 'Ismail',
                'hp_pm' => '082184706382',
                'waspang_name' => 'Andi',
                'hp_waspang' => '08114800685'
            ],
            [
                'mit_name' => 'Dwipanca',
                'pm_name' => 'Cindy',
                'hp_pm' => '082184706382',
                'waspang_name' => 'Adi',
                'hp_waspang' => '08114800685'
            ],
            [
                'mit_name' => 'Miraj',
                'pm_name' => 'Rustam',
                'hp_pm' => '082184706382',
                'waspang_name' => 'Baron',
                'hp_waspang' => '08114800685'
            ]
        ];

        DB::table('mitras')->insert($mitras);
    }
}
