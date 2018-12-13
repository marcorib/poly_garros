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
                'id' => 8,
                'personne_date' => '2018-12-07',
                'personne_nom' => 'Dupon',
                'personne_prenom' => 'André',
                'personne_reference' => 'DA',
                'personne_sexe' => 'Garçon',
                'personne_age' => 53,
                'personne_mail' => 'andre@gmail.com',
                'personne_telephone' => NULL,
                'personne_voie' => 'rue des fleures',
                'personne_numero_voie' => '15',
                'personne_lieu_dit' => NULL,
                'personne_code_postal' => '32000',
                'personne_ville' => 'Auch',
                'personne_suivi_anterieur' => 'oui',
                'personne_contact' => 'Téléphone',
                'personne_tranche_age' => '50 et plus',
                'personne_beneficiaire' => 'ARE',
                'personne_suivi_par' => 'Pôle Emploi',
                'created_at' => '2018-12-12 13:12:50',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 9,
                'personne_date' => '2018-12-03',
                'personne_nom' => 'Zarrik',
                'personne_prenom' => 'Houssine',
                'personne_reference' => 'ZH',
                'personne_sexe' => 'Garçon',
                'personne_age' => 26,
                'personne_mail' => 'houssine@gmail.com',
                'personne_telephone' => NULL,
                'personne_voie' => NULL,
                'personne_numero_voie' => NULL,
                'personne_lieu_dit' => 'Soulan du moulin',
                'personne_code_postal' => '32410',
                'personne_ville' => 'Castéra-Veduzan',
                'personne_suivi_anterieur' => 'oui',
                'personne_contact' => 'Aller vers',
                'personne_tranche_age' => '26-49',
                'personne_beneficiaire' => 'RSA',
                'personne_suivi_par' => 'Garros Services',
                'created_at' => '2018-12-12 13:27:41',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 10,
                'personne_date' => '2018-12-12',
                'personne_nom' => 'Laspoutine',
                'personne_prenom' => 'Nicolaï',
                'personne_reference' => 'LN',
                'personne_sexe' => 'Garçon',
                'personne_age' => 33,
                'personne_mail' => 'lasportes@kremelin.urss',
                'personne_telephone' => NULL,
                'personne_voie' => 'rue de la résistance',
                'personne_numero_voie' => '110',
                'personne_lieu_dit' => NULL,
                'personne_code_postal' => '99990',
                'personne_ville' => 'Moscou',
                'personne_suivi_anterieur' => 'oui',
                'personne_contact' => 'Venu vers : Bouche à oreille',
                'personne_tranche_age' => '26-49',
                'personne_beneficiaire' => 'ASS',
                'personne_suivi_par' => 'CADA',
                'created_at' => '2018-12-12 13:31:00',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 11,
                'personne_date' => '2018-09-13',
                'personne_nom' => 'Philippe',
                'personne_prenom' => 'Jonathan',
                'personne_reference' => 'JP',
                'personne_sexe' => 'Garçon',
                'personne_age' => 23,
                'personne_mail' => NULL,
                'personne_telephone' => NULL,
                'personne_voie' => NULL,
                'personne_numero_voie' => NULL,
                'personne_lieu_dit' => 'Les pierres',
                'personne_code_postal' => '32600',
                'personne_ville' => 'L\'isle-Jourdain',
                'personne_suivi_anterieur' => 'oui',
                'personne_contact' => 'Venu vers : Bouche à oreille',
                'personne_tranche_age' => '18-25',
                'personne_beneficiaire' => 'ATE',
            'personne_suivi_par' => 'Social (UTAS...)',
                'created_at' => '2018-12-12 13:39:01',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 12,
                'personne_date' => '2018-05-30',
                'personne_nom' => 'Kurisk',
                'personne_prenom' => 'Alexandra',
                'personne_reference' => 'KA',
                'personne_sexe' => 'Fille',
                'personne_age' => 32,
                'personne_mail' => 'alex@laposte.net',
                'personne_telephone' => NULL,
                'personne_voie' => 'impasse des fauvettes',
                'personne_numero_voie' => '22',
                'personne_lieu_dit' => NULL,
                'personne_code_postal' => '31000',
                'personne_ville' => 'Toulouse',
                'personne_suivi_anterieur' => 'oui',
                'personne_contact' => 'Autre',
                'personne_tranche_age' => '26-49',
                'personne_beneficiaire' => 'AAH',
                'personne_suivi_par' => 'AG2I',
                'created_at' => '2018-12-12 13:42:55',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 13,
                'personne_date' => '2018-06-22',
                'personne_nom' => 'Segond',
                'personne_prenom' => 'Zakia',
                'personne_reference' => 'SZ',
                'personne_sexe' => 'Fille',
                'personne_age' => 17,
                'personne_mail' => NULL,
                'personne_telephone' => '0765438912',
                'personne_voie' => 'rue hauchard',
                'personne_numero_voie' => '7',
                'personne_lieu_dit' => NULL,
                'personne_code_postal' => '32000',
                'personne_ville' => 'Auch',
                'personne_suivi_anterieur' => 'oui',
                'personne_contact' => 'Autre',
                'personne_tranche_age' => '16-17',
                'personne_beneficiaire' => 'Autre',
                'personne_suivi_par' => 'Mission Locale',
                'created_at' => '2018-12-12 13:46:19',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}