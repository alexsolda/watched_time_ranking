<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->notNullValue();
        });

        Schema::create('channel', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->notNullValue();
        });

        Schema::create('watched_time', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('channel_id');
            $table->float('minutes')->notNullValue();
            $table->dateTime('date')->notNullValue();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
        Schema::dropIfExists('channel');
        Schema::dropIfExists('watched_time');
    }
}
