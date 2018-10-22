<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromotorTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'promotor';

    /**
     * Run the migrations.
     * @table promotor
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('persona_id')->unsigned();
            $table->integer('organizador_id')->unsigned();

            $table->index(["organizador_id"], 'fk_promotor_organizador1_idx');

            $table->index(["persona_id"], 'fk_promotor_persona1_idx');


            $table->foreign('persona_id', 'fk_promotor_persona1_idx')
                ->references('id')->on('persona')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('organizador_id', 'fk_promotor_organizador1_idx')
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
