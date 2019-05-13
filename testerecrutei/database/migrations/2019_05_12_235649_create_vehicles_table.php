<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("vehicles", function (Blueprint $table) {
            $table->bigIncrements("id");

            $table->bigInteger("user_id")
                ->unsigned();

            $table->foreign("user_id")
                ->references("id")
                ->on("users");

            $table->bigInteger("vehicle_model_id")
                ->unsigned();

            $table->foreign("vehicle_model_id")
                ->references("id")
                ->on("vehicle_models");

            $table->integer("model_year")
                ->nullable();

            $table->integer("year_of_manufacture")
                ->nullable();

            $table->string("registration_plate");
            
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
        Schema::dropIfExists("vehicles");
    }
}
