<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGesturesToGuestLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('guest_logs', function (Blueprint $table) {
            $table->bigInteger('gesture_id')->nullable()->unsigned();
            $table->text('gesture_notes')->nullable();
            $table->foreign('gesture_id')->references('id')->on('gestures');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('guest_log', function (Blueprint $table) {
            //
        });
    }
}
