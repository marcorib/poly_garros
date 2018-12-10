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
                'photo' => 'uploads/1/2018-12/logo.png',
                'email' => 'youssef.hnaka@grand-auch.fr',
                'password' => '$2y$10$beeawMUkEux3.THzvxemue.ujKdAzbOodrzpauZl6rsBbb2BYeyoe',
                'id_cms_privileges' => 3,
                'created_at' => '2018-12-10 10:51:10',
                'updated_at' => NULL,
                'status' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Thomas Pugnet',
                'photo' => 'uploads/1/2018-12/logo.png',
                'email' => 'thomas.pugnet@grand-auch.fr',
                'password' => '$2y$10$Z4o0tF48XaEbDUOSyylLU.BZT8ai4QjIIk4VPjJLH3XZI1lnCscH.',
                'id_cms_privileges' => 3,
                'created_at' => '2018-12-10 10:51:50',
                'updated_at' => NULL,
                'status' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Véronique Robotti',
                'photo' => 'uploads/1/2018-12/logo.png',
                'email' => 'veronique.robotti@grand-auch.fr',
                'password' => '$2y$10$/IoW7eUEjjYzcA8SQxtwReFWbJTLTC0.LVd4.ph1DQEMqY7/PBpQ6',
                'id_cms_privileges' => 2,
                'created_at' => '2018-12-10 10:52:16',
                'updated_at' => NULL,
                'status' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Noredine Zareb',
                'photo' => 'uploads/1/2018-12/logo.png',
                'email' => 'noredine.zareb@grand-auch.fr',
                'password' => '$2y$10$LwhABazMwPFFsOZjshHEZeo1EuQ.V9wf6sohZ9WdDTD59dQFZFePG',
                'id_cms_privileges' => 2,
                'created_at' => '2018-12-10 10:52:48',
                'updated_at' => NULL,
                'status' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Aurélie',
                'photo' => 'uploads/1/2018-12/logo.png',
                'email' => 'aurelie@grand-auch.fr',
                'password' => '$2y$10$Rv20.sjoK1XywmDncpjUXOGxdpGuHuVXnYeRqahxN82jbAYXS66rO',
                'id_cms_privileges' => 3,
                'created_at' => '2018-12-10 10:53:18',
                'updated_at' => NULL,
                'status' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Acceuil Libre',
                'photo' => 'uploads/1/2018-12/logo.png',
                'email' => 'accueil@grand-auch.fr',
                'password' => '$2y$10$LFRGJ3QnWw6wyImeSwb4zeCy/MQmdSJlBNq8R3GaDa9hjUKeI145a',
                'id_cms_privileges' => 4,
                'created_at' => '2018-12-10 10:54:31',
                'updated_at' => NULL,
                'status' => NULL,
            ),
        ));
        
        
    }
}