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
                'accueil_libre_heure' => '10:00:00',
                'accueil_libre_date' => '2018-12-13',
                'accueil_libre_genre' => 'Garçon',
                'accueil_libre_age' => '18-25 ans',
                'accueil_libre_provenance' => 'Quartier',
                'accueil_libre_objet' => 'Courrier/mail;Accompagnement physique',
                'created_at' => '2018-12-13 11:11:34',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'accueil_libre_heure' => '14:30:45',
                'accueil_libre_date' => '2018-12-13',
                'accueil_libre_genre' => 'Garçon',
                'accueil_libre_age' => '+ 25 ans',
                'accueil_libre_provenance' => 'Extérieur',
                'accueil_libre_objet' => 'Informatique;Lettre;Attestation;Accompagnement physique;Accompagnement à domicile;Ecoute discussion',
                'created_at' => '2018-12-13 13:43:21',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}