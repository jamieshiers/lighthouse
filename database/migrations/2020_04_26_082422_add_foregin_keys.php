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

        Schema::table('', function (Blueprint $table) {
            $table->foreign('port_id')->references('id')->on('ports');
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
