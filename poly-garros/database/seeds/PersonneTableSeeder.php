<?php

use Illuminate\Database\Seeder;

class PersonneTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('personne')->delete();
        
        \DB::table('personne')->insert(array (
            0 => 
            array (
                'personne_id' => 3,
                'personne_date' => '2018-12-06',
                'personne_nom' => 'dupon',
                'personne_prenom' => 'andré',
                'personne_reference' => 'AD',
                'personne_sexe' => 'Garçon',
                'personne_age' => 43,
                'personne_mail' => NULL,
                'personne_telephone' => NULL,
                'personne_voie' => NULL,
                'personne_numero_voie' => NULL,
                'personne_lieu_dit' => NULL,
                'personne_code_postal' => '32000',
                'personne_ville' => 'Auch',
                'personne_suivi_anterieur' => 0,
                'personne_contact' => 'Aller vers',
                'personne_tranche_age' => '50 et plus',
                'personne_beneficiaire' => 'Autre',
                'personne_suivi_par' => 'Médical',
                'created_at' => '2018-12-06 10:57:01',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'personne_id' => 4,
                'personne_date' => '2018-12-06',
                'personne_nom' => NULL,
                'personne_prenom' => NULL,
                'personne_reference' => 'CA',
                'personne_sexe' => 'Fille',
                'personne_age' => 22,
                'personne_mail' => NULL,
                'personne_telephone' => NULL,
                'personne_voie' => NULL,
                'personne_numero_voie' => NULL,
                'personne_lieu_dit' => 'sous le pont',
                'personne_code_postal' => '69',
                'personne_ville' => 'Toulouse',
                'personne_suivi_anterieur' => 1,
                'personne_contact' => 'Venu vers : Bouche à oreille',
                'personne_tranche_age' => '18-25',
                'personne_beneficiaire' => 'ASS',
                'personne_suivi_par' => 'Mission Locale',
                'created_at' => '2018-12-06 10:58:18',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}