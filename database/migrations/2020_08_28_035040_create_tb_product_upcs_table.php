<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbProductUpcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_product_upcs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->char('upc_size',50);
            $table->char('upc_value',50);
            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('tb_products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_product_upcs');
    }
}
