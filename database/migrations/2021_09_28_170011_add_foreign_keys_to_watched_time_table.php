<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToWatchedTimeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('watched_time', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('user');
            $table->foreign('channel_id')->references('id')->on('channel');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('watched_time', function (Blueprint $table) {
            $table->dropForeign('watched_time_user_id_foreign');
            $table->dropForeign('watched_time_channel_id_foreign');
        });
    }
}
