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
                'id' => 4,
                'frein_type' => 'Alphabétisation',
                'frein_date' => '2018-12-13',
                'frein_status' => 'En cours',
                'created_at' => '2018-12-06 15:00:17',
                'updated_at' => '2018-12-10 17:24:44',
                'fkId' => 4,
            ),
            1 => 
            array (
                'id' => 5,
                'frein_type' => 'Addictions',
                'frein_date' => '2018-12-10',
                'frein_status' => 'En cours',
                'created_at' => '2018-12-10 13:08:37',
                'updated_at' => '2018-12-10 17:24:35',
                'fkId' => 5,
            ),
        ));
        
        
    }
}