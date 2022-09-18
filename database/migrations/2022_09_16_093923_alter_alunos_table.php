<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('alunos', function (Blueprint $table) {
            $table->string('dataNascimento')->nullable()->change();
            $table->string('sexo')->nullable()->change();
            $table->string('telefone')->nullable()->change();
            $table->string('email')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('alunos', function (Blueprint $table) {
            $table->string('dataNascimento')->nullable(false);
            $table->string('sexo')->nullable(false);
            $table->string('telefone')->nullable(false);
            $table->string('email')->nullable(false);
        });
    }
}
