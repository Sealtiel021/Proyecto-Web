<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResourcePublicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resource_publics', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
           $table->enum('public', ['federal','estatal','municipal']);
           $table->float('publicPorcent',10,2);


           $table->unsignedBigInteger('id_work');
           $table->foreign('id_work')
           ->references('id')->on('works')
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
        Schema::dropIfExists('resource_publics');
    }
}
