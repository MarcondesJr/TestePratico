<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',150);
            $table->string('last',150);
            $table->string('email',150);
            $table->string('password',50);
            $table->string('endereco',150);
            $table->string('telefone',20);
            $table->string('cidade',150);
            $table->string('estado',150);
            $table->string('cep',150);
            $table->enum('categoria',['admin','user']);
            $table->string('image',150);
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
        Schema::dropIfExists('usuarios');
    }
}
