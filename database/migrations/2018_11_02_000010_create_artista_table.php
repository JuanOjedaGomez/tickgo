<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtistaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'artista';

    /**
     * Run the migrations.
     * @table artista
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('evento_tipo_id')->unsigned();
            $table->string('nombre', 100)->nullable();
            $table->string('apodo', 100)->nullable();

            $table->index(["evento_tipo_id"], 'fk_artista_evento_tipo1_idx');
            $table->nullableTimestamps();


            $table->foreign('evento_tipo_id', 'fk_artista_evento_tipo1_idx')
                ->references('id')->on('evento_tipo')
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
