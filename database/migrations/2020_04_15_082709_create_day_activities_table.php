<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDayActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('day_activities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('promotion_id');
            $table->unsignedBigInteger('venue_id');
            $table->dateTimeTz('start');
            $table->dateTimeTz('finish');
            $table->string('show_end_time');
            $table->string('bandsheet');
            $table->string('horizon');
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
        Schema::dropIfExists('day_activities');
    }
}
