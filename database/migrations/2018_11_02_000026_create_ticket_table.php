<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'ticket';

    /**
     * Run the migrations.
     * @table ticket
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
            $table->integer('numero')->nullable();
            $table->string('cantidad', 100)->nullable();
            $table->string('codigo_seguridad', 100)->nullable();
            $table->integer('is_pagado')->nullable();
            $table->integer('is_usado')->nullable();

            $table->index(["ticket_tipo_evento_id"], 'fk_ticket_ticket_tipo_evento1_idx');
            $table->nullableTimestamps();


            $table->foreign('ticket_tipo_evento_id', 'fk_ticket_ticket_tipo_evento1_idx')
                ->references('id')->on('ticket_disponibles_evento')
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
