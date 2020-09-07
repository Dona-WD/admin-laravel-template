<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('created_by');
            $table->char('name', 100);
            $table->char('icon', 100)->nullable();
            $table->char('image', 100)->nullable();
            $table->bigInteger('level')->index()->nullable();            
            $table->timestamps();

            $table->foreign('created_by')->references('id')->on('users');
             
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_categories');
    }
}
