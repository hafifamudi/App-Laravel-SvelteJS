<?php

namespace Database\Seeders;

use App\Models\Managers;
use Illuminate\Database\Seeder;

class ManagersTableSeeder extends Seeder
{

    public function run()
    {
       $managers = [
           [
             'clubs_id' => 1,
             'photo' => 'https://resources.premierleague.com/premierleague/photos/players/250x250/man279.png',
             'name' => 'Thomae Lesik',
             'old' => '47',
             'nationality' => 'Germany',
             'created_at' => '2021-05-21 00:00:00',
             'updated_at' => '2021-05-21 00:00:00'
            ],
            [
                'clubs_id' => 2,
                'photo' => 'https://resources.premierleague.com/premierleague/photos/players/250x250/man279.png',
                'name' => 'Thomas Lesik',
                'old' => '47',
                'nationality' => 'France',
                'created_at' => '2021-05-21 00:00:00',
                'updated_at' => '2021-05-21 00:00:00'
            ],
            [
                'clubs_id' => 3,
                'photo' => 'https://resources.premierleague.com/premierleague/photos/players/250x250/man279.png',
                'name' => 'Thomas Yanto',
                'old' => '47',
                'nationality' => 'Lebanon',
                'created_at' => '2021-05-21 00:00:00',
                'updated_at' => '2021-05-21 00:00:00'
            ],
        ];

        Managers::insert($managers);

    }
}
