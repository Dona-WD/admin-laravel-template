<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_cities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('countries_id');
            $table->char('name', 100);            
            $table->timestamps();
            
            $table->foreign('countries_id')->references('id')->on('tb_countries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_cities');
    }
}
