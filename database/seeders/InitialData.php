<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InitialData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            [
                'name' => 'Brian'
            ], [
                'name' => 'Bruno'
            ], [
                'name' => 'Otavio'
            ]
        ]);

        DB::table('channel')->insert([
            [
                'name' => 'History'
            ], [
                'name' => 'MTV'
            ], [
                'name' => 'SBT'
            ]
        ]);

        DB::table('watched_time')->insert([
            ['user_id' => 1, 'channel_id' => 1, 'minutes' => 100.0, 'date' => '2021-01-01 00:00:00.0'],
            ['user_id' => 1, 'channel_id' => 1, 'minutes' => 180.0, 'date' => '2021-01-02 00:00:00.0'],
            ['user_id' => 1, 'channel_id' => 1, 'minutes' => 150.0, 'date' => '2021-01-03 00:00:00.0'],
            ['user_id' => 1, 'channel_id' => 1, 'minutes' => 110.0, 'date' => '2021-01-04 00:00:00.0'],
            ['user_id' => 2, 'channel_id' => 1, 'minutes' => 110.0, 'date' => '2021-01-04 00:00:00.0'],
            ['user_id' => 2, 'channel_id' => 1, 'minutes' => 140.0, 'date' => '2021-01-05 00:00:00.0'],
            ['user_id' => 2, 'channel_id' => 1, 'minutes' => 190.0, 'date' => '2021-01-06 00:00:00.0'],
            ['user_id' => 3, 'channel_id' => 1, 'minutes' => 170.0, 'date' => '2021-01-01 00:00:00.0'],
            ['user_id' => 3, 'channel_id' => 1, 'minutes' => 120.0, 'date' => '2021-01-02 00:00:00.0'],
            ['user_id' => 3, 'channel_id' => 1, 'minutes' => 130.0, 'date' => '2021-01-03 00:00:00.0'],
            ['user_id' => 1, 'channel_id' => 2, 'minutes' => 130.0, 'date' => '2021-01-03 00:00:00.0'],
            ['user_id' => 2, 'channel_id' => 2, 'minutes' => 130.0, 'date' => '2021-01-03 00:00:00.0'],
            ['user_id' => 3, 'channel_id' => 2, 'minutes' => 125.0, 'date' => '2021-01-03 00:00:00.0'],
            ['user_id' => 1, 'channel_id' => 2, 'minutes' => 110.0, 'date' => '2021-01-05 00:00:00.0'],
            ['user_id' => 1, 'channel_id' => 2, 'minutes' => 100.0, 'date' => '2021-01-01 00:00:00.0'],
            ['user_id' => 2, 'channel_id' => 2, 'minutes' => 120.0, 'date' => '2021-01-01 00:00:00.0'],
            ['user_id' => 3, 'channel_id' => 2, 'minutes' => 120.0, 'date' => '2021-01-01 00:00:00.0']
        ]);
    }
}
