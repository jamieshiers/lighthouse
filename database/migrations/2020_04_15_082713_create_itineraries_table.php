<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItinerariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itineraries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cruise_number', 10);
            $table->integer('day_number')->unsigned();
            $table->unsignedBigInteger('port_id');
            $table->unsignedBigInteger('dress_id');
            $table->date('day_date');
            $table->string('berth', 100)->nullable();
            $table->datetime('arrival')->nullable();
            $table->datetime('departure')->nullable();
            $table->integer('offset')->nullable();
            $table->datetime('clock_change_time')->nullable;
            $table->datetime('sunrise')->nullable();
            $table->datetime('sunset')->nullable();
            $table->string('weather_description', 50)->nullable();
            $table->float('weather_temperature')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itineraries');
    }
}
