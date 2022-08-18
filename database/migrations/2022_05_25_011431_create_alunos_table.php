<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->id();
            $table->integer('matricula');
            $table->string('nome');
            $table->string('sobrenome');
            $table->string('dataNascimento');
            $table->string('sexo');
            $table->string('rg');
            $table->string('estadoEmissor');
            $table->string('orgaoEmisor');
            $table->string('dataExpedicao');
            $table->string('telefone');
            $table->string('email');
            $table->string('endereco');
            // $table->string('numero')->nullable();
            $table->string('complemento');
            $table->string('bairro');
            $table->string('cep');
            $table->string('cidade');
            $table->string('estado');
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
        Schema::dropIfExists('alunos');
    }
}
