<?php

namespace Database\Seeders;

use App\Models\Matches;
use Illuminate\Database\Seeder;

class MatchesTableSeeder extends Seeder
{

    public function run()
    {
        $matches = [
            [
                'clubs_id' => 1,
                'rivals_id' => 2,
                'schedule' => '2021-05-06 00:00:00',
                'created_at' => '2021-05-21 00:00:00',
                'updated_at' => '2021-05-21 00:00:00',
            ],
            [
                'clubs_id' => 2,
                'rivals_id' => 1,
                'schedule' => '2021-05-06 00:00:00',
                'created_at' => '2021-05-21 00:00:00',
                'updated_at' => '2021-05-21 00:00:00',
            ],
            [
                'clubs_id' => 3,
                'rivals_id' => 2,
                'schedule' => '2021-05-06 00:00:00',
                'created_at' => '2021-05-21 00:00:00',
                'updated_at' => '2021-05-21 00:00:00',
            ],
        ];

        Matches::insert($matches);

    }
}
