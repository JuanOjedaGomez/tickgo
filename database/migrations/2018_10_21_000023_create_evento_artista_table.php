<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventoArtistaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'evento_artista';

    /**
     * Run the migrations.
     * @table evento_artista
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('evento_id')->unsigned();
            $table->integer('artista_id')->unsigned();

            $table->index(["evento_id"], 'fk_evento_has_artista_evento1_idx');

            $table->index(["artista_id"], 'fk_evento_has_artista_artista1_idx');


            $table->foreign('evento_id', 'fk_evento_has_artista_evento1_idx')
                ->references('id')->on('evento')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('artista_id', 'fk_evento_has_artista_artista1_idx')
                ->references('id')->on('artista')
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
