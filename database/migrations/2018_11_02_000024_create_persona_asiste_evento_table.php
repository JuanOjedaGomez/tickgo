<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonaAsisteEventoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'persona_asiste_evento';

    /**
     * Run the migrations.
     * @table persona_asiste_evento
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('persona_id')->unsigned();
            $table->integer('evento_id')->unsigned();

            $table->index(["evento_id"], 'fk_persona_has_evento_evento2_idx');

            $table->index(["persona_id"], 'fk_persona_has_evento_persona2_idx');


            $table->foreign('persona_id', 'fk_persona_has_evento_persona2_idx')
                ->references('id')->on('persona')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('evento_id', 'fk_persona_has_evento_evento2_idx')
                ->references('id')->on('evento')
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
