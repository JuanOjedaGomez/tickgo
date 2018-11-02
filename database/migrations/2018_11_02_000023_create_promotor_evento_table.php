<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromotorEventoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'promotor_evento';

    /**
     * Run the migrations.
     * @table promotor_evento
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('promotor_id')->unsigned();
            $table->integer('evento_id')->unsigned();

            $table->index(["evento_id"], 'fk_promotor_has_evento_evento1_idx');

            $table->index(["promotor_id"], 'fk_promotor_has_evento_promotor1_idx');


            $table->foreign('promotor_id', 'fk_promotor_has_evento_promotor1_idx')
                ->references('id')->on('promotor')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('evento_id', 'fk_promotor_has_evento_evento1_idx')
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
