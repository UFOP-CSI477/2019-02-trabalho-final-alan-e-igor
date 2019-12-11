<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgressosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('progressos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tcc_id')->unsigned();
            $table->string('mensagem');
            $table->string('versao');
            $table->timestamps();
            $table->foreign('tcc_id')->references('id')->on('tccs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('progressos');
    }
}