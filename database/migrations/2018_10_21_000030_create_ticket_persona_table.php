<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketPersonaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'ticket_persona';

    /**
     * Run the migrations.
     * @table ticket_persona
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('ticket_id')->unsigned();
            $table->integer('persona_id')->unsigned();

            $table->index(["persona_id"], 'fk_ticket_has_persona_persona1_idx');

            $table->index(["ticket_id"], 'fk_ticket_has_persona_ticket1_idx');


            $table->foreign('ticket_id', 'fk_ticket_has_persona_ticket1_idx')
                ->references('id')->on('ticket')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('persona_id', 'fk_ticket_has_persona_persona1_idx')
                ->references('id')->on('persona')
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
