<?php

use Illuminate\Database\Seeder;

class CmsStatisticComponentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cms_statistic_components')->delete();
        
        \DB::table('cms_statistic_components')->insert(array (
            0 => 
            array (
                'id' => 1,
                'id_cms_statistics' => 1,
                'componentID' => 'b3bea551e22389341dfa199acc337449',
                'component_name' => 'chartbar',
                'area_name' => 'area2',
                'sorting' => 0,
                'name' => NULL,
            'config' => '{"name":"Contacts","sql":"SELECT(personne_contact) AS \'label\', (id) AS \'value\' FROM personne GROUP BY ( id )","area_name":"Nombre :","goals":null}',
                'created_at' => '2018-12-11 12:37:03',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'id_cms_statistics' => 2,
                'componentID' => 'cf3282000a3685ae5afef98ea4ccfc82',
                'component_name' => 'chartbar',
                'area_name' => 'area2',
                'sorting' => 0,
                'name' => NULL,
            'config' => '{"name":"Freins observ\\u00e9","sql":"SELECT (frein_type) AS label, COUNT(id) AS value FROM `frein` GROUP BY (frein_type)","area_name":"Nombre :","goals":null}',
                'created_at' => '2018-12-11 12:39:02',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'id_cms_statistics' => 3,
                'componentID' => 'd16a6a30226d860dc4850ba56f5781ec',
                'component_name' => 'chartbar',
                'area_name' => 'area2',
                'sorting' => 0,
                'name' => NULL,
            'config' => '{"name":"Freins selon tranche d\\u2019\\u00e2ge","sql":"SELECT (frein.frein_type) AS \'label\', (personne.personne_tranche_age) AS \'value\'\\r\\nFROM personne\\r\\nINNER JOIN frein ON personne.id=frein.fkId","area_name":"tranche d\\u2019\\u00e2ge","goals":null}',
                'created_at' => '2018-12-11 12:46:28',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'id_cms_statistics' => 5,
                'componentID' => '73e805ca83af7fe3970da5a22ae8a6b0',
                'component_name' => 'chartbar',
                'area_name' => 'area2',
                'sorting' => 0,
                'name' => NULL,
            'config' => '{"name":"Personnes par jour","sql":"SELECT (personne_date) AS label, COUNT(id) AS value FROM `personne`GROUP BY (personne_date)","area_name":"Nombre :","goals":null}',
                'created_at' => '2018-12-11 12:48:34',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'id_cms_statistics' => 6,
                'componentID' => '7d029574b174d7a3e1c3bbe8c1a21d21',
                'component_name' => 'chartbar',
                'area_name' => 'area2',
                'sorting' => 0,
                'name' => NULL,
            'config' => '{"name":"Personnes par jour ( Accueil libre )","sql":"SELECT (created_at) AS \'label\' , COUNT(id) AS \'value\' FROM `accueil_libre`GROUP BY ( id )","area_name":"Personne par Jour","goals":null}',
                'created_at' => '2018-12-11 12:51:38',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'id_cms_statistics' => 7,
                'componentID' => '5df5920327f0d12d134a9e0242233683',
                'component_name' => 'chartbar',
                'area_name' => 'area2',
                'sorting' => 0,
                'name' => NULL,
            'config' => '{"name":"R\\u00e9partition par genre","sql":"SELECT (personne_sexe) AS label, COUNT(id) AS value FROM `personne` GROUP BY (personne_sexe)","area_name":"Nombre :","goals":null}',
                'created_at' => '2018-12-11 12:53:31',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'id_cms_statistics' => 8,
                'componentID' => 'bf9a27445ae4f26d1a6f1b9493d818a9',
                'component_name' => 'chartbar',
                'area_name' => 'area2',
                'sorting' => 0,
                'name' => NULL,
            'config' => '{"name":"R\\u00e9partition par \\u00e2ge","sql":"SELECT (personne_age) AS label, COUNT(id) AS value FROM `personne` GROUP BY (personne_age)","area_name":"Nombre :","goals":null}',
                'created_at' => '2018-12-11 12:54:49',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'id_cms_statistics' => 9,
                'componentID' => '28fba96311304833a67d95d5e3a21e0d',
                'component_name' => 'chartbar',
                'area_name' => 'area2',
                'sorting' => 0,
                'name' => NULL,
            'config' => '{"name":"R\\u00e9partition profil des b\\u00e9n\\u00e9ficiaires","sql":"SELECT (personne_beneficiaire ) AS label, COUNT(id) AS value FROM `personne` GROUP BY (personne_beneficiaire)","area_name":"Nombre :","goals":null}',
                'created_at' => '2018-12-11 12:56:22',
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'id_cms_statistics' => 4,
                'componentID' => '2b25d140f2c7127a94d8791130a33456',
                'component_name' => 'chartbar',
                'area_name' => 'area2',
                'sorting' => 0,
                'name' => NULL,
            'config' => '{"name":"Lieux d\\u2019intervention","sql":"SELECT (rdv_lieu) AS label, COUNT(id) AS value FROM `rdv` GROUP BY (rdv_lieu)","area_name":"Nombre","goals":null}',
                'created_at' => '2018-12-11 13:01:01',
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'id_cms_statistics' => 10,
                'componentID' => '5a47154ad952f8f3018ce08e0cf2da85',
                'component_name' => 'chartbar',
                'area_name' => 'area2',
                'sorting' => 0,
                'name' => NULL,
            'config' => '{"name":"Activit\\u00e9s","sql":"SELECT (rdv_activite) AS label, COUNT(id) AS value FROM `rdv` GROUP BY (rdv_activite)","area_name":"Nombre :","goals":null}',
                'created_at' => '2018-12-11 13:04:08',
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'id_cms_statistics' => 11,
                'componentID' => '1f48475b383c88c74eb353c3cc6e12d5',
                'component_name' => 'chartbar',
                'area_name' => 'area1',
                'sorting' => 0,
                'name' => NULL,
            'config' => '{"name":"Personnes par jour","sql":"SELECT (personne_date) AS label, COUNT(id) AS value FROM `personne`GROUP BY (personne_date)","area_name":"Nombre","goals":null}',
                'created_at' => '2018-12-11 13:21:24',
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'id_cms_statistics' => 11,
                'componentID' => 'f892658be594291148856cef5762fa90',
                'component_name' => 'chartbar',
                'area_name' => 'area2',
                'sorting' => 0,
                'name' => NULL,
            'config' => '{"name":"Personnes par jour ( Accueil libre )","sql":"SELECT (created_at) AS \'label\' , COUNT(id) AS \'value\' FROM `accueil_libre`GROUP BY ( id )","area_name":"Nombre personne","goals":null}',
                'created_at' => '2018-12-11 13:22:42',
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'id_cms_statistics' => 11,
                'componentID' => '0c1bf40c70bd3e688551ed8c9feedf62',
                'component_name' => 'chartbar',
                'area_name' => 'area3',
                'sorting' => 0,
                'name' => NULL,
            'config' => '{"name":"R\\u00e9partition par genre","sql":"SELECT (personne_sexe) AS label, COUNT(id) AS value FROM `personne` GROUP BY (personne_sexe)","area_name":"Nombre","goals":null}',
                'created_at' => '2018-12-11 13:23:40',
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'id_cms_statistics' => 11,
                'componentID' => '1296a5c9e9a2e08a71de70ef10d9ddfc',
                'component_name' => 'chartbar',
                'area_name' => 'area2',
                'sorting' => 1,
                'name' => NULL,
            'config' => '{"name":"R\\u00e9partition par \\u00e2ge","sql":"SELECT (personne_age) AS label, COUNT(id) AS value FROM `personne` GROUP BY (personne_age)","area_name":"Nombre","goals":null}',
                'created_at' => '2018-12-11 13:24:53',
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'id_cms_statistics' => 11,
                'componentID' => '8364a20cab6502229d2e3105d9fb4fa1',
                'component_name' => 'chartbar',
                'area_name' => 'area1',
                'sorting' => 0,
                'name' => NULL,
            'config' => '{"name":"R\\u00e9partition profil des b\\u00e9n\\u00e9ficiaires","sql":"SELECT (personne_beneficiaire ) AS label, COUNT(id) AS value FROM `personne` GROUP BY (personne_beneficiaire)","area_name":"Nombre","goals":null}',
                'created_at' => '2018-12-11 13:26:05',
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'id_cms_statistics' => 12,
                'componentID' => '780988cd5963bb607fef7ce9024375ea',
                'component_name' => 'chartbar',
                'area_name' => 'area1',
                'sorting' => 0,
                'name' => NULL,
            'config' => '{"name":"Activit\\u00e9s","sql":"SELECT (rdv_activite) AS label, COUNT(id) AS value FROM `rdv` GROUP BY (rdv_activite)","area_name":"Nombre","goals":null}',
                'created_at' => '2018-12-11 13:27:08',
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'id_cms_statistics' => 12,
                'componentID' => '3448ff1d9df7b84359ee78ab326c559a',
                'component_name' => 'chartbar',
                'area_name' => 'area2',
                'sorting' => 0,
                'name' => NULL,
            'config' => '{"name":"Contacts","sql":"SELECT(personne_contact) AS \'label\', (id) AS \'value\' FROM personne GROUP BY ( id )","area_name":"Nombre","goals":null}',
                'created_at' => '2018-12-11 13:28:42',
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'id_cms_statistics' => 12,
                'componentID' => '128d44db8e4812e4b3fe80ebb9a3aed1',
                'component_name' => 'chartbar',
                'area_name' => 'area3',
                'sorting' => 0,
                'name' => NULL,
            'config' => '{"name":"Lieux d\\u2019intervention","sql":"SELECT (rdv_lieu) AS label, COUNT(id) AS value FROM `rdv` GROUP BY (rdv_lieu)","area_name":"Nombre","goals":null}',
                'created_at' => '2018-12-11 13:29:34',
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'id_cms_statistics' => 12,
                'componentID' => '95d74818d9152d58be75824f7448ae6d',
                'component_name' => 'chartbar',
                'area_name' => 'area4',
                'sorting' => 0,
                'name' => NULL,
            'config' => '{"name":"Freins selon tranche d\\u2019\\u00e2ge","sql":"SELECT (frein.frein_type) AS \'label\', (personne.personne_tranche_age) AS \'value\'\\r\\nFROM personne\\r\\nINNER JOIN frein ON personne.id=frein.fkId","area_name":"Tranche d\\u2019\\u00e2ge","goals":null}',
                'created_at' => '2018-12-11 13:30:41',
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'id_cms_statistics' => 12,
                'componentID' => '19c335b626b8313c89973d8cce64caa9',
                'component_name' => 'chartbar',
                'area_name' => 'area1',
                'sorting' => 1,
                'name' => NULL,
            'config' => '{"name":"Freins observ\\u00e9","sql":"SELECT (frein_type) AS label, COUNT(id) AS value FROM `frein` GROUP BY (frein_type)","area_name":"Nombre","goals":null}',
                'created_at' => '2018-12-11 13:31:53',
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 22,
                'id_cms_statistics' => 14,
                'componentID' => 'ee00b10b7be3bfacbb6546b0c1c811bf',
                'component_name' => 'chartarea',
                'area_name' => 'area5',
                'sorting' => 0,
                'name' => NULL,
            'config' => '{"name":"Activit\\u00e9s","sql":"SELECT (rdv_activite) AS label, COUNT(id) AS value FROM `rdv` GROUP BY (rdv_activite)","area_name":"Nombre","goals":null}',
                'created_at' => '2018-12-12 09:05:37',
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 23,
                'id_cms_statistics' => 15,
                'componentID' => 'dcee4e9d18bfb280dc53786b98cd39e7',
                'component_name' => 'chartarea',
                'area_name' => 'area5',
                'sorting' => 0,
                'name' => NULL,
            'config' => '{"name":"Lieux d\\u2019intervention","sql":"SELECT (rdv_lieu) AS label, COUNT(id) AS value FROM `rdv` GROUP BY (rdv_lieu)","area_name":"Nombre","goals":null}',
                'created_at' => '2018-12-12 09:06:37',
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 24,
                'id_cms_statistics' => 16,
                'componentID' => '816fe3c9e320e67a2e95ba86ab444b70',
                'component_name' => 'chartarea',
                'area_name' => 'area5',
                'sorting' => 0,
                'name' => NULL,
            'config' => '{"name":"Freins selon tranche d\\u2019\\u00e2ge","sql":"SELECT (frein.frein_type) AS \'label\', (personne.personne_tranche_age) AS \'value\'\\r\\nFROM personne\\r\\nINNER JOIN frein ON personne.id=frein.fkId","area_name":"Tranche d\\u2019\\u00e2ge","goals":null}',
                'created_at' => '2018-12-12 09:07:30',
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 25,
                'id_cms_statistics' => 17,
                'componentID' => '35fed948bf9d147a9ce9f3b468bd84ca',
                'component_name' => 'chartarea',
                'area_name' => 'area5',
                'sorting' => 0,
                'name' => NULL,
            'config' => '{"name":"Freins observ\\u00e9","sql":"SELECT (frein_type) AS label, COUNT(created_at) AS value FROM `frein` GROUP BY (frein_type)","area_name":"Nombre","goals":null}',
                'created_at' => '2018-12-12 09:08:36',
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 26,
                'id_cms_statistics' => 18,
                'componentID' => 'b84e25c680c9a16a1615ff64eb4183c0',
                'component_name' => 'chartarea',
                'area_name' => 'area5',
                'sorting' => 0,
                'name' => NULL,
            'config' => '{"name":"Personnes par jour","sql":"SELECT (personne_date) AS label, COUNT(id) AS value FROM `personne`GROUP BY (personne_date)","area_name":"Nombre","goals":null}',
                'created_at' => '2018-12-12 09:10:06',
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 27,
                'id_cms_statistics' => 19,
                'componentID' => 'a42ad0bc53a988f18c0a5d5dcf2f9b48',
                'component_name' => 'chartarea',
                'area_name' => 'area5',
                'sorting' => 0,
                'name' => NULL,
            'config' => '{"name":"Personnes par jour ( Accueil libre )","sql":"SELECT (accueil_libre_heure) AS label, COUNT(id) AS value FROM `accueil_libre` GROUP BY (accueil_libre_heure)","area_name":"Nombre personnes","goals":null}',
                'created_at' => '2018-12-12 09:10:44',
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 28,
                'id_cms_statistics' => 20,
                'componentID' => '19d143c8fb66e3c0b29b1c916e7bddaa',
                'component_name' => 'chartarea',
                'area_name' => 'area5',
                'sorting' => 0,
                'name' => NULL,
            'config' => '{"name":"R\\u00e9partition par genre","sql":"SELECT (personne_sexe) AS label, COUNT(id) AS value FROM `personne` GROUP BY (personne_sexe)","area_name":"Nombre","goals":null}',
                'created_at' => '2018-12-12 09:11:39',
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 29,
                'id_cms_statistics' => 21,
                'componentID' => '39a47cc43cd2e98e7c6661bba705cad2',
                'component_name' => 'chartarea',
                'area_name' => 'area5',
                'sorting' => 0,
                'name' => NULL,
            'config' => '{"name":"R\\u00e9partition profil des b\\u00e9n\\u00e9ficiaires","sql":"SELECT (personne_beneficiaire ) AS label, COUNT(id) AS value FROM `personne` GROUP BY (personne_beneficiaire)","area_name":"Nombre","goals":null}',
                'created_at' => '2018-12-12 09:12:39',
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 30,
                'id_cms_statistics' => 22,
                'componentID' => 'a42e58794f4d6b41ea3aca7c3c6e0f55',
                'component_name' => 'chartarea',
                'area_name' => 'area5',
                'sorting' => 0,
                'name' => NULL,
            'config' => '{"name":"R\\u00e9partition par \\u00e2ge","sql":"SELECT (personne_tranche_age) AS label, COUNT(id) AS value FROM `personne` GROUP BY (personne_tranche_age)","area_name":"Nombre","goals":null}',
                'created_at' => '2018-12-12 09:13:30',
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 31,
                'id_cms_statistics' => 13,
                'componentID' => '2f2f6a1a08d0550122b4dbf88f97ca08',
                'component_name' => 'chartarea',
                'area_name' => 'area5',
                'sorting' => 0,
                'name' => NULL,
            'config' => '{"name":"Contacts","sql":"SELECT (personne_contact) AS label, COUNT(id) AS value FROM `personne` GROUP BY (personne_contact)","area_name":"Nombre","goals":null}',
                'created_at' => '2018-12-12 14:53:08',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}