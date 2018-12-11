<?php

use Illuminate\Database\Seeder;

class CmsMenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cms_menus')->delete();
        
        \DB::table('cms_menus')->insert(array (
            0 => 
            array (
                'id' => 5,
                'name' => 'Public',
                'type' => 'Route',
                'path' => 'AdminPublicControllerGetIndex',
                'color' => 'normal',
                'icon' => 'fa fa-users',
                'parent_id' => 0,
                'is_active' => 1,
                'is_dashboard' => 0,
                'id_cms_privileges' => 1,
                'sorting' => 1,
                'created_at' => '2018-12-06 10:11:13',
                'updated_at' => '2018-12-10 10:54:59',
            ),
            1 => 
            array (
                'id' => 11,
                'name' => 'Freins',
                'type' => 'Route',
                'path' => 'AdminFreinsControllerGetIndex',
                'color' => 'normal',
                'icon' => 'fa fa-ban',
                'parent_id' => 0,
                'is_active' => 1,
                'is_dashboard' => 0,
                'id_cms_privileges' => 1,
                'sorting' => 3,
                'created_at' => '2018-12-06 14:39:02',
                'updated_at' => '2018-12-10 10:55:10',
            ),
            2 => 
            array (
                'id' => 12,
                'name' => 'Rendez vous',
                'type' => 'Route',
                'path' => 'AdminRdvControllerGetIndex',
                'color' => 'normal',
                'icon' => 'fa fa-calendar-plus-o',
                'parent_id' => 0,
                'is_active' => 1,
                'is_dashboard' => 0,
                'id_cms_privileges' => 1,
                'sorting' => 4,
                'created_at' => '2018-12-06 15:09:45',
                'updated_at' => '2018-12-10 10:55:20',
            ),
            3 => 
            array (
                'id' => 13,
                'name' => 'Accueil Libre',
                'type' => 'Route',
                'path' => 'AdminAccueilLibreControllerGetIndex',
                'color' => 'normal',
                'icon' => 'fa fa-home',
                'parent_id' => 0,
                'is_active' => 1,
                'is_dashboard' => 0,
                'id_cms_privileges' => 1,
                'sorting' => 5,
                'created_at' => '2018-12-10 10:55:45',
                'updated_at' => '2018-12-10 11:16:16',
            ),
            4 => 
            array (
                'id' => 14,
                'name' => 'Note interne',
                'type' => 'Controller & Method',
                'path' => 'NoteController@show',
                'color' => 'normal',
                'icon' => 'fa fa-book',
                'parent_id' => 0,
                'is_active' => 1,
                'is_dashboard' => 0,
                'id_cms_privileges' => 1,
                'sorting' => NULL,
                'created_at' => '2018-12-10 11:32:10',
                'updated_at' => '2018-12-11 08:42:08',
            ),
        ));
        
        
    }
}