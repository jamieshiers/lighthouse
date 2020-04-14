<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('iso', 2);
            $table->string('name', 80);
            $table->string('nice_name', 80);
            $table->string('iso3', 3);
            $table->integer('numcode', 3);
            $table->integer('phonecode', 8);
            $table->string('emergency', 20);
            $table->string('currency_name', 50);
            $table->string('currency_symbol', 1);
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
        Schema::dropIfExists('countries');
    }
}
