<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventoServicioTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'evento_servicio';

    /**
     * Run the migrations.
     * @table evento_servicio
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('evento_id')->unsigned();
            $table->integer('servicio_id')->unsigned();

            $table->index(["servicio_id"], 'fk_evento_has_servicio_servicio1_idx');

            $table->index(["evento_id"], 'fk_evento_has_servicio_evento1_idx');


            $table->foreign('evento_id', 'fk_evento_has_servicio_evento1_idx')
                ->references('id')->on('evento')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('servicio_id', 'fk_evento_has_servicio_servicio1_idx')
                ->references('id')->on('servicio')
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
