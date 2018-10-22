<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketAutorizadosPromotorTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'ticket_autorizados_promotor';

    /**
     * Run the migrations.
     * @table ticket_autorizados_promotor
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('ticket_tipo_evento_id')->unsigned();
            $table->integer('promotor_evento_id')->unsigned();
            $table->integer('cantidad_inicial')->nullable();
            $table->integer('cantidad_disponible')->nullable();
            $table->integer('cantidad_vendida')->nullable();
            $table->integer('valor_venta')->nullable();

            $table->index(["promotor_evento_id"], 'fk_ticket_tipo_evento_has_promotor_evento_promotor_evento1_idx');

            $table->index(["ticket_tipo_evento_id"], 'fk_ticket_tipo_evento_has_promotor_evento_ticket_tipo_event_idx');


            $table->foreign('ticket_tipo_evento_id', 'fk_ticket_tipo_evento_has_promotor_evento_ticket_tipo_event_idx')
                ->references('id')->on('ticket_disponibles_evento')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('promotor_evento_id', 'fk_ticket_tipo_evento_has_promotor_evento_promotor_evento1_idx')
                ->references('id')->on('promotor_evento')
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
