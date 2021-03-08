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
    public function up(): void
    {
        Schema::create('guest_logs', function (Blueprint $table) {
            $table->id();
            $table->string('log_number', 100);
            $table->integer('user_id');
            $table->string('booking_reference', 8);
            $table->text('short_description');
            $table->enum('status', ["open","closed"]);
            $table->integer('guest_emotion');
            $table->integer('opened_by');
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
        Schema::dropIfExists('guest_logs');
    }
}
