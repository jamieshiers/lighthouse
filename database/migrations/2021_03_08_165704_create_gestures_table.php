<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGesturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('gestures', function (Blueprint $table) {
            $table->id();
            $table->string('gesture_name', 100);
            $table->decimal('gesture_cost', 16, 2);
            $table->string('gesture_email', 400);
            $table->boolean('booking_required');
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
        Schema::dropIfExists('gestures');
    }
}
