<?php

use Illuminate\Database\Seeder;

class MigrationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('migrations')->delete();
        
        \DB::table('migrations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'migration' => '2016_08_07_145904_add_table_cms_apicustom',
                'batch' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'migration' => '2016_08_07_150834_add_table_cms_dashboard',
                'batch' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'migration' => '2016_08_07_151210_add_table_cms_logs',
                'batch' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'migration' => '2016_08_07_151211_add_details_cms_logs',
                'batch' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'migration' => '2016_08_07_152014_add_table_cms_privileges',
                'batch' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'migration' => '2016_08_07_152214_add_table_cms_privileges_roles',
                'batch' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'migration' => '2016_08_07_152320_add_table_cms_settings',
                'batch' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'migration' => '2016_08_07_152421_add_table_cms_users',
                'batch' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'migration' => '2016_08_07_154624_add_table_cms_menus_privileges',
                'batch' => 1,
            ),
            9 => 
            array (
                'id' => 10,
                'migration' => '2016_08_07_154624_add_table_cms_moduls',
                'batch' => 1,
            ),
            10 => 
            array (
                'id' => 11,
                'migration' => '2016_08_17_225409_add_status_cms_users',
                'batch' => 1,
            ),
            11 => 
            array (
                'id' => 12,
                'migration' => '2016_08_20_125418_add_table_cms_notifications',
                'batch' => 1,
            ),
            12 => 
            array (
                'id' => 13,
                'migration' => '2016_09_04_033706_add_table_cms_email_queues',
                'batch' => 1,
            ),
            13 => 
            array (
                'id' => 14,
                'migration' => '2016_09_16_035347_add_group_setting',
                'batch' => 1,
            ),
            14 => 
            array (
                'id' => 15,
                'migration' => '2016_09_16_045425_add_label_setting',
                'batch' => 1,
            ),
            15 => 
            array (
                'id' => 16,
                'migration' => '2016_09_17_104728_create_nullable_cms_apicustom',
                'batch' => 1,
            ),
            16 => 
            array (
                'id' => 17,
                'migration' => '2016_10_01_141740_add_method_type_apicustom',
                'batch' => 1,
            ),
            17 => 
            array (
                'id' => 18,
                'migration' => '2016_10_01_141846_add_parameters_apicustom',
                'batch' => 1,
            ),
            18 => 
            array (
                'id' => 19,
                'migration' => '2016_10_01_141934_add_responses_apicustom',
                'batch' => 1,
            ),
            19 => 
            array (
                'id' => 20,
                'migration' => '2016_10_01_144826_add_table_apikey',
                'batch' => 1,
            ),
            20 => 
            array (
                'id' => 21,
                'migration' => '2016_11_14_141657_create_cms_menus',
                'batch' => 1,
            ),
            21 => 
            array (
                'id' => 22,
                'migration' => '2016_11_15_132350_create_cms_email_templates',
                'batch' => 1,
            ),
            22 => 
            array (
                'id' => 23,
                'migration' => '2016_11_15_190410_create_cms_statistics',
                'batch' => 1,
            ),
            23 => 
            array (
                'id' => 24,
                'migration' => '2016_11_17_102740_create_cms_statistic_components',
                'batch' => 1,
            ),
            24 => 
            array (
                'id' => 25,
                'migration' => '2017_06_06_164501_add_deleted_at_cms_moduls',
                'batch' => 1,
            ),
            25 => 
            array (
                'id' => 26,
                'migration' => '2018_12_04_132346_commentaire',
                'batch' => 2,
            ),
            26 => 
            array (
                'id' => 27,
                'migration' => '2018_12_04_133635_activite',
                'batch' => 2,
            ),
            27 => 
            array (
                'id' => 28,
                'migration' => '2018_12_04_134402_orientation',
                'batch' => 2,
            ),
            28 => 
            array (
                'id' => 29,
                'migration' => '2018_12_04_142952_personne',
                'batch' => 3,
            ),
            29 => 
            array (
                'id' => 30,
                'migration' => '2018_12_04_131626_frein',
                'batch' => 4,
            ),
            30 => 
            array (
                'id' => 31,
                'migration' => '2018_12_04_131642_suivi_par',
                'batch' => 4,
            ),
            31 => 
            array (
                'id' => 32,
                'migration' => '2018_12_04_131751_beneficiaire',
                'batch' => 4,
            ),
            32 => 
            array (
                'id' => 33,
                'migration' => '2018_12_05_141102_personne',
                'batch' => 5,
            ),
            33 => 
            array (
                'id' => 34,
                'migration' => '2018_12_05_141054_frein',
                'batch' => 6,
            ),
            34 => 
            array (
                'id' => 35,
                'migration' => '2018_12_05_141109_rdv',
                'batch' => 6,
            ),
            35 => 
            array (
                'id' => 36,
                'migration' => '2018_12_06_083029_note_interne',
                'batch' => 7,
            ),
            36 => 
            array (
                'id' => 37,
                'migration' => '2018_12_06_085816_accueil_libre',
                'batch' => 7,
            ),
        ));
        
        
    }
}