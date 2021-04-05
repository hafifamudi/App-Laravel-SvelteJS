<?php

namespace Database\Seeders;

use App\Models\Stadiums;
use Illuminate\Database\Seeder;

class StadiumsTableSeeder extends Seeder
{
   
    public function run()
    {
        $stadiums = [
            [
                'name' => 'Stanford Bridge',
                'capacity' => 40000,
                'address' => 'Stanford Bridge, US',
                'created_at' => '2021-05-21 00:00:00',
                'updated_at' => '2021-05-21 00:00:00',
            ],
            [
                'name' => 'Stanford Kontoru',
                'capacity' => 50000,
                'address' => 'Stanford Bridge, LX',
                'created_at' => '2021-05-21 00:00:00',
                'updated_at' => '2021-05-21 00:00:00',
            ],
            [
                'name' => 'Stanford Leksi',
                'capacity' => 30000,
                'address' => 'Stanford Bridge, XL',
                'created_at' => '2021-05-21 00:00:00',
                'updated_at' => '2021-05-21 00:00:00',
            ],
        ];

        Stadiums::insert($stadiums);

    }
}
