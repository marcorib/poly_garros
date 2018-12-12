<?php

use Illuminate\Database\Seeder;

class CmsStatisticsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cms_statistics')->delete();
        
        \DB::table('cms_statistics')->insert(array (
            0 => 
            array (
                'id' => 11,
                'name' => 'Statistiques première rencontre',
                'slug' => 'statistiques-premiere-rencontre',
                'created_at' => '2018-12-11 13:19:56',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 12,
                'name' => 'Suivis de situations',
                'slug' => 'suivis-de-situations',
                'created_at' => '2018-12-11 13:20:23',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 13,
                'name' => 'Contacts',
                'slug' => 'contact',
                'created_at' => '2018-12-12 09:03:10',
                'updated_at' => '2018-12-12 09:03:28',
            ),
            3 => 
            array (
                'id' => 14,
                'name' => 'Activités',
                'slug' => 'activites',
                'created_at' => '2018-12-12 09:04:54',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 15,
                'name' => 'Lieux d’intervention',
                'slug' => 'lieux-dintervention',
                'created_at' => '2018-12-12 09:06:25',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 16,
                'name' => 'Freins selon tranche d’âge',
                'slug' => 'freins-selon-tranche-dage',
                'created_at' => '2018-12-12 09:07:21',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 17,
                'name' => 'Freins observé',
                'slug' => 'freins-observe',
                'created_at' => '2018-12-12 09:08:24',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 18,
                'name' => 'Personnes par jour',
                'slug' => 'personnes-par-jour',
                'created_at' => '2018-12-12 09:10:00',
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 19,
            'name' => 'Personnes par jour ( Accueil libre )',
                'slug' => 'personnes-par-jour-accueil-libre',
                'created_at' => '2018-12-12 09:10:39',
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 20,
                'name' => 'Répartition par genre',
                'slug' => 'repartition-par-genre',
                'created_at' => '2018-12-12 09:11:28',
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 21,
                'name' => 'Répartition profil des bénéficiaires',
                'slug' => 'repartition-profil-des-beneficiaires',
                'created_at' => '2018-12-12 09:12:32',
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 22,
                'name' => 'Répartition par âge',
                'slug' => 'repartition-par-age',
                'created_at' => '2018-12-12 09:13:21',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}