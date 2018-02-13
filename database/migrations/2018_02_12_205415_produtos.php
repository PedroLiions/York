<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Produtos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('produtos', function (Blueprint $table){
        $table->increments('id')->unsigned();
          $table->string("nome")->unique();
          $table->text("descricao");
          $table->string("img")->unique();
          $table->string("url")->unique();
          $table->boolean("tipo");
          $table->integer("id_categoria")->unsigned();
          $table->foreign("id_categoria")->references("id")->on("categorias");
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
        //
    }
}
