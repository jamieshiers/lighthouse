<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('guests', function (Blueprint $table) {
            $table->string('booking_reference', 8);
            $table->string('cabin_number', 6);
            $table->integer('berth');
            $table->string('first_name', 400);
            $table->string('last_name', 400);
            $table->date('birthday');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('guests');
    }
}
