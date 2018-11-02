<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizadorServicioTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'organizador_servicio';

    /**
     * Run the migrations.
     * @table organizador_servicio
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('organizador_id')->unsigned();
            $table->integer('servicio_id')->unsigned();

            $table->index(["servicio_id"], 'fk_organizador_has_servicio_servicio1_idx');

            $table->index(["organizador_id"], 'fk_organizador_has_servicio_organizador1_idx');


            $table->foreign('organizador_id', 'fk_organizador_has_servicio_organizador1_idx')
                ->references('id')->on('organizador')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('servicio_id', 'fk_organizador_has_servicio_servicio1_idx')
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
