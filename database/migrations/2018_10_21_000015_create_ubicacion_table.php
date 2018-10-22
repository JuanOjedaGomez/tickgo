<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUbicacionTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'ubicacion';

    /**
     * Run the migrations.
     * @table ubicacion
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('organizador_id')->unsigned();
            $table->integer('ciudad_id')->unsigned();
            $table->string('nombre', 100)->nullable();
            $table->string('direccion', 100)->nullable();
            $table->string('lat', 100)->nullable();
            $table->string('long', 100)->nullable();

            $table->index(["organizador_id"], 'fk_ubicacion_organizador1_idx');

            $table->index(["ciudad_id"], 'fk_ubicacion_ciudad1_idx');
            $table->nullableTimestamps();


            $table->foreign('organizador_id', 'fk_ubicacion_organizador1_idx')
                ->references('id')->on('organizador')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('ciudad_id', 'fk_ubicacion_ciudad1_idx')
                ->references('id')->on('ciudad')
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
