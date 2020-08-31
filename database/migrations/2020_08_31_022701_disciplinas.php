<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Disciplinas extends Migration
{
    public function up()
    {
        Schema::create('Disciplinas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->integer('semestre');
            $table->integer('ano');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Disciplinas');
    }
}
