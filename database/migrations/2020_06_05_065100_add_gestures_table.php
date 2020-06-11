<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGesturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('gestures', function(Blueprint $table) {
            $table->id();
            $table->string('gesture_name');
            $table->enum('gesture_type', ['Reservation', 'Credit']);
            $table->boolean('booking_required');
            $table->string('booking_email')->nullable();
            $table->text('booking_instruction')->nullable();
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
