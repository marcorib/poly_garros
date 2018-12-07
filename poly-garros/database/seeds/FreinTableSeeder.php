<?php

use Illuminate\Database\Seeder;

class FreinTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('frein')->delete();
        
        \DB::table('frein')->insert(array (
            0 => 
            array (
                'frein_id' => 1,
                'frein_type' => 'Alphabétisation',
                'frein_date' => '2018-12-13',
                'frein_status' => 'En cours',
                'created_at' => '2018-12-06 15:00:17',
                'updated_at' => NULL,
                'personne_id' => 4,
            ),
        ));
        
        
    }
}