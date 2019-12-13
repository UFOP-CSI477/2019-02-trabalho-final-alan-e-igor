<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTccsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tccs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('aluno_id')->unsigned();
            $table->bigInteger('professor_id')->unsigned();
            $table->string('titulo', 100);
            $table->string('area');
            $table->smallInteger('ano');
            $table->unsignedTinyInteger('semestre');
            $table->binary('arquivo')->nullable();
            $table->timestamps();
            $table->foreign('aluno_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('professor_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tccs');
    }
}
