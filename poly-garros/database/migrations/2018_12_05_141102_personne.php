<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Personne extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personne', function (Blueprint $table) {
            $table->increments('personne_id');
            $table->date('personne_date');
            $table->string('personne_nom')->nullable();
            $table->string('personne_prenom')->nullable();
            $table->string('personne_reference');
            $table->string('personne_sexe');
            $table->integer('personne_age');
            $table->string('personne_mail')->nullable();
            $table->string('personne_telephone')->nullable();
            $table->string('personne_voie')->nullable();
            $table->string('personne_numero_voie')->nullable();
            $table->string('personne_lieu_dit')->nullable();
            $table->string('personne_code_postal');
            $table->string('personne_ville');
            $table->boolean('personne_suivi_anterieur')->default(false);
            $table->string('personne_contact');
            $table->string('personne_tranche_age');
            $table->string('personne_beneficiaire')->nullable();
            $table->string('personne_suivi_par')->nullable();
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
        Schema::drop('personne');
    }
}
