<?php

use Illuminate\Database\Seeder;

class CmsUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cms_users')->delete();
        
        \DB::table('cms_users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Super Admin',
                'photo' => NULL,
                'email' => 'admin@crudbooster.com',
                'password' => '$2y$10$0Zs04p.lF.3JA9Ldob4XDuCQ31LdkEZNswlYnJLDOXSCc0Tbm7YHS',
                'id_cms_privileges' => 1,
                'created_at' => '2018-12-04 10:40:08',
                'updated_at' => NULL,
                'status' => 'Active',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Youssef Hnaka',
                'photo' => 'uploads/1/2018-12/logo_cd32.jpg',
                'email' => 'youssef.hnaka@grand-auch.fr',
                'password' => '$2y$10$VMSVgPnoTmTkbTj/QFUHeuoh3C/MtG8CSKtDa5mzDI1VjyEePQGZe',
                'id_cms_privileges' => 3,
                'created_at' => '2018-12-10 10:51:10',
                'updated_at' => '2018-12-13 14:58:10',
                'status' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Thomas Pugnet',
                'photo' => 'uploads/1/2018-12/logo_cd32.jpg',
                'email' => 'thomas.pugnet@grand-auch.fr',
                'password' => '$2y$10$tdKsWh9JCiTvC9j.KfMJxOGC0WYJKGtEXP8kF1oUvuyTVuT1KgOwK',
                'id_cms_privileges' => 3,
                'created_at' => '2018-12-10 10:51:50',
                'updated_at' => '2018-12-13 14:57:56',
                'status' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Véronique Robotti',
                'photo' => 'uploads/1/2018-12/logo_cd32.jpg',
                'email' => 'veronique.robotti@grand-auch.fr',
                'password' => '$2y$10$jsBnRp5CLf8DcaMjOyqss.Gaj3pkj7llGEz.yZ8BTIJGV7M0E9Jem',
                'id_cms_privileges' => 2,
                'created_at' => '2018-12-10 10:52:16',
                'updated_at' => '2018-12-13 14:57:40',
                'status' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Noredine Zareb',
                'photo' => 'uploads/1/2018-12/logo_cd32.jpg',
                'email' => 'noredine.zareb@grand-auch.fr',
                'password' => '$2y$10$qcAvaWRlio.jQdVkWGcamerRp3RA.0wZag1EnGOWtTNkJDcNEWqYu',
                'id_cms_privileges' => 2,
                'created_at' => '2018-12-10 10:52:48',
                'updated_at' => '2018-12-13 14:56:53',
                'status' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Aurélie',
                'photo' => 'uploads/1/2018-12/logo_cd32.jpg',
                'email' => 'aurelie@grand-auch.fr',
                'password' => '$2y$10$GfcgYQ7m5hWDMjQna/Y6ue8zMAeuYc6penolIpUIiunoUHkE9eM4K',
                'id_cms_privileges' => 3,
                'created_at' => '2018-12-10 10:53:18',
                'updated_at' => '2018-12-13 14:57:21',
                'status' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Acceuil Libre',
                'photo' => 'uploads/1/2018-12/logo_cd32.jpg',
                'email' => 'salle.poly@grand-auch.fr',
                'password' => '$2y$10$T9Ccbzgo2qIe1qjnDdQHuuBnmBg07bAcyD36Hk4zAqPdLpVtthlde',
                'id_cms_privileges' => 4,
                'created_at' => '2018-12-10 10:54:31',
                'updated_at' => '2018-12-13 14:56:26',
                'status' => NULL,
            ),
        ));
        
        
    }
}