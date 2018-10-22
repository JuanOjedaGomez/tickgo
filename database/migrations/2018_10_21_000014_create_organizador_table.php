<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizadorTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'organizador';

    /**
     * Run the migrations.
     * @table organizador
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('actividad_tipo_id')->unsigned();
            $table->string('nombre', 100)->nullable();
            $table->string('telefono', 100)->nullable();
            $table->string('web', 100)->nullable();
            $table->string('facebook', 100)->nullable();
            $table->string('instagram', 100)->nullable();
            $table->string('logo', 100)->nullable();
            $table->string('imagen', 100)->nullable();

            $table->index(["actividad_tipo_id"], 'fk_organizador_actividad_tipo_idx');
            $table->nullableTimestamps();


            $table->foreign('actividad_tipo_id', 'fk_organizador_actividad_tipo_idx')
                ->references('id')->on('actividad_tipo')
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
