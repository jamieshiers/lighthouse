<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDayPromotionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('day_promotions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('promotion_id');
            $table->integer('venue_id')->unsigned();
            $table->decimal('expected_revenue', 10,2);
            $table->decimal('achieved_revenue', 10,2)->nullable();
            $table->integer('uptake')->nullable();
            $table->integer('max_number')->nullable();
            $table->integer('user_id')->unsigned();
            $table->dateTime('start');
            $table->dateTime('finish');
            $table->boolean('show_end_time');
            $table->boolean('bandsheet');
            $table->boolean('horizon');
            $table->timestamps();
        });

        Schema::table('day_promotions', function (Blueprint $table) {
            $table->foreign('promotion_id')->references('id')->on('promotions');
            $table->foreign('venue_id')->references('id')->on('rooms');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('day_promotions');
    }
}
