<?php

namespace Database\Seeders;

use App\Models\Players;
use Illuminate\Database\Seeder;

class PlayersTableSeeder extends Seeder
{
    public function run()
    {
            $players = [
                [
                  'clubs_id' => 1,
                  'photo' => 'https://resources.premierleague.com/premierleague/photos/players/250x250/man279.png',
                  'name' => 'Yanto Lesik',
                  'height' => '180',
                  'position' => 'Forward',
                  'created_at' => '2021-05-21 00:00:00',
                  'updated_at' => '2021-05-21 00:00:00'
                 ],
                 [
                    'clubs_id' => 2,
                    'photo' => 'https://resources.premierleague.com/premierleague/photos/players/250x250/man279.png',
                    'name' => 'Lian Lesik',
                    'height' => '190',
                    'position' => 'Forward',
                    'created_at' => '2021-05-21 00:00:00',
                    'updated_at' => '2021-05-21 00:00:00'
                   ],
                   [
                    'clubs_id' => 3,
                    'photo' => 'https://resources.premierleague.com/premierleague/photos/players/250x250/man279.png',
                    'name' => 'Giant Lesik',
                    'height' => '170',
                    'position' => 'Forward',
                    'created_at' => '2021-05-21 00:00:00',
                    'updated_at' => '2021-05-21 00:00:00'
                   ],
             ];
     
             Players::insert($players);
    }
}
