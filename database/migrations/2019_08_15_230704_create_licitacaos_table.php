<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLicitacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licitacaos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_licitacao', 30)->nullable();
            $table->string('titulo', 255)->nullable();
            $table->string('municipio_IBGE', 30)->nullable();
            $table->string('uf', 2)->nullable();
            $table->string('orgao', 255)->nullable();
            $table->dateTime('abertura_datetime')->nullable();
            $table->text('objeto')->nullable();
            $table->string('link')->nullable();
            $table->string('municipio', 255)->nullable();
            $table->dateTime('abertura')->nullable();
            $table->dateTime('aberturaComHora')->nullable();
            $table->integer('id_tipo')->nullable();
            $table->string('tipo', 100)->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('licitacaos');
    }
}
