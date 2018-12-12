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
                'id' => 5,
                'accueil_libre_heure' => '10:38:00',
                'accueil_libre_genre' => 'Fille',
                'accueil_libre_age' => '15-17 ans',
                'accueil_libre_provenance' => 'Quartier',
                'accueil_libre_objet' => 'Photocopie/scan/impression',
                'created_at' => '2018-12-12 15:21:56',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 6,
                'accueil_libre_heure' => '12:30:30',
                'accueil_libre_genre' => 'Fille',
                'accueil_libre_age' => '+ 25 ans',
                'accueil_libre_provenance' => 'Quartier',
                'accueil_libre_objet' => 'Autre',
                'created_at' => '2018-12-12 15:31:58',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 7,
                'accueil_libre_heure' => '16:30:15',
                'accueil_libre_genre' => 'Garçon',
                'accueil_libre_age' => '10-14 ans',
                'accueil_libre_provenance' => 'Quartier',
                'accueil_libre_objet' => 'Ecoute discussion',
                'created_at' => '2018-12-12 15:32:33',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 8,
                'accueil_libre_heure' => '09:15:45',
                'accueil_libre_genre' => 'Fille',
                'accueil_libre_age' => '15-17 ans',
                'accueil_libre_provenance' => 'Extérieur',
                'accueil_libre_objet' => 'Informatique',
                'created_at' => '2018-12-12 15:33:13',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 9,
                'accueil_libre_heure' => '09:15:45',
                'accueil_libre_genre' => 'Garçon',
                'accueil_libre_age' => '15-17 ans',
                'accueil_libre_provenance' => 'Extérieur',
                'accueil_libre_objet' => '',
                'created_at' => '2018-12-12 15:34:09',
                'updated_at' => '2018-12-12 15:34:30',
            ),
        ));
        
        
    }
}