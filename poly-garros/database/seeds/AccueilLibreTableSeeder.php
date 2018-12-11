<?php

use Illuminate\Database\Seeder;

class AccueilLibreTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('accueil_libre')->delete();
        
        \DB::table('accueil_libre')->insert(array (
            0 => 
            array (
                'id' => 1,
                'accueil_libre_heure' => '12:00:15',
                'accueil_libre_genre' => 'Garçon',
                'accueil_libre_age' => '18-25 ans',
                'accueil_libre_provenance' => 'Quartier',
                'accueil_libre_objet' => 'Café/thé;Démarche pôle emploi',
                'created_at' => '2018-12-10 11:13:33',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}