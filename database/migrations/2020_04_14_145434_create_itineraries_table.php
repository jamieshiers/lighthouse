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
            $table->integer('day_number', 5);
            $table->unsignedBigInteger('port_id');
            $table->unsignedBigInteger('dress_id');
            $table->timestamp('arrival')->nullable();
            $table->timestamp('departure')->nullable();
            $table->integer('offset', 3)->nullable();
            $table->timestamp('sunrise')->nullable();
            $table->timestamp('sunset')->nullable();
            $table->string('weather', 200)->nullable();
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
