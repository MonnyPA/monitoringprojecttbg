<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatasiteSeeder extends Seeder
{
    public function run(): void
    {
        $datasites = [
            [
                'site_id' => 'AMB098',
                'site_name' => 'Madrasah Ambon',
                'long' => '128.66376288',
                'lat' => '-5.98766753',
                'kabupaten' => 'Kota Ambon',
                'mitra_id' => '1',
                'statusproject_id' => '2',
                'catatan' => 'On the track'
            ],
            [
                'site_id' => 'NRL005',
                'site_name' => 'Waefusi 2',
                'long' => '128.66376288',
                'lat' => '-5.98766753',
                'kabupaten' => 'Kab. Namrole',
                'mitra_id' => '2',
                'statusproject_id' => '2',
                'catatan' => 'On the track'
            ],
            [
                'site_id' => 'NLA043',
                'site_name' => 'Namlea Ilah',
                'long' => '128.66376288',
                'lat' => '-5.98766753',
                'kabupaten' => 'Kab. Buru',
                'mitra_id' => '3',
                'statusproject_id' => '2',
                'catatan' => 'On the track'
            ]
        ];

        DB::table('datasites')->insert($datasites);
    }
}
