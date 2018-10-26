<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableReply extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reply', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('comentario_id')->unsigned();
            $table->string('comentario');
            $table->timestamps();

            $table->foreign('comentario_id')->references('id')->on('comentarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reply');
    }
}
