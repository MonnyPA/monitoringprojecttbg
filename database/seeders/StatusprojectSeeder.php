<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusprojectSeeder extends Seeder
{
    public function run(): void
    {
        $statusprojects = [
            [
                'status_name' => 'Sitac',
                'description' => 'Proses Akuisisi Lahan untuk Pembangunan Tower'
            ],
            [
                'status_name' => 'CME',
                'description' => 'Proses Pembangunan Tower'
            ],
            [
                'status_name' => 'SFRI',
                'description' => 'Erection Done, RBS Done, Minus PLN'
            ],
            [
                'status_name' => 'RFI',
                'description' => 'Erection Done, RBS Done, PLN Connected'
            ]
        ];

        DB::table('statusprojects')->insert($statusprojects);
    }
}
