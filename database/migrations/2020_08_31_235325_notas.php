<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Notas extends Migration
{
    public function up()
    {
        Schema::create('Notas', function (Blueprint $table) {
            $table->increments('id');
            $table->float('valor');
            $table->string('descricao');
            $table->integer('disciplina_id')->unsigned();
            $table->foreign('disciplina_id')->references('id')->on('disciplinas');
            $table->integer('aluno_id')->unsigned();
            $table->foreign('aluno_id')->references('id')->on('alunos');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Notas');
    }
}
