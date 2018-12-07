<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AccueilLibre extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accueil_libre', function (Blueprint $table) {
            $table->increments('accueil_libre_id');
            $table->time('accueil_libre_heure');
            $table->string('accueil_libre_genre');
            $table->string('accueil_libre_age');
            $table->string('accueil_libre_provenance');
            $table->string('accueil_libre_objet');
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
        Schema::drop('accueil_libre');
    }
}
