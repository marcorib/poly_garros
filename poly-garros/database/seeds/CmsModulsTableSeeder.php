<?php

use Illuminate\Database\Seeder;

class CmsModulsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cms_moduls')->delete();
        
        \DB::table('cms_moduls')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Notifications',
                'icon' => 'fa fa-cog',
                'path' => 'notifications',
                'table_name' => 'cms_notifications',
                'controller' => 'NotificationsController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2018-12-04 10:40:08',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Privileges',
                'icon' => 'fa fa-cog',
                'path' => 'privileges',
                'table_name' => 'cms_privileges',
                'controller' => 'PrivilegesController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2018-12-04 10:40:08',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Privileges Roles',
                'icon' => 'fa fa-cog',
                'path' => 'privileges_roles',
                'table_name' => 'cms_privileges_roles',
                'controller' => 'PrivilegesRolesController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2018-12-04 10:40:08',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Users Management',
                'icon' => 'fa fa-users',
                'path' => 'users',
                'table_name' => 'cms_users',
                'controller' => 'AdminCmsUsersController',
                'is_protected' => 0,
                'is_active' => 1,
                'created_at' => '2018-12-04 10:40:08',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Settings',
                'icon' => 'fa fa-cog',
                'path' => 'settings',
                'table_name' => 'cms_settings',
                'controller' => 'SettingsController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2018-12-04 10:40:08',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Module Generator',
                'icon' => 'fa fa-database',
                'path' => 'module_generator',
                'table_name' => 'cms_moduls',
                'controller' => 'ModulsController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2018-12-04 10:40:08',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Menu Management',
                'icon' => 'fa fa-bars',
                'path' => 'menu_management',
                'table_name' => 'cms_menus',
                'controller' => 'MenusController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2018-12-04 10:40:08',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Email Templates',
                'icon' => 'fa fa-envelope-o',
                'path' => 'email_templates',
                'table_name' => 'cms_email_templates',
                'controller' => 'EmailTemplatesController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2018-12-04 10:40:08',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Statistic Builder',
                'icon' => 'fa fa-dashboard',
                'path' => 'statistic_builder',
                'table_name' => 'cms_statistics',
                'controller' => 'StatisticBuilderController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2018-12-04 10:40:08',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'API Generator',
                'icon' => 'fa fa-cloud-download',
                'path' => 'api_generator',
                'table_name' => '',
                'controller' => 'ApiCustomController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2018-12-04 10:40:08',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Log User Access',
                'icon' => 'fa fa-flag-o',
                'path' => 'logs',
                'table_name' => 'cms_logs',
                'controller' => 'LogsController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2018-12-04 10:40:08',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'ajout personne',
                'icon' => 'fa fa-star',
                'path' => 'personne',
                'table_name' => 'personne',
                'controller' => 'AdminPersonneController',
                'is_protected' => 0,
                'is_active' => 0,
                'created_at' => '2018-12-04 15:39:26',
                'updated_at' => NULL,
                'deleted_at' => '2018-12-04 15:49:52',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Ajout personne',
                'icon' => 'fa fa-star',
                'path' => 'personne13',
                'table_name' => 'personne',
                'controller' => 'AdminPersonne13Controller',
                'is_protected' => 0,
                'is_active' => 0,
                'created_at' => '2018-12-05 08:50:21',
                'updated_at' => NULL,
                'deleted_at' => '2018-12-05 12:57:14',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Ajout personne',
                'icon' => 'fa fa-glass',
                'path' => 'personne14',
                'table_name' => 'personne',
                'controller' => 'AdminPersonne14Controller',
                'is_protected' => 0,
                'is_active' => 0,
                'created_at' => '2018-12-05 15:41:45',
                'updated_at' => NULL,
                'deleted_at' => '2018-12-05 15:44:10',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Ajout personne',
                'icon' => 'fa fa-star',
                'path' => 'personne15',
                'table_name' => 'personne',
                'controller' => 'AdminPersonne15Controller',
                'is_protected' => 0,
                'is_active' => 0,
                'created_at' => '2018-12-05 15:44:24',
                'updated_at' => NULL,
                'deleted_at' => '2018-12-06 09:23:40',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Freins',
                'icon' => 'fa fa-stop-circle',
                'path' => 'frein',
                'table_name' => 'frein',
                'controller' => 'AdminFreinController',
                'is_protected' => 0,
                'is_active' => 0,
                'created_at' => '2018-12-05 15:51:40',
                'updated_at' => NULL,
                'deleted_at' => '2018-12-06 09:23:44',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Public',
                'icon' => 'fa fa-users',
                'path' => 'public',
                'table_name' => 'personne',
                'controller' => 'AdminPublicController',
                'is_protected' => 0,
                'is_active' => 0,
                'created_at' => '2018-12-06 10:11:13',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Rendez vous',
                'icon' => 'fa fa-calendar-plus-o',
                'path' => 'rdv',
                'table_name' => 'rdv',
                'controller' => 'AdminRdvController',
                'is_protected' => 0,
                'is_active' => 0,
                'created_at' => '2018-12-06 10:48:24',
                'updated_at' => NULL,
                'deleted_at' => '2018-12-06 10:50:20',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'ds',
                'icon' => 'fa fa-glass',
                'path' => 'rdv19',
                'table_name' => 'rdv',
                'controller' => 'AdminRdv19Controller',
                'is_protected' => 0,
                'is_active' => 0,
                'created_at' => '2018-12-06 10:50:29',
                'updated_at' => NULL,
                'deleted_at' => '2018-12-06 10:50:44',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Rendez-vous',
                'icon' => 'fa fa-calendar-plus-o',
                'path' => 'rdv20',
                'table_name' => 'rdv',
                'controller' => 'AdminRdv20Controller',
                'is_protected' => 0,
                'is_active' => 0,
                'created_at' => '2018-12-06 10:52:41',
                'updated_at' => NULL,
                'deleted_at' => '2018-12-06 11:00:33',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Rendez-vous',
                'icon' => 'fa fa-cog',
                'path' => 'rdv',
                'table_name' => 'rdv',
                'controller' => 'AdminRdvController',
                'is_protected' => 0,
                'is_active' => 0,
                'created_at' => '2018-12-06 11:03:19',
                'updated_at' => NULL,
                'deleted_at' => '2018-12-06 15:08:30',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Freins',
                'icon' => 'fa fa-ban',
                'path' => 'Freins',
                'table_name' => 'frein',
                'controller' => 'AdminFreinsController',
                'is_protected' => 0,
                'is_active' => 0,
                'created_at' => '2018-12-06 14:36:03',
                'updated_at' => NULL,
                'deleted_at' => '2018-12-06 14:38:42',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Freins',
                'icon' => 'fa fa-ban',
                'path' => 'Freins',
                'table_name' => 'frein',
                'controller' => 'AdminFreinsController',
                'is_protected' => 0,
                'is_active' => 0,
                'created_at' => '2018-12-06 14:39:02',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Rendez-vous',
                'icon' => 'fa fa-calendar-plus-o',
                'path' => 'rdv',
                'table_name' => 'rdv',
                'controller' => 'AdminRdvController',
                'is_protected' => 0,
                'is_active' => 0,
                'created_at' => '2018-12-06 15:09:45',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Rôles de privilèges',
                'icon' => 'fa fa-cog',
                'path' => 'privileges_roles',
                'table_name' => 'cms_privileges_roles',
                'controller' => 'PrivilegesRolesController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2018-12-07 09:56:07',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Gestion des utilisateurs',
                'icon' => 'fa fa-users',
                'path' => 'users',
                'table_name' => 'cms_users',
                'controller' => 'AdminCmsUsersController',
                'is_protected' => 0,
                'is_active' => 1,
                'created_at' => '2018-12-07 09:56:07',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Réglages',
                'icon' => 'fa fa-cog',
                'path' => 'settings',
                'table_name' => 'cms_settings',
                'controller' => 'SettingsController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2018-12-07 09:56:07',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Générateur de module',
                'icon' => 'fa fa-database',
                'path' => 'module_generator',
                'table_name' => 'cms_moduls',
                'controller' => 'ModulsController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2018-12-07 09:56:07',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Gestion du menu',
                'icon' => 'fa fa-bars',
                'path' => 'menu_management',
                'table_name' => 'cms_menus',
                'controller' => 'MenusController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2018-12-07 09:56:07',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Modèles de courrier électronique',
                'icon' => 'fa fa-envelope-o',
                'path' => 'email_templates',
                'table_name' => 'cms_email_templates',
                'controller' => 'EmailTemplatesController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2018-12-07 09:56:07',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Générateur de statistiques',
                'icon' => 'fa fa-dashboard',
                'path' => 'statistic_builder',
                'table_name' => 'cms_statistics',
                'controller' => 'StatisticBuilderController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2018-12-07 09:56:07',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Générateur API ',
                'icon' => 'fa fa-cloud-download',
                'path' => 'api_generator',
                'table_name' => '',
                'controller' => 'ApiCustomController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2018-12-07 09:56:07',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Consigner l accès utilisateur',
                'icon' => 'fa fa-flag-o',
                'path' => 'logs',
                'table_name' => 'cms_logs',
                'controller' => 'LogsController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2018-12-07 09:56:07',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Accueil Libre',
                'icon' => 'fa fa-home',
                'path' => 'accueil libre',
                'table_name' => 'accueil_libre',
                'controller' => 'AdminAccueilLibreController',
                'is_protected' => 0,
                'is_active' => 0,
                'created_at' => '2018-12-10 10:55:45',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}