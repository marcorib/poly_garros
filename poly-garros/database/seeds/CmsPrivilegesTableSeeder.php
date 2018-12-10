<?php

use Illuminate\Database\Seeder;

class CmsPrivilegesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cms_privileges')->delete();
        
        \DB::table('cms_privileges')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Super Administrator',
                'is_superadmin' => 1,
                'theme_color' => 'skin-red',
                'created_at' => '2018-12-04 10:40:08',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Administrateur',
                'is_superadmin' => 0,
                'theme_color' => 'skin-blue',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Utilisateur',
                'is_superadmin' => 0,
                'theme_color' => 'skin-yellow',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Accueil Libre',
                'is_superadmin' => 0,
                'theme_color' => 'skin-green',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}