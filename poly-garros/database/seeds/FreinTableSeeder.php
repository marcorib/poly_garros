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
                'id' => 18,
                'frein_type' => 'Handicap',
                'frein_date' => '2018-12-07',
                'frein_status' => NULL,
                'created_at' => '2018-12-12 13:13:14',
                'updated_at' => NULL,
                'fkId' => 8,
            ),
            1 => 
            array (
                'id' => 19,
                'frein_type' => 'Judiciaire',
                'frein_date' => '2018-12-03',
                'frein_status' => NULL,
                'created_at' => '2018-12-12 13:29:04',
                'updated_at' => NULL,
                'fkId' => 9,
            ),
            2 => 
            array (
                'id' => 20,
                'frein_type' => 'Mobilité',
                'frein_date' => '2018-12-05',
                'frein_status' => NULL,
                'created_at' => '2018-12-12 13:32:23',
                'updated_at' => NULL,
                'fkId' => 10,
            ),
            3 => 
            array (
                'id' => 21,
                'frein_type' => 'Culturel',
                'frein_date' => '2018-10-25',
                'frein_status' => NULL,
                'created_at' => '2018-12-12 13:50:31',
                'updated_at' => NULL,
                'fkId' => 13,
            ),
            4 => 
            array (
                'id' => 22,
                'frein_type' => 'FLE',
                'frein_date' => '2018-09-22',
                'frein_status' => NULL,
                'created_at' => '2018-12-12 13:50:55',
                'updated_at' => NULL,
                'fkId' => 12,
            ),
            5 => 
            array (
                'id' => 23,
                'frein_type' => 'Addictions',
                'frein_date' => '2018-07-11',
                'frein_status' => NULL,
                'created_at' => '2018-12-12 13:51:54',
                'updated_at' => NULL,
                'fkId' => 11,
            ),
        ));
        
        
    }
}