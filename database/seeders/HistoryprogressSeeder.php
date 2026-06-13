<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HistoryprogressSeeder extends Seeder
{
    public function run(): void
    {
        $historyprogresses = [
            [
                'datasite_id' => '1',
                'detail' => 'Plan Erection 07/06'
            ],
            [
                'datasite_id' => '3',
                'detail' => 'Plan PLN Connected 07/06'
            ],
            [
                'datasite_id' => '2',
                'detail' => 'Plan RFI 07/06'
            ]
        ];

        DB::table('historyprogresses')->insert($historyprogresses);
    }
}
