<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuestLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guest_logs', function (Blueprint $table) {
            $table->string('log_number', 20)->primary();
            $table->integer('user_id')->unsigned();
            $table->string('booking_reference', 10);
            $table->string('short_description', 140);
            $table->enum('status', ["Closed","Open"]);
            $table->integer('guest_emotion');
            $table->integer('opened_by')->unsigned();
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
        Schema::dropIfExists('guest_logs');
    }
}
