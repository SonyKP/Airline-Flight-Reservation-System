<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAirlinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('airlines', function (Blueprint $table) {
            $table->id();
            $table->string('flightno');
            $table->string('flightname');
            $table->string('departureairport');
            $table->string('departuretime');
            $table->string('departuredate');
            $table->string('arrivalairport');
            $table->string('arrivaltime');
            $table->string('arrivaldate');
            $table->string('economycapacity');
            $table->string('economyprice');
            $table->string('bussinesscapacity');
            $table->string('bussinessprice');
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
        Schema::dropIfExists('airlines');
    }
}
