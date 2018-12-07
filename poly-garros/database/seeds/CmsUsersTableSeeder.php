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
        ));
        
        
    }
}