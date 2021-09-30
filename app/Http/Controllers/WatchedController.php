<?php

namespace App\Http\Controllers;

use App\Models\Channel;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class WatchedController extends Controller
{
    public $fullData = [];

    public function show()
    {
        $channels = Channel::all();
        $ranking = [];

        try {
            $data = DB::table('watched_time')
                ->join('user', 'watched_time.user_id', '=', 'user.id')
                ->join('channel', 'watched_time.channel_id', '=', 'channel.id')
                ->select('watched_time.*', DB::raw('minutes', 'date'), 'user.name as user_name', 'channel.name as channel_name')
                ->orderBy('minutes', 'DESC')
                ->get();


            foreach ($channels as $channel) {
                foreach ($data as $item) {
                    if ($channel['id'] === $item->{'channel_id'}) {
                        $ranking[$channel['name']][] = $item;
                    }
                }
            }

            return response()->json([
                'error' => '',
                'data' => $ranking
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'error' => $th->getMessage(),
                'data' => []
            ], 400);
        }
    }
}
