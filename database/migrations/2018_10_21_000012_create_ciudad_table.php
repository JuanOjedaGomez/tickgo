<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCiudadTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'ciudad';

    /**
     * Run the migrations.
     * @table ciudad
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('region_id')->unsigned();
            $table->string('nombre', 100)->nullable();
            $table->string('lat', 100)->nullable();
            $table->string('long', 100)->nullable();

            $table->index(["region_id"], 'fk_ciudad_region1_idx');


            $table->foreign('region_id', 'fk_ciudad_region1_idx')
                ->references('id')->on('region')
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
