<?php

use Illuminate\Database\Seeder;

class RdvTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('rdv')->delete();
        
        \DB::table('rdv')->insert(array (
            0 => 
            array (
                'id' => 10,
                'rdv_date' => '2018-12-04 15:00:00',
                'rdv_lieu' => 'Salle polyvalente',
                'rdv_comentaire' => NULL,
                'rdv_activite' => 'Aide administrative',
                'rdv_orientation' => NULL,
                'created_at' => '2018-12-12 13:34:00',
                'updated_at' => NULL,
                'fkId' => 10,
            ),
            1 => 
            array (
                'id' => 11,
                'rdv_date' => '2018-12-10 16:45:00',
                'rdv_lieu' => 'Salle polyvalente',
                'rdv_comentaire' => NULL,
                'rdv_activite' => 'Collecter les infos',
                'rdv_orientation' => NULL,
                'created_at' => '2018-12-12 13:35:00',
                'updated_at' => NULL,
                'fkId' => 8,
            ),
            2 => 
            array (
                'id' => 12,
                'rdv_date' => '2018-09-04 17:00:00',
                'rdv_lieu' => 'Extérieur',
                'rdv_comentaire' => 'Accompagnement au tribunal pour aide et suivi du dossier judiciaire.',
                'rdv_activite' => 'Accompagnement physique',
                'rdv_orientation' => NULL,
                'created_at' => '2018-12-12 13:36:32',
                'updated_at' => '2018-12-12 13:36:52',
                'fkId' => 9,
            ),
            3 => 
            array (
                'id' => 13,
                'rdv_date' => '2018-06-13 09:00:00',
                'rdv_lieu' => 'Salle polyvalente',
                'rdv_comentaire' => NULL,
                'rdv_activite' => 'CV et/ou lettre de motivation',
                'rdv_orientation' => NULL,
                'created_at' => '2018-12-12 13:47:20',
                'updated_at' => NULL,
                'fkId' => 13,
            ),
            4 => 
            array (
                'id' => 14,
                'rdv_date' => '2018-12-04 14:00:00',
                'rdv_lieu' => 'Extérieur',
                'rdv_comentaire' => NULL,
                'rdv_activite' => 'Première rencontre',
                'rdv_orientation' => NULL,
                'created_at' => '2018-12-12 13:48:31',
                'updated_at' => NULL,
                'fkId' => 10,
            ),
            5 => 
            array (
                'id' => 15,
                'rdv_date' => '2018-12-07 09:00:00',
                'rdv_lieu' => 'Partenaires QPV',
                'rdv_comentaire' => NULL,
                'rdv_activite' => 'Première rencontre',
                'rdv_orientation' => NULL,
                'created_at' => '2018-12-12 13:49:04',
                'updated_at' => NULL,
                'fkId' => 9,
            ),
            6 => 
            array (
                'id' => 16,
                'rdv_date' => '2018-12-10 16:00:00',
                'rdv_lieu' => 'Salle polyvalente',
                'rdv_comentaire' => NULL,
                'rdv_activite' => 'Première rencontre',
                'rdv_orientation' => NULL,
                'created_at' => '2018-12-12 13:49:39',
                'updated_at' => NULL,
                'fkId' => 8,
            ),
        ));
        
        
    }
}