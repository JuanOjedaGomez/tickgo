<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonaAsisteArtistaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'persona_asiste_artista';

    /**
     * Run the migrations.
     * @table persona_asiste_artista
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('persona_id')->unsigned();
            $table->integer('artista_id')->unsigned();

            $table->index(["artista_id"], 'fk_persona_has_artista_artista2_idx');

            $table->index(["persona_id"], 'fk_persona_has_artista_persona2_idx');


            $table->foreign('persona_id', 'fk_persona_has_artista_persona2_idx')
                ->references('id')->on('persona')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('artista_id', 'fk_persona_has_artista_artista2_idx')
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
