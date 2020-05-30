<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeginKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('itineraries', function (Blueprint $table) {
            $table->foreign('port_id')->references('id')->on('ports');
            $table->foreign('dress_id')->references('id')->on('dress_codes');
        });

        Schema::table('ports', function (Blueprint $table) {
            $table->foreign('country_id')->references('id')->on('countries');
        });

        Schema::table('agents', function (Blueprint $table) {
            $table->foreign('port_id')->references('id')->on('ports');
        });

        Schema::table('guest_logs', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('booking_reference')->references('booking_reference')->on('guests');
            $table->foreign('opened_by')->references('id')->on('users');
        });

        Schema::table('guest_log_comments', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('guestLog_id')->references('log_number')->on('guest_logs');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
