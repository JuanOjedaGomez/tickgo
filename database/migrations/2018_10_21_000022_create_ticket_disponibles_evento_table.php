<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketDisponiblesEventoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'ticket_disponibles_evento';

    /**
     * Run the migrations.
     * @table ticket_disponibles_evento
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('ticket_tipo_id')->unsigned();
            $table->integer('evento_id')->unsigned();
            $table->integer('ticket_venta_id')->unsigned();
            $table->integer('cantidad_inicial')->nullable();
            $table->integer('cantidad_disponible')->nullable();
            $table->integer('cantidad_vendida')->nullable();
            $table->tinyInteger('is_multipersona')->nullable();
            $table->string('valor_venta', 100)->nullable();

            $table->index(["ticket_tipo_id"], 'fk_ticket_tipo_has_evento_ticket_tipo1_idx');

            $table->index(["evento_id"], 'fk_ticket_tipo_has_evento_evento1_idx');

            $table->index(["ticket_venta_id"], 'fk_ticket_tipo_has_evento_ticket_venta1_idx');


            $table->foreign('ticket_tipo_id', 'fk_ticket_tipo_has_evento_ticket_tipo1_idx')
                ->references('id')->on('ticket_tipo')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('evento_id', 'fk_ticket_tipo_has_evento_evento1_idx')
                ->references('id')->on('evento')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('ticket_venta_id', 'fk_ticket_tipo_has_evento_ticket_venta1_idx')
                ->references('id')->on('ticket_venta')
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
