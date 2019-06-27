<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class IecsData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_comparison', function (Blueprint $table) {
            $table->increments('id');
            $table->string('brand');
            $table->string('truck_ratio');
            $table->string('fuel_litres');
            $table->string('co2_emissions');
            $table->string('vege_regrowth');
            $table->string('road_damage');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_comparison');
    }
}
