<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Alunos extends Migration
{
    public function up()
    {
        Schema::create('Alunos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('cpf');
            $table->string('email');
            $table->string('senha');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Alunos');
    }
}
