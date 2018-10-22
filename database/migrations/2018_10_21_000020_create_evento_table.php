<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'evento';

    /**
     * Run the migrations.
     * @table evento
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('evento_subtipo_id')->unsigned();
            $table->integer('ubicacion_id')->unsigned();
            $table->integer('organizador_id')->unsigned();
            $table->dateTime('fecha_inicio')->nullable();
            $table->dateTime('fecha_final')->nullable();
            $table->string('descripcion_corta', 100)->nullable();
            $table->string('descripcion_larga', 100)->nullable();
            $table->string('imagen', 100)->nullable();
            $table->string('video', 100)->nullable();
            $table->tinyInteger('promotor')->nullable();
            $table->tinyInteger('promotor_valida')->nullable();

            $table->index(["ubicacion_id"], 'fk_evento_ubicacion1_idx');

            $table->index(["evento_subtipo_id"], 'fk_evento_evento_subtipo1_idx');

            $table->index(["organizador_id"], 'fk_evento_organizador1_idx');


            $table->foreign('evento_subtipo_id', 'fk_evento_evento_subtipo1_idx')
                ->references('id')->on('evento_subtipo')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('ubicacion_id', 'fk_evento_ubicacion1_idx')
                ->references('id')->on('ubicacion')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('organizador_id', 'fk_evento_organizador1_idx')
                ->references('id')->on('organizador')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->set_schema_table);
     }
}
