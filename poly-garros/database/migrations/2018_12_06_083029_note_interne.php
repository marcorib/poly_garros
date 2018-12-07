<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NoteInterne extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('note_interne', function (Blueprint $table) {
            $table->increments('note_interne_id');
            $table->string('note_interne_emetteur');
            $table->string('note_interne_recepteur');
            $table->text('note_interne_commentaire');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('note_interne');
    }
}
