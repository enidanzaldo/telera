<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbAlumnos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('tb_alumnos', function (Blueprint $table) {
            $table->id('id_alumnos');
            $table->string('nombre',50);
            $table->date('fn');
            $table->string('genero',20);
            $table->string('matricula',10);
            $table->string('direccion',20);
            $table->string('email',150);
            $table->string('password',10);
            $table->string('foto');
            $table->integer('id_grupo');
            $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tb_alumnos');
    }
}
