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
                'id' => 3,
                'rdv_date' => '2018-12-06 13:15:00',
                'rdv_lieu' => 'Salle Polyvalente',
                'rdv_comentaire' => NULL,
                'rdv_activite' => 'Première rencontre',
                'rdv_orientation' => NULL,
                'created_at' => '2018-12-06 13:51:17',
                'updated_at' => NULL,
                'fkId' => 3,
            ),
            1 => 
            array (
                'id' => 4,
                'rdv_date' => '2018-12-14 10:00:00',
                'rdv_lieu' => 'Salle polyvalente',
                'rdv_comentaire' => NULL,
                'rdv_activite' => 'Informer',
                'rdv_orientation' => NULL,
                'created_at' => '2018-12-10 13:09:11',
                'updated_at' => NULL,
                'fkId' => 5,
            ),
            2 => 
            array (
                'id' => 5,
                'rdv_date' => '2018-12-11 17:40:00',
                'rdv_lieu' => 'Extérieur',
                'rdv_comentaire' => 'szaluf',
                'rdv_activite' => 'cv et lettre motiv',
                'rdv_orientation' => 'chercher du boulot',
                'created_at' => '2018-12-06 13:08:56',
                'updated_at' => '2018-12-11 08:14:23',
                'fkId' => 3,
            ),
        ));
        
        
    }
}