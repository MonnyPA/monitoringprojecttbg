<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailstatusSeeder extends Seeder
{
    public function run(): void
    {
        $detailstatuses = [
            [
                'statusproject_id' => '1',
                'detail' => 'BAK'
            ],
            [
                'statusproject_id' => '2',
                'detail' => 'Pouring'
            ],
            [
                'statusproject_id' => '4',
                'detail' => 'ATP'
            ]
        ];

        DB::table('detailstatuses')->insert($detailstatuses);
    }
}
