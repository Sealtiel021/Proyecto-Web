<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductVendorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_vendor', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
        

            $table->unsignedBigInteger('id_vendor');
            $table->foreign('id_vendor')
            ->references('id')->on('vendors')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_vendor');
    }
}
