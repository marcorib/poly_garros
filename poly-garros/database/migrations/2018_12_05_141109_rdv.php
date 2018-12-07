<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Rdv extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rdv', function (Blueprint $table) {
            $table->increments('rdv_id');
            $table->string('rdv_date');
            $table->string('rdv_lieu')->nullable();
            $table->string('rdv_comentaire')->nullable();
            $table->string('rdv_activite')->nullable();
            $table->string('rdv_orientation')->nullable();
            $table->timestamps();
            $table->unsignedInteger('personne_id');
            
        });

        Schema::table('rdv', function($table) {
           $table->foreign('personne_id')->references('personne_id')->on('personne')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::drop('rdv');
    }
}
