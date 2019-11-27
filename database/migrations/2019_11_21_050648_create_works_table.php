<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('name');
            $table->enum('state', ['terminada', 'en proceso']);
            $table->text('description');
            $table->date('dateStart');
            $table->date('dateReal');
            $table->date('dateProjected');
            $table->enum('type', ['rehabilitacion', 'edificacion']);
            $table->enum('resourceOrigin', ['privado','publico','ambos']);
            $table->float('totalCost',10,2);
            $table->float('publicPorcent',10,2);
            $table->float('privatePorcent',10,2);
            $table->string('locate');
            $table->string('lat');
            $table->string('lng');
            $table->unsignedBigInteger('work_detail_id');
            $table->foreign('work_detail_id')
            ->references('id')->on('work_details')
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
        Schema::dropIfExists('works');
    }
}
