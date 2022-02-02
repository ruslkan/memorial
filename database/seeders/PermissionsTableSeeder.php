<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     *
     * @throws Exception
     */
    public function run()
    {
     try {
        \DB::beginTransaction();

        \DB::table('permissions')->delete();

        \DB::table('permissions')->insert(array (
                0 => 
                array (
                    'id' => 1,
                    'key' => 'browse_admin',
                    'table_name' => NULL,
                    'created_at' => '2021-08-19 05:43:34',
                    'updated_at' => '2021-08-19 05:43:34',
                ),
                1 => 
                array (
                    'id' => 2,
                    'key' => 'browse_bread',
                    'table_name' => NULL,
                    'created_at' => '2021-08-19 05:43:34',
                    'updated_at' => '2021-08-19 05:43:34',
                ),
                2 => 
                array (
                    'id' => 3,
                    'key' => 'browse_database',
                    'table_name' => NULL,
                    'created_at' => '2021-08-19 05:43:34',
                    'updated_at' => '2021-08-19 05:43:34',
                ),
                3 => 
                array (
                    'id' => 4,
                    'key' => 'browse_media',
                    'table_name' => NULL,
                    'created_at' => '2021-08-19 05:43:34',
                    'updated_at' => '2021-08-19 05:43:34',
                ),
                4 => 
                array (
                    'id' => 5,
                    'key' => 'browse_compass',
                    'table_name' => NULL,
                    'created_at' => '2021-08-19 05:43:34',
                    'updated_at' => '2021-08-19 05:43:34',
                ),
                5 => 
                array (
                    'id' => 6,
                    'key' => 'browse_menus',
                    'table_name' => 'menus',
                    'created_at' => '2021-08-19 05:43:35',
                    'updated_at' => '2021-08-19 05:43:35',
                ),
                6 => 
                array (
                    'id' => 7,
                    'key' => 'read_menus',
                    'table_name' => 'menus',
                    'created_at' => '2021-08-19 05:43:35',
                    'updated_at' => '2021-08-19 05:43:35',
                ),
                7 => 
                array (
                    'id' => 8,
                    'key' => 'edit_menus',
                    'table_name' => 'menus',
                    'created_at' => '2021-08-19 05:43:35',
                    'updated_at' => '2021-08-19 05:43:35',
                ),
                8 => 
                array (
                    'id' => 9,
                    'key' => 'add_menus',
                    'table_name' => 'menus',
                    'created_at' => '2021-08-19 05:43:35',
                    'updated_at' => '2021-08-19 05:43:35',
                ),
                9 => 
                array (
                    'id' => 10,
                    'key' => 'delete_menus',
                    'table_name' => 'menus',
                    'created_at' => '2021-08-19 05:43:35',
                    'updated_at' => '2021-08-19 05:43:35',
                ),
                10 => 
                array (
                    'id' => 11,
                    'key' => 'browse_roles',
                    'table_name' => 'roles',
                    'created_at' => '2021-08-19 05:43:35',
                    'updated_at' => '2021-08-19 05:43:35',
                ),
                11 => 
                array (
                    'id' => 12,
                    'key' => 'read_roles',
                    'table_name' => 'roles',
                    'created_at' => '2021-08-19 05:43:35',
                    'updated_at' => '2021-08-19 05:43:35',
                ),
                12 => 
                array (
                    'id' => 13,
                    'key' => 'edit_roles',
                    'table_name' => 'roles',
                    'created_at' => '2021-08-19 05:43:35',
                    'updated_at' => '2021-08-19 05:43:35',
                ),
                13 => 
                array (
                    'id' => 14,
                    'key' => 'add_roles',
                    'table_name' => 'roles',
                    'created_at' => '2021-08-19 05:43:36',
                    'updated_at' => '2021-08-19 05:43:36',
                ),
                14 => 
                array (
                    'id' => 15,
                    'key' => 'delete_roles',
                    'table_name' => 'roles',
                    'created_at' => '2021-08-19 05:43:36',
                    'updated_at' => '2021-08-19 05:43:36',
                ),
                15 => 
                array (
                    'id' => 16,
                    'key' => 'browse_users',
                    'table_name' => 'users',
                    'created_at' => '2021-08-19 05:43:36',
                    'updated_at' => '2021-08-19 05:43:36',
                ),
                16 => 
                array (
                    'id' => 17,
                    'key' => 'read_users',
                    'table_name' => 'users',
                    'created_at' => '2021-08-19 05:43:36',
                    'updated_at' => '2021-08-19 05:43:36',
                ),
                17 => 
                array (
                    'id' => 18,
                    'key' => 'edit_users',
                    'table_name' => 'users',
                    'created_at' => '2021-08-19 05:43:36',
                    'updated_at' => '2021-08-19 05:43:36',
                ),
                18 => 
                array (
                    'id' => 19,
                    'key' => 'add_users',
                    'table_name' => 'users',
                    'created_at' => '2021-08-19 05:43:36',
                    'updated_at' => '2021-08-19 05:43:36',
                ),
                19 => 
                array (
                    'id' => 20,
                    'key' => 'delete_users',
                    'table_name' => 'users',
                    'created_at' => '2021-08-19 05:43:36',
                    'updated_at' => '2021-08-19 05:43:36',
                ),
                20 => 
                array (
                    'id' => 21,
                    'key' => 'browse_settings',
                    'table_name' => 'settings',
                    'created_at' => '2021-08-19 05:43:36',
                    'updated_at' => '2021-08-19 05:43:36',
                ),
                21 => 
                array (
                    'id' => 22,
                    'key' => 'read_settings',
                    'table_name' => 'settings',
                    'created_at' => '2021-08-19 05:43:36',
                    'updated_at' => '2021-08-19 05:43:36',
                ),
                22 => 
                array (
                    'id' => 23,
                    'key' => 'edit_settings',
                    'table_name' => 'settings',
                    'created_at' => '2021-08-19 05:43:37',
                    'updated_at' => '2021-08-19 05:43:37',
                ),
                23 => 
                array (
                    'id' => 24,
                    'key' => 'add_settings',
                    'table_name' => 'settings',
                    'created_at' => '2021-08-19 05:43:37',
                    'updated_at' => '2021-08-19 05:43:37',
                ),
                24 => 
                array (
                    'id' => 25,
                    'key' => 'delete_settings',
                    'table_name' => 'settings',
                    'created_at' => '2021-08-19 05:43:37',
                    'updated_at' => '2021-08-19 05:43:37',
                ),
                25 => 
                array (
                    'id' => 26,
                    'key' => 'browse_hooks',
                    'table_name' => NULL,
                    'created_at' => '2021-08-19 05:43:41',
                    'updated_at' => '2021-08-19 05:43:41',
                ),
                26 => 
                array (
                    'id' => 32,
                    'key' => 'browse_categories',
                    'table_name' => 'categories',
                    'created_at' => '2021-08-19 11:10:46',
                    'updated_at' => '2021-08-19 11:10:46',
                ),
                27 => 
                array (
                    'id' => 33,
                    'key' => 'read_categories',
                    'table_name' => 'categories',
                    'created_at' => '2021-08-19 11:10:46',
                    'updated_at' => '2021-08-19 11:10:46',
                ),
                28 => 
                array (
                    'id' => 34,
                    'key' => 'edit_categories',
                    'table_name' => 'categories',
                    'created_at' => '2021-08-19 11:10:46',
                    'updated_at' => '2021-08-19 11:10:46',
                ),
                29 => 
                array (
                    'id' => 35,
                    'key' => 'add_categories',
                    'table_name' => 'categories',
                    'created_at' => '2021-08-19 11:10:46',
                    'updated_at' => '2021-08-19 11:10:46',
                ),
                30 => 
                array (
                    'id' => 36,
                    'key' => 'delete_categories',
                    'table_name' => 'categories',
                    'created_at' => '2021-08-19 11:10:46',
                    'updated_at' => '2021-08-19 11:10:46',
                ),
                31 => 
                array (
                    'id' => 37,
                    'key' => 'browse_products',
                    'table_name' => 'products',
                    'created_at' => '2021-08-19 11:13:36',
                    'updated_at' => '2021-08-19 11:13:36',
                ),
                32 => 
                array (
                    'id' => 38,
                    'key' => 'read_products',
                    'table_name' => 'products',
                    'created_at' => '2021-08-19 11:13:36',
                    'updated_at' => '2021-08-19 11:13:36',
                ),
                33 => 
                array (
                    'id' => 39,
                    'key' => 'edit_products',
                    'table_name' => 'products',
                    'created_at' => '2021-08-19 11:13:36',
                    'updated_at' => '2021-08-19 11:13:36',
                ),
                34 => 
                array (
                    'id' => 40,
                    'key' => 'add_products',
                    'table_name' => 'products',
                    'created_at' => '2021-08-19 11:13:36',
                    'updated_at' => '2021-08-19 11:13:36',
                ),
                35 => 
                array (
                    'id' => 41,
                    'key' => 'delete_products',
                    'table_name' => 'products',
                    'created_at' => '2021-08-19 11:13:36',
                    'updated_at' => '2021-08-19 11:13:36',
                ),
                36 => 
                array (
                    'id' => 42,
                    'key' => 'browse_materials',
                    'table_name' => 'materials',
                    'created_at' => '2021-08-19 12:47:31',
                    'updated_at' => '2021-08-19 12:47:31',
                ),
                37 => 
                array (
                    'id' => 43,
                    'key' => 'read_materials',
                    'table_name' => 'materials',
                    'created_at' => '2021-08-19 12:47:31',
                    'updated_at' => '2021-08-19 12:47:31',
                ),
                38 => 
                array (
                    'id' => 44,
                    'key' => 'edit_materials',
                    'table_name' => 'materials',
                    'created_at' => '2021-08-19 12:47:31',
                    'updated_at' => '2021-08-19 12:47:31',
                ),
                39 => 
                array (
                    'id' => 45,
                    'key' => 'add_materials',
                    'table_name' => 'materials',
                    'created_at' => '2021-08-19 12:47:31',
                    'updated_at' => '2021-08-19 12:47:31',
                ),
                40 => 
                array (
                    'id' => 46,
                    'key' => 'delete_materials',
                    'table_name' => 'materials',
                    'created_at' => '2021-08-19 12:47:31',
                    'updated_at' => '2021-08-19 12:47:31',
                ),
                41 => 
                array (
                    'id' => 47,
                    'key' => 'browse_parterres',
                    'table_name' => 'parterres',
                    'created_at' => '2021-09-04 20:02:23',
                    'updated_at' => '2021-09-04 20:02:23',
                ),
                42 => 
                array (
                    'id' => 48,
                    'key' => 'read_parterres',
                    'table_name' => 'parterres',
                    'created_at' => '2021-09-04 20:02:23',
                    'updated_at' => '2021-09-04 20:02:23',
                ),
                43 => 
                array (
                    'id' => 49,
                    'key' => 'edit_parterres',
                    'table_name' => 'parterres',
                    'created_at' => '2021-09-04 20:02:23',
                    'updated_at' => '2021-09-04 20:02:23',
                ),
                44 => 
                array (
                    'id' => 50,
                    'key' => 'add_parterres',
                    'table_name' => 'parterres',
                    'created_at' => '2021-09-04 20:02:23',
                    'updated_at' => '2021-09-04 20:02:23',
                ),
                45 => 
                array (
                    'id' => 51,
                    'key' => 'delete_parterres',
                    'table_name' => 'parterres',
                    'created_at' => '2021-09-04 20:02:23',
                    'updated_at' => '2021-09-04 20:02:23',
                ),
                46 => 
                array (
                    'id' => 52,
                    'key' => 'browse_stellas',
                    'table_name' => 'stellas',
                    'created_at' => '2021-09-05 18:35:54',
                    'updated_at' => '2021-09-05 18:35:54',
                ),
                47 => 
                array (
                    'id' => 53,
                    'key' => 'read_stellas',
                    'table_name' => 'stellas',
                    'created_at' => '2021-09-05 18:35:54',
                    'updated_at' => '2021-09-05 18:35:54',
                ),
                48 => 
                array (
                    'id' => 54,
                    'key' => 'edit_stellas',
                    'table_name' => 'stellas',
                    'created_at' => '2021-09-05 18:35:54',
                    'updated_at' => '2021-09-05 18:35:54',
                ),
                49 => 
                array (
                    'id' => 55,
                    'key' => 'add_stellas',
                    'table_name' => 'stellas',
                    'created_at' => '2021-09-05 18:35:54',
                    'updated_at' => '2021-09-05 18:35:54',
                ),
                50 => 
                array (
                    'id' => 56,
                    'key' => 'delete_stellas',
                    'table_name' => 'stellas',
                    'created_at' => '2021-09-05 18:35:54',
                    'updated_at' => '2021-09-05 18:35:54',
                ),
                51 => 
                array (
                    'id' => 57,
                    'key' => 'browse_services',
                    'table_name' => 'services',
                    'created_at' => '2021-09-06 19:05:16',
                    'updated_at' => '2021-09-06 19:05:16',
                ),
                52 => 
                array (
                    'id' => 58,
                    'key' => 'read_services',
                    'table_name' => 'services',
                    'created_at' => '2021-09-06 19:05:16',
                    'updated_at' => '2021-09-06 19:05:16',
                ),
                53 => 
                array (
                    'id' => 59,
                    'key' => 'edit_services',
                    'table_name' => 'services',
                    'created_at' => '2021-09-06 19:05:16',
                    'updated_at' => '2021-09-06 19:05:16',
                ),
                54 => 
                array (
                    'id' => 60,
                    'key' => 'add_services',
                    'table_name' => 'services',
                    'created_at' => '2021-09-06 19:05:16',
                    'updated_at' => '2021-09-06 19:05:16',
                ),
                55 => 
                array (
                    'id' => 61,
                    'key' => 'delete_services',
                    'table_name' => 'services',
                    'created_at' => '2021-09-06 19:05:16',
                    'updated_at' => '2021-09-06 19:05:16',
                ),
                56 => 
                array (
                    'id' => 67,
                    'key' => 'browse_pedestals',
                    'table_name' => 'pedestals',
                    'created_at' => '2021-09-24 06:06:34',
                    'updated_at' => '2021-09-24 06:06:34',
                ),
                57 => 
                array (
                    'id' => 68,
                    'key' => 'read_pedestals',
                    'table_name' => 'pedestals',
                    'created_at' => '2021-09-24 06:06:34',
                    'updated_at' => '2021-09-24 06:06:34',
                ),
                58 => 
                array (
                    'id' => 69,
                    'key' => 'edit_pedestals',
                    'table_name' => 'pedestals',
                    'created_at' => '2021-09-24 06:06:34',
                    'updated_at' => '2021-09-24 06:06:34',
                ),
                59 => 
                array (
                    'id' => 70,
                    'key' => 'add_pedestals',
                    'table_name' => 'pedestals',
                    'created_at' => '2021-09-24 06:06:34',
                    'updated_at' => '2021-09-24 06:06:34',
                ),
                60 => 
                array (
                    'id' => 71,
                    'key' => 'delete_pedestals',
                    'table_name' => 'pedestals',
                    'created_at' => '2021-09-24 06:06:34',
                    'updated_at' => '2021-09-24 06:06:34',
                ),
                61 => 
                array (
                    'id' => 72,
                    'key' => 'browse_tombstones',
                    'table_name' => 'tombstones',
                    'created_at' => '2021-09-24 07:26:53',
                    'updated_at' => '2021-09-24 07:26:53',
                ),
                62 => 
                array (
                    'id' => 73,
                    'key' => 'read_tombstones',
                    'table_name' => 'tombstones',
                    'created_at' => '2021-09-24 07:26:53',
                    'updated_at' => '2021-09-24 07:26:53',
                ),
                63 => 
                array (
                    'id' => 74,
                    'key' => 'edit_tombstones',
                    'table_name' => 'tombstones',
                    'created_at' => '2021-09-24 07:26:53',
                    'updated_at' => '2021-09-24 07:26:53',
                ),
                64 => 
                array (
                    'id' => 75,
                    'key' => 'add_tombstones',
                    'table_name' => 'tombstones',
                    'created_at' => '2021-09-24 07:26:53',
                    'updated_at' => '2021-09-24 07:26:53',
                ),
                65 => 
                array (
                    'id' => 76,
                    'key' => 'delete_tombstones',
                    'table_name' => 'tombstones',
                    'created_at' => '2021-09-24 07:26:53',
                    'updated_at' => '2021-09-24 07:26:53',
                ),
                66 => 
                array (
                    'id' => 77,
                    'key' => 'browse_pillars',
                    'table_name' => 'pillars',
                    'created_at' => '2021-10-25 14:40:19',
                    'updated_at' => '2021-10-25 14:40:19',
                ),
                67 => 
                array (
                    'id' => 78,
                    'key' => 'read_pillars',
                    'table_name' => 'pillars',
                    'created_at' => '2021-10-25 14:40:19',
                    'updated_at' => '2021-10-25 14:40:19',
                ),
                68 => 
                array (
                    'id' => 79,
                    'key' => 'edit_pillars',
                    'table_name' => 'pillars',
                    'created_at' => '2021-10-25 14:40:19',
                    'updated_at' => '2021-10-25 14:40:19',
                ),
                69 => 
                array (
                    'id' => 80,
                    'key' => 'add_pillars',
                    'table_name' => 'pillars',
                    'created_at' => '2021-10-25 14:40:19',
                    'updated_at' => '2021-10-25 14:40:19',
                ),
                70 => 
                array (
                    'id' => 81,
                    'key' => 'delete_pillars',
                    'table_name' => 'pillars',
                    'created_at' => '2021-10-25 14:40:19',
                    'updated_at' => '2021-10-25 14:40:19',
                ),
                71 => 
                array (
                    'id' => 82,
                    'key' => 'browse_catalog_accessories',
                    'table_name' => 'catalog_accessories',
                    'created_at' => '2022-01-16 16:28:06',
                    'updated_at' => '2022-01-16 16:28:06',
                ),
                72 => 
                array (
                    'id' => 83,
                    'key' => 'read_catalog_accessories',
                    'table_name' => 'catalog_accessories',
                    'created_at' => '2022-01-16 16:28:06',
                    'updated_at' => '2022-01-16 16:28:06',
                ),
                73 => 
                array (
                    'id' => 84,
                    'key' => 'edit_catalog_accessories',
                    'table_name' => 'catalog_accessories',
                    'created_at' => '2022-01-16 16:28:06',
                    'updated_at' => '2022-01-16 16:28:06',
                ),
                74 => 
                array (
                    'id' => 85,
                    'key' => 'add_catalog_accessories',
                    'table_name' => 'catalog_accessories',
                    'created_at' => '2022-01-16 16:28:06',
                    'updated_at' => '2022-01-16 16:28:06',
                ),
                75 => 
                array (
                    'id' => 86,
                    'key' => 'delete_catalog_accessories',
                    'table_name' => 'catalog_accessories',
                    'created_at' => '2022-01-16 16:28:06',
                    'updated_at' => '2022-01-16 16:28:06',
                ),
                76 => 
                array (
                    'id' => 102,
                    'key' => 'browse_accessories',
                    'table_name' => 'accessories',
                    'created_at' => '2022-01-17 20:46:49',
                    'updated_at' => '2022-01-17 20:46:49',
                ),
                77 => 
                array (
                    'id' => 103,
                    'key' => 'read_accessories',
                    'table_name' => 'accessories',
                    'created_at' => '2022-01-17 20:46:49',
                    'updated_at' => '2022-01-17 20:46:49',
                ),
                78 => 
                array (
                    'id' => 104,
                    'key' => 'edit_accessories',
                    'table_name' => 'accessories',
                    'created_at' => '2022-01-17 20:46:49',
                    'updated_at' => '2022-01-17 20:46:49',
                ),
                79 => 
                array (
                    'id' => 105,
                    'key' => 'add_accessories',
                    'table_name' => 'accessories',
                    'created_at' => '2022-01-17 20:46:49',
                    'updated_at' => '2022-01-17 20:46:49',
                ),
                80 => 
                array (
                    'id' => 106,
                    'key' => 'delete_accessories',
                    'table_name' => 'accessories',
                    'created_at' => '2022-01-17 20:46:49',
                    'updated_at' => '2022-01-17 20:46:49',
                ),
                81 => 
                array (
                    'id' => 107,
                    'key' => 'browse_accessory_categories',
                    'table_name' => 'accessory_categories',
                    'created_at' => '2022-01-17 20:49:09',
                    'updated_at' => '2022-01-17 20:49:09',
                ),
                82 => 
                array (
                    'id' => 108,
                    'key' => 'read_accessory_categories',
                    'table_name' => 'accessory_categories',
                    'created_at' => '2022-01-17 20:49:09',
                    'updated_at' => '2022-01-17 20:49:09',
                ),
                83 => 
                array (
                    'id' => 109,
                    'key' => 'edit_accessory_categories',
                    'table_name' => 'accessory_categories',
                    'created_at' => '2022-01-17 20:49:09',
                    'updated_at' => '2022-01-17 20:49:09',
                ),
                84 => 
                array (
                    'id' => 110,
                    'key' => 'add_accessory_categories',
                    'table_name' => 'accessory_categories',
                    'created_at' => '2022-01-17 20:49:09',
                    'updated_at' => '2022-01-17 20:49:09',
                ),
                85 => 
                array (
                    'id' => 111,
                    'key' => 'delete_accessory_categories',
                    'table_name' => 'accessory_categories',
                    'created_at' => '2022-01-17 20:49:09',
                    'updated_at' => '2022-01-17 20:49:09',
                ),
            ));
       } catch(Exception $e) {
         throw new Exception('Exception occur ' . $e);

         \DB::rollBack();
       }

       \DB::commit();
    }
}
