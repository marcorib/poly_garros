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
                'rdv_id' => 2,
                'rdv_date' => '2018-12-11 17:40:00',
                'rdv_lieu' => 'Extérieur',
                'rdv_comentaire' => 'gfdgfdgfd',
                'rdv_activite' => 'cv et lettre motiv',
                'rdv_orientation' => 'chercher du boulot',
                'created_at' => '2018-12-06 13:08:56',
                'updated_at' => NULL,
                'personne_id' => 3,
            ),
            1 => 
            array (
                'rdv_id' => 3,
                'rdv_date' => '2018-12-06 13:15:00',
                'rdv_lieu' => 'Salle Polyvalente',
                'rdv_comentaire' => NULL,
                'rdv_activite' => 'Première rencontre',
                'rdv_orientation' => NULL,
                'created_at' => '2018-12-06 13:51:17',
                'updated_at' => NULL,
                'personne_id' => 3,
            ),
        ));
        
        
    }
}