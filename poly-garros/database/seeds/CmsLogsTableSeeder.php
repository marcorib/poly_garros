<?php

use Illuminate\Database\Seeder;

class CmsLogsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cms_logs')->delete();
        
        \DB::table('cms_logs')->insert(array (
            0 => 
            array (
                'id' => 16,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/admin/logs/action-selected',
                'description' => 'Delete data 15 at Log User Access',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2018-12-06 09:25:31',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 17,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/admin/statistic_builder/delete/1',
                'description' => 'Delete data frein at Statistic Builder',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2018-12-06 09:30:43',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 18,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/admin/public/add-save',
                'description' => 'Add New Data  at Public',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2018-12-06 10:40:07',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 19,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/admin/public/add-save',
                'description' => 'Add New Data  at Public',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2018-12-06 10:41:15',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 20,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/admin/module_generator/delete/18',
                'description' => 'Delete data gthd at Module Generator',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2018-12-06 10:50:20',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 21,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/admin/module_generator/delete/19',
                'description' => 'Delete data ds at Module Generator',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2018-12-06 10:50:44',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 22,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/admin/public/add-save',
                'description' => 'Add New Data  at Public',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2018-12-06 10:57:01',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 23,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/admin/public/add-save',
                'description' => 'Add New Data  at Public',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2018-12-06 10:58:18',
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 24,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/admin/module_generator/delete/20',
                'description' => 'Delete data Rendez-vous at Module Generator',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2018-12-06 11:00:33',
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 25,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/admin/rdv/add-save',
                'description' => 'Add New Data 4 at gthd',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2018-12-06 13:00:27',
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 26,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/admin/rdv/add-save',
                'description' => 'Add New Data 3 at gthd',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2018-12-06 13:08:56',
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 27,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/admin/rdv/add-save',
                'description' => 'Add New Data: name at: module',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2018-12-06 13:51:17',
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 28,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/admin/module_generator/delete/22',
                'description' => 'Supprimer les données: nom à: module',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2018-12-06 14:38:42',
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 29,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/admin/Freins/add-save',
                'description' => 'Add New Data: name at: module',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2018-12-06 15:00:17',
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 30,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/admin/module_generator/delete/21',
                'description' => 'Supprimer les données: nom à: module',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2018-12-06 15:08:30',
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 31,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/admin/menu_management/edit-save/12',
                'description' => 'Mettre à jour les données: nom à: module',
                'details' => '<table class="table table-striped"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>name</td><td>R</td><td>RDV</td></tr><tr><td>color</td><td></td><td>normal</td></tr><tr><td>sorting</td><td>4</td><td></td></tr></tbody></table>',
                'id_cms_users' => 1,
                'created_at' => '2018-12-06 15:44:13',
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 32,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/admin/menu_management/edit-save/12',
                'description' => 'Mettre à jour les données: nom à: module',
                'details' => '<table class="table table-striped"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>name</td><td>RDV</td><td>Rendez vous</td></tr><tr><td>sorting</td><td>4</td><td></td></tr></tbody></table>',
                'id_cms_users' => 1,
                'created_at' => '2018-12-06 15:44:45',
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 33,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/admin/menu_management/edit-save/11',
                'description' => 'Mettre à jour les données: nom à: module',
                'details' => '<table class="table table-striped"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>color</td><td></td><td>normal</td></tr><tr><td>icon</td><td>fa fa-stop</td><td>fa fa-stop-circle</td></tr><tr><td>sorting</td><td>3</td><td></td></tr></tbody></table>',
                'id_cms_users' => 1,
                'created_at' => '2018-12-06 15:45:11',
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 34,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/admin/menu_management/edit-save/11',
                'description' => 'Mettre à jour les données: nom à: module',
                'details' => '<table class="table table-striped"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>icon</td><td>fa fa-stop-circle</td><td>fa fa-stop</td></tr><tr><td>sorting</td><td>3</td><td></td></tr></tbody></table>',
                'id_cms_users' => 1,
                'created_at' => '2018-12-06 15:45:32',
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 35,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/admin/menu_management/add-save',
                'description' => 'Add New Data: name at: module',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2018-12-06 15:46:53',
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 36,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/admin/menu_management/delete/13',
                'description' => 'Supprimer les données: nom à: module',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2018-12-06 15:47:08',
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 37,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/admin/menu_management/edit-save/12',
                'description' => 'Mettre à jour les données: nom à: module',
                'details' => '<table class="table table-striped"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>icon</td><td>fa fa-calendar-check-o</td><td>fa fa-calendar-plus-o</td></tr><tr><td>sorting</td><td>4</td><td></td></tr></tbody></table>',
                'id_cms_users' => 1,
                'created_at' => '2018-12-06 15:51:39',
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 38,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/admin/menu_management/edit-save/11',
                'description' => 'Mettre à jour les données: nom à: module',
                'details' => '<table class="table table-striped"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>icon</td><td>fa fa-stop</td><td>fa fa-ban</td></tr><tr><td>sorting</td><td>3</td><td></td></tr></tbody></table>',
                'id_cms_users' => 1,
                'created_at' => '2018-12-06 15:55:15',
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 39,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/admin/login',
                'description' => ': login par email avec adresse IP: ip',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2018-12-07 08:09:29',
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 40,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/admin/logout',
                'description' => ': déconnexion d email',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2018-12-07 08:30:48',
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 41,
                'ipaddress' => '127.0.0.1',
            'useragent' => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36',
                'url' => 'http://127.0.0.1:8000/admin/login',
                'description' => ': login par email avec adresse IP: ip',
                'details' => '',
                'id_cms_users' => 1,
                'created_at' => '2018-12-07 08:44:00',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}