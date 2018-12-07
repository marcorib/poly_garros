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
                'color' => NULL,
                'icon' => 'fa fa-users',
                'parent_id' => 0,
                'is_active' => 1,
                'is_dashboard' => 0,
                'id_cms_privileges' => 1,
                'sorting' => 1,
                'created_at' => '2018-12-06 10:11:13',
                'updated_at' => NULL,
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
                'updated_at' => '2018-12-06 15:55:15',
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
                'updated_at' => '2018-12-06 15:51:39',
            ),
        ));
        
        
    }
}