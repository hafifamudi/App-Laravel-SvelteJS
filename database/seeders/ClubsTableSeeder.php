<?php

namespace Database\Seeders;

use App\Models\Clubs;
use Illuminate\Database\Seeder;

class ClubsTableSeeder extends Seeder
{
   
    public function run()
    {
        $clubs = [
            [
                'stadiums_id' => '1',
                'name' => 'Chelsea FC',
                'logo' => 'https://resources.premierleague.com/premierleague/badges/t8.svg',
                'url' => 'www.chelseafc.com',
                'thropy' => 19,
                'created_at' => '2021-05-21 00:00:00',
                'updated_at' => '2021-05-21 00:00:00',
            ],
            [
                'stadiums_id' => '2',
                'name' => 'Arsenal FC',
                'logo' => 'https://resources.premierleague.com/premierleague/badges/t8.svg',
                'url' => 'www.chelseafc.com',
                'thropy' => 21,
                'created_at' => '2021-05-21 00:00:00',
                'updated_at' => '2021-05-21 00:00:00',
            ],
            [
                'stadiums_id' => '3',
                'name' => 'Lesik FC',
                'logo' => 'https://resources.premierleague.com/premierleague/badges/t8.svg',
                'url' => 'www.chelseafc.com',
                'thropy' => 10,
                'created_at' => '2021-05-21 00:00:00',
                'updated_at' => '2021-05-21 00:00:00',
            ],
        ];

        Clubs::insert($clubs);

    }   
}
