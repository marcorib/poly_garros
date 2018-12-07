<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Frein extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frein', function (Blueprint $table) {
            $table->increments('frein_id');
            $table->string('frein_type')->nullable();
            $table->string('frein_date')->nullable();
            $table->string('frein_status')->nullable();
            $table->timestamps();
            $table->unsignedInteger('personne_id');
			
  	    });

  	    Schema::table('frein', function($table) {
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
        Schema::drop('frein');
    }
}
