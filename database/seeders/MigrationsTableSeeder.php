<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MigrationsTableSeeder extends Seeder
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

        \DB::table('migrations')->delete();

        \DB::table('migrations')->insert(array (
                0 => 
                array (
                    'id' => 1,
                    'migration' => '2014_10_12_000000_create_users_table',
                    'batch' => 1,
                ),
                1 => 
                array (
                    'id' => 2,
                    'migration' => '2014_10_12_100000_create_password_resets_table',
                    'batch' => 1,
                ),
                2 => 
                array (
                    'id' => 3,
                    'migration' => '2016_01_01_000000_add_voyager_user_fields',
                    'batch' => 1,
                ),
                3 => 
                array (
                    'id' => 4,
                    'migration' => '2016_01_01_000000_create_data_types_table',
                    'batch' => 1,
                ),
                4 => 
                array (
                    'id' => 5,
                    'migration' => '2016_05_19_173453_create_menu_table',
                    'batch' => 1,
                ),
                5 => 
                array (
                    'id' => 6,
                    'migration' => '2016_10_21_190000_create_roles_table',
                    'batch' => 1,
                ),
                6 => 
                array (
                    'id' => 7,
                    'migration' => '2016_10_21_190000_create_settings_table',
                    'batch' => 1,
                ),
                7 => 
                array (
                    'id' => 8,
                    'migration' => '2016_11_30_135954_create_permission_table',
                    'batch' => 1,
                ),
                8 => 
                array (
                    'id' => 9,
                    'migration' => '2016_11_30_141208_create_permission_role_table',
                    'batch' => 1,
                ),
                9 => 
                array (
                    'id' => 10,
                    'migration' => '2016_12_26_201236_data_types__add__server_side',
                    'batch' => 1,
                ),
                10 => 
                array (
                    'id' => 11,
                    'migration' => '2017_01_13_000000_add_route_to_menu_items_table',
                    'batch' => 1,
                ),
                11 => 
                array (
                    'id' => 12,
                    'migration' => '2017_01_14_005015_create_translations_table',
                    'batch' => 1,
                ),
                12 => 
                array (
                    'id' => 13,
                    'migration' => '2017_01_15_000000_make_table_name_nullable_in_permissions_table',
                    'batch' => 1,
                ),
                13 => 
                array (
                    'id' => 14,
                    'migration' => '2017_03_06_000000_add_controller_to_data_types_table',
                    'batch' => 1,
                ),
                14 => 
                array (
                    'id' => 15,
                    'migration' => '2017_04_21_000000_add_order_to_data_rows_table',
                    'batch' => 1,
                ),
                15 => 
                array (
                    'id' => 16,
                    'migration' => '2017_07_05_210000_add_policyname_to_data_types_table',
                    'batch' => 1,
                ),
                16 => 
                array (
                    'id' => 17,
                    'migration' => '2017_08_05_000000_add_group_to_settings_table',
                    'batch' => 1,
                ),
                17 => 
                array (
                    'id' => 18,
                    'migration' => '2017_11_26_013050_add_user_role_relationship',
                    'batch' => 1,
                ),
                18 => 
                array (
                    'id' => 19,
                    'migration' => '2017_11_26_015000_create_user_roles_table',
                    'batch' => 1,
                ),
                19 => 
                array (
                    'id' => 20,
                    'migration' => '2018_03_11_000000_add_user_settings',
                    'batch' => 1,
                ),
                20 => 
                array (
                    'id' => 21,
                    'migration' => '2018_03_14_000000_add_details_to_data_types_table',
                    'batch' => 1,
                ),
                21 => 
                array (
                    'id' => 22,
                    'migration' => '2018_03_16_000000_make_settings_value_nullable',
                    'batch' => 1,
                ),
                22 => 
                array (
                    'id' => 23,
                    'migration' => '2019_08_19_000000_create_failed_jobs_table',
                    'batch' => 1,
                ),
                23 => 
                array (
                    'id' => 24,
                    'migration' => '2019_12_14_000001_create_personal_access_tokens_table',
                    'batch' => 1,
                ),
                24 => 
                array (
                    'id' => 25,
                    'migration' => '2021_08_19_061026_create_categories_table',
                    'batch' => 2,
                ),
                25 => 
                array (
                    'id' => 26,
                    'migration' => '2021_08_19_061100_create_products_table',
                    'batch' => 3,
                ),
                26 => 
                array (
                    'id' => 27,
                    'migration' => '2021_08_19_061155_create_materials_table',
                    'batch' => 3,
                ),
                27 => 
                array (
                    'id' => 28,
                    'migration' => '2021_08_19_061243_create_stellas_table',
                    'batch' => 3,
                ),
                28 => 
                array (
                    'id' => 29,
                    'migration' => '2021_08_19_061422_create_parterres_table',
                    'batch' => 3,
                ),
                29 => 
                array (
                    'id' => 30,
                    'migration' => '2021_08_19_061459_create_tombstones_table',
                    'batch' => 3,
                ),
                30 => 
                array (
                    'id' => 31,
                    'migration' => '2021_08_19_114703_add_material_id_colums_to_products_table',
                    'batch' => 4,
                ),
                31 => 
                array (
                    'id' => 32,
                    'migration' => '2022_01_29_190014_create_accessories_table',
                    'batch' => 5,
                ),
                32 => 
                array (
                    'id' => 33,
                    'migration' => '2022_01_29_190014_create_accessory_categories_table',
                    'batch' => 5,
                ),
                33 => 
                array (
                    'id' => 34,
                    'migration' => '2022_01_29_190014_create_categories_table',
                    'batch' => 5,
                ),
                34 => 
                array (
                    'id' => 35,
                    'migration' => '2022_01_29_190014_create_data_types_table',
                    'batch' => 5,
                ),
                35 => 
                array (
                    'id' => 36,
                    'migration' => '2022_01_29_190014_create_failed_jobs_table',
                    'batch' => 5,
                ),
                36 => 
                array (
                    'id' => 37,
                    'migration' => '2022_01_29_190014_create_materials_table',
                    'batch' => 5,
                ),
                37 => 
                array (
                    'id' => 38,
                    'migration' => '2022_01_29_190014_create_menu_items_table',
                    'batch' => 5,
                ),
                38 => 
                array (
                    'id' => 39,
                    'migration' => '2022_01_29_190014_create_menus_table',
                    'batch' => 5,
                ),
                39 => 
                array (
                    'id' => 40,
                    'migration' => '2022_01_29_190014_create_parterres_table',
                    'batch' => 5,
                ),
                40 => 
                array (
                    'id' => 41,
                    'migration' => '2022_01_29_190014_create_password_resets_table',
                    'batch' => 5,
                ),
                41 => 
                array (
                    'id' => 42,
                    'migration' => '2022_01_29_190014_create_pedestals_table',
                    'batch' => 5,
                ),
                42 => 
                array (
                    'id' => 43,
                    'migration' => '2022_01_29_190014_create_permission_role_table',
                    'batch' => 5,
                ),
                43 => 
                array (
                    'id' => 44,
                    'migration' => '2022_01_29_190014_create_permissions_table',
                    'batch' => 5,
                ),
                44 => 
                array (
                    'id' => 45,
                    'migration' => '2022_01_29_190014_create_personal_access_tokens_table',
                    'batch' => 5,
                ),
                45 => 
                array (
                    'id' => 46,
                    'migration' => '2022_01_29_190014_create_pillars_table',
                    'batch' => 5,
                ),
                46 => 
                array (
                    'id' => 47,
                    'migration' => '2022_01_29_190014_create_products_table',
                    'batch' => 5,
                ),
                47 => 
                array (
                    'id' => 48,
                    'migration' => '2022_01_29_190014_create_roles_table',
                    'batch' => 5,
                ),
                48 => 
                array (
                    'id' => 49,
                    'migration' => '2022_01_29_190014_create_services_table',
                    'batch' => 5,
                ),
                49 => 
                array (
                    'id' => 50,
                    'migration' => '2022_01_29_190014_create_settings_table',
                    'batch' => 5,
                ),
                50 => 
                array (
                    'id' => 51,
                    'migration' => '2022_01_29_190014_create_stellas_table',
                    'batch' => 5,
                ),
                51 => 
                array (
                    'id' => 52,
                    'migration' => '2022_01_29_190014_create_tombstones_table',
                    'batch' => 5,
                ),
                52 => 
                array (
                    'id' => 53,
                    'migration' => '2022_01_29_190014_create_translations_table',
                    'batch' => 5,
                ),
                53 => 
                array (
                    'id' => 54,
                    'migration' => '2022_01_29_190014_create_user_roles_table',
                    'batch' => 5,
                ),
                54 => 
                array (
                    'id' => 55,
                    'migration' => '2022_01_29_190014_create_users_table',
                    'batch' => 5,
                ),
                55 => 
                array (
                    'id' => 56,
                    'migration' => '2022_01_29_190015_add_foreign_keys_to_menu_items_table',
                    'batch' => 5,
                ),
                56 => 
                array (
                    'id' => 57,
                    'migration' => '2022_01_29_190015_add_foreign_keys_to_permission_role_table',
                    'batch' => 5,
                ),
                57 => 
                array (
                    'id' => 58,
                    'migration' => '2022_01_29_190015_add_foreign_keys_to_user_roles_table',
                    'batch' => 5,
                ),
                58 => 
                array (
                    'id' => 59,
                    'migration' => '2022_01_29_190015_add_foreign_keys_to_users_table',
                    'batch' => 5,
                ),
                59 => 
                array (
                    'id' => 60,
                    'migration' => '2022_01_29_190550_create_accessories_table',
                    'batch' => 0,
                ),
                60 => 
                array (
                    'id' => 61,
                    'migration' => '2022_01_29_190550_create_accessory_categories_table',
                    'batch' => 0,
                ),
                61 => 
                array (
                    'id' => 62,
                    'migration' => '2022_01_29_190550_create_categories_table',
                    'batch' => 0,
                ),
                62 => 
                array (
                    'id' => 63,
                    'migration' => '2022_01_29_190550_create_data_rows_table',
                    'batch' => 0,
                ),
                63 => 
                array (
                    'id' => 64,
                    'migration' => '2022_01_29_190550_create_data_types_table',
                    'batch' => 0,
                ),
                64 => 
                array (
                    'id' => 65,
                    'migration' => '2022_01_29_190550_create_failed_jobs_table',
                    'batch' => 0,
                ),
                65 => 
                array (
                    'id' => 66,
                    'migration' => '2022_01_29_190550_create_materials_table',
                    'batch' => 0,
                ),
                66 => 
                array (
                    'id' => 67,
                    'migration' => '2022_01_29_190550_create_menu_items_table',
                    'batch' => 0,
                ),
                67 => 
                array (
                    'id' => 68,
                    'migration' => '2022_01_29_190550_create_menus_table',
                    'batch' => 0,
                ),
                68 => 
                array (
                    'id' => 69,
                    'migration' => '2022_01_29_190550_create_parterres_table',
                    'batch' => 0,
                ),
                69 => 
                array (
                    'id' => 70,
                    'migration' => '2022_01_29_190550_create_password_resets_table',
                    'batch' => 0,
                ),
                70 => 
                array (
                    'id' => 71,
                    'migration' => '2022_01_29_190550_create_pedestals_table',
                    'batch' => 0,
                ),
                71 => 
                array (
                    'id' => 72,
                    'migration' => '2022_01_29_190550_create_permission_role_table',
                    'batch' => 0,
                ),
                72 => 
                array (
                    'id' => 73,
                    'migration' => '2022_01_29_190550_create_permissions_table',
                    'batch' => 0,
                ),
                73 => 
                array (
                    'id' => 74,
                    'migration' => '2022_01_29_190550_create_personal_access_tokens_table',
                    'batch' => 0,
                ),
                74 => 
                array (
                    'id' => 75,
                    'migration' => '2022_01_29_190550_create_pillars_table',
                    'batch' => 0,
                ),
                75 => 
                array (
                    'id' => 76,
                    'migration' => '2022_01_29_190550_create_products_table',
                    'batch' => 0,
                ),
                76 => 
                array (
                    'id' => 77,
                    'migration' => '2022_01_29_190550_create_roles_table',
                    'batch' => 0,
                ),
                77 => 
                array (
                    'id' => 78,
                    'migration' => '2022_01_29_190550_create_services_table',
                    'batch' => 0,
                ),
                78 => 
                array (
                    'id' => 79,
                    'migration' => '2022_01_29_190550_create_settings_table',
                    'batch' => 0,
                ),
                79 => 
                array (
                    'id' => 80,
                    'migration' => '2022_01_29_190550_create_stellas_table',
                    'batch' => 0,
                ),
                80 => 
                array (
                    'id' => 81,
                    'migration' => '2022_01_29_190550_create_tombstones_table',
                    'batch' => 0,
                ),
                81 => 
                array (
                    'id' => 82,
                    'migration' => '2022_01_29_190550_create_translations_table',
                    'batch' => 0,
                ),
                82 => 
                array (
                    'id' => 83,
                    'migration' => '2022_01_29_190550_create_user_roles_table',
                    'batch' => 0,
                ),
                83 => 
                array (
                    'id' => 84,
                    'migration' => '2022_01_29_190550_create_users_table',
                    'batch' => 0,
                ),
                84 => 
                array (
                    'id' => 85,
                    'migration' => '2022_01_29_190551_add_foreign_keys_to_data_rows_table',
                    'batch' => 0,
                ),
                85 => 
                array (
                    'id' => 86,
                    'migration' => '2022_01_29_190551_add_foreign_keys_to_menu_items_table',
                    'batch' => 0,
                ),
                86 => 
                array (
                    'id' => 87,
                    'migration' => '2022_01_29_190551_add_foreign_keys_to_permission_role_table',
                    'batch' => 0,
                ),
                87 => 
                array (
                    'id' => 88,
                    'migration' => '2022_01_29_190551_add_foreign_keys_to_user_roles_table',
                    'batch' => 0,
                ),
                88 => 
                array (
                    'id' => 89,
                    'migration' => '2022_01_29_190551_add_foreign_keys_to_users_table',
                    'batch' => 0,
                ),
                89 => 
                array (
                    'id' => 90,
                    'migration' => '2022_01_31_072432_create_accessories_table',
                    'batch' => 0,
                ),
                90 => 
                array (
                    'id' => 91,
                    'migration' => '2022_01_31_072432_create_accessory_categories_table',
                    'batch' => 0,
                ),
                91 => 
                array (
                    'id' => 92,
                    'migration' => '2022_01_31_072432_create_categories_table',
                    'batch' => 0,
                ),
                92 => 
                array (
                    'id' => 93,
                    'migration' => '2022_01_31_072432_create_data_rows_table',
                    'batch' => 0,
                ),
                93 => 
                array (
                    'id' => 94,
                    'migration' => '2022_01_31_072432_create_data_types_table',
                    'batch' => 0,
                ),
                94 => 
                array (
                    'id' => 95,
                    'migration' => '2022_01_31_072432_create_failed_jobs_table',
                    'batch' => 0,
                ),
                95 => 
                array (
                    'id' => 96,
                    'migration' => '2022_01_31_072432_create_materials_table',
                    'batch' => 0,
                ),
                96 => 
                array (
                    'id' => 97,
                    'migration' => '2022_01_31_072432_create_menu_items_table',
                    'batch' => 0,
                ),
                97 => 
                array (
                    'id' => 98,
                    'migration' => '2022_01_31_072432_create_menus_table',
                    'batch' => 0,
                ),
                98 => 
                array (
                    'id' => 99,
                    'migration' => '2022_01_31_072432_create_parterres_table',
                    'batch' => 0,
                ),
                99 => 
                array (
                    'id' => 100,
                    'migration' => '2022_01_31_072432_create_password_resets_table',
                    'batch' => 0,
                ),
                100 => 
                array (
                    'id' => 101,
                    'migration' => '2022_01_31_072432_create_pedestals_table',
                    'batch' => 0,
                ),
                101 => 
                array (
                    'id' => 102,
                    'migration' => '2022_01_31_072432_create_permission_role_table',
                    'batch' => 0,
                ),
                102 => 
                array (
                    'id' => 103,
                    'migration' => '2022_01_31_072432_create_permissions_table',
                    'batch' => 0,
                ),
                103 => 
                array (
                    'id' => 104,
                    'migration' => '2022_01_31_072432_create_personal_access_tokens_table',
                    'batch' => 0,
                ),
                104 => 
                array (
                    'id' => 105,
                    'migration' => '2022_01_31_072432_create_pillars_table',
                    'batch' => 0,
                ),
                105 => 
                array (
                    'id' => 106,
                    'migration' => '2022_01_31_072432_create_products_table',
                    'batch' => 0,
                ),
                106 => 
                array (
                    'id' => 107,
                    'migration' => '2022_01_31_072432_create_roles_table',
                    'batch' => 0,
                ),
                107 => 
                array (
                    'id' => 108,
                    'migration' => '2022_01_31_072432_create_services_table',
                    'batch' => 0,
                ),
                108 => 
                array (
                    'id' => 109,
                    'migration' => '2022_01_31_072432_create_settings_table',
                    'batch' => 0,
                ),
                109 => 
                array (
                    'id' => 110,
                    'migration' => '2022_01_31_072432_create_stellas_table',
                    'batch' => 0,
                ),
                110 => 
                array (
                    'id' => 111,
                    'migration' => '2022_01_31_072432_create_tombstones_table',
                    'batch' => 0,
                ),
                111 => 
                array (
                    'id' => 112,
                    'migration' => '2022_01_31_072432_create_translations_table',
                    'batch' => 0,
                ),
                112 => 
                array (
                    'id' => 113,
                    'migration' => '2022_01_31_072432_create_user_roles_table',
                    'batch' => 0,
                ),
                113 => 
                array (
                    'id' => 114,
                    'migration' => '2022_01_31_072432_create_users_table',
                    'batch' => 0,
                ),
                114 => 
                array (
                    'id' => 115,
                    'migration' => '2022_01_31_072433_add_foreign_keys_to_data_rows_table',
                    'batch' => 0,
                ),
                115 => 
                array (
                    'id' => 116,
                    'migration' => '2022_01_31_072433_add_foreign_keys_to_menu_items_table',
                    'batch' => 0,
                ),
                116 => 
                array (
                    'id' => 117,
                    'migration' => '2022_01_31_072433_add_foreign_keys_to_permission_role_table',
                    'batch' => 0,
                ),
                117 => 
                array (
                    'id' => 118,
                    'migration' => '2022_01_31_072433_add_foreign_keys_to_user_roles_table',
                    'batch' => 0,
                ),
                118 => 
                array (
                    'id' => 119,
                    'migration' => '2022_01_31_072433_add_foreign_keys_to_users_table',
                    'batch' => 0,
                ),
                119 => 
                array (
                    'id' => 120,
                    'migration' => '2022_02_02_193617_create_accessories_table',
                    'batch' => 0,
                ),
                120 => 
                array (
                    'id' => 121,
                    'migration' => '2022_02_02_193617_create_accessory_categories_table',
                    'batch' => 0,
                ),
                121 => 
                array (
                    'id' => 122,
                    'migration' => '2022_02_02_193617_create_categories_table',
                    'batch' => 0,
                ),
                122 => 
                array (
                    'id' => 123,
                    'migration' => '2022_02_02_193617_create_data_rows_table',
                    'batch' => 0,
                ),
                123 => 
                array (
                    'id' => 124,
                    'migration' => '2022_02_02_193617_create_data_types_table',
                    'batch' => 0,
                ),
                124 => 
                array (
                    'id' => 125,
                    'migration' => '2022_02_02_193617_create_failed_jobs_table',
                    'batch' => 0,
                ),
                125 => 
                array (
                    'id' => 126,
                    'migration' => '2022_02_02_193617_create_materials_table',
                    'batch' => 0,
                ),
                126 => 
                array (
                    'id' => 127,
                    'migration' => '2022_02_02_193617_create_menu_items_table',
                    'batch' => 0,
                ),
                127 => 
                array (
                    'id' => 128,
                    'migration' => '2022_02_02_193617_create_menus_table',
                    'batch' => 0,
                ),
                128 => 
                array (
                    'id' => 129,
                    'migration' => '2022_02_02_193617_create_parterres_table',
                    'batch' => 0,
                ),
                129 => 
                array (
                    'id' => 130,
                    'migration' => '2022_02_02_193617_create_password_resets_table',
                    'batch' => 0,
                ),
                130 => 
                array (
                    'id' => 131,
                    'migration' => '2022_02_02_193617_create_pedestals_table',
                    'batch' => 0,
                ),
                131 => 
                array (
                    'id' => 132,
                    'migration' => '2022_02_02_193617_create_permission_role_table',
                    'batch' => 0,
                ),
                132 => 
                array (
                    'id' => 133,
                    'migration' => '2022_02_02_193617_create_permissions_table',
                    'batch' => 0,
                ),
                133 => 
                array (
                    'id' => 134,
                    'migration' => '2022_02_02_193617_create_personal_access_tokens_table',
                    'batch' => 0,
                ),
                134 => 
                array (
                    'id' => 135,
                    'migration' => '2022_02_02_193617_create_pillars_table',
                    'batch' => 0,
                ),
                135 => 
                array (
                    'id' => 136,
                    'migration' => '2022_02_02_193617_create_products_table',
                    'batch' => 0,
                ),
                136 => 
                array (
                    'id' => 137,
                    'migration' => '2022_02_02_193617_create_roles_table',
                    'batch' => 0,
                ),
                137 => 
                array (
                    'id' => 138,
                    'migration' => '2022_02_02_193617_create_services_table',
                    'batch' => 0,
                ),
                138 => 
                array (
                    'id' => 139,
                    'migration' => '2022_02_02_193617_create_settings_table',
                    'batch' => 0,
                ),
                139 => 
                array (
                    'id' => 140,
                    'migration' => '2022_02_02_193617_create_stellas_table',
                    'batch' => 0,
                ),
                140 => 
                array (
                    'id' => 141,
                    'migration' => '2022_02_02_193617_create_tombstones_table',
                    'batch' => 0,
                ),
                141 => 
                array (
                    'id' => 142,
                    'migration' => '2022_02_02_193617_create_translations_table',
                    'batch' => 0,
                ),
                142 => 
                array (
                    'id' => 143,
                    'migration' => '2022_02_02_193617_create_user_roles_table',
                    'batch' => 0,
                ),
                143 => 
                array (
                    'id' => 144,
                    'migration' => '2022_02_02_193617_create_users_table',
                    'batch' => 0,
                ),
                144 => 
                array (
                    'id' => 145,
                    'migration' => '2022_02_02_193618_add_foreign_keys_to_data_rows_table',
                    'batch' => 0,
                ),
                145 => 
                array (
                    'id' => 146,
                    'migration' => '2022_02_02_193618_add_foreign_keys_to_menu_items_table',
                    'batch' => 0,
                ),
                146 => 
                array (
                    'id' => 147,
                    'migration' => '2022_02_02_193618_add_foreign_keys_to_permission_role_table',
                    'batch' => 0,
                ),
                147 => 
                array (
                    'id' => 148,
                    'migration' => '2022_02_02_193618_add_foreign_keys_to_user_roles_table',
                    'batch' => 0,
                ),
                148 => 
                array (
                    'id' => 149,
                    'migration' => '2022_02_02_193618_add_foreign_keys_to_users_table',
                    'batch' => 0,
                ),
                149 => 
                array (
                    'id' => 150,
                    'migration' => '2022_02_03_162757_create_accessories_table',
                    'batch' => 5,
                ),
                150 => 
                array (
                    'id' => 151,
                    'migration' => '2022_02_03_162757_create_accessory_categories_table',
                    'batch' => 5,
                ),
                151 => 
                array (
                    'id' => 152,
                    'migration' => '2022_02_03_162757_create_categories_table',
                    'batch' => 5,
                ),
                152 => 
                array (
                    'id' => 153,
                    'migration' => '2022_02_03_162757_create_materials_table',
                    'batch' => 5,
                ),
                153 => 
                array (
                    'id' => 154,
                    'migration' => '2022_02_03_162757_create_parterres_table',
                    'batch' => 5,
                ),
                154 => 
                array (
                    'id' => 155,
                    'migration' => '2022_02_03_162757_create_pedestals_table',
                    'batch' => 5,
                ),
                155 => 
                array (
                    'id' => 156,
                    'migration' => '2022_02_03_162757_create_pillars_table',
                    'batch' => 5,
                ),
                156 => 
                array (
                    'id' => 157,
                    'migration' => '2022_02_03_162757_create_products_table',
                    'batch' => 5,
                ),
                157 => 
                array (
                    'id' => 158,
                    'migration' => '2022_02_03_162757_create_services_table',
                    'batch' => 5,
                ),
                158 => 
                array (
                    'id' => 159,
                    'migration' => '2022_02_03_162757_create_stellas_table',
                    'batch' => 5,
                ),
                159 => 
                array (
                    'id' => 160,
                    'migration' => '2022_02_03_162757_create_tombstones_table',
                    'batch' => 5,
                ),
                160 => 
                array (
                    'id' => 161,
                    'migration' => '2022_02_05_154725_create_accessories_table',
                    'batch' => 0,
                ),
                161 => 
                array (
                    'id' => 162,
                    'migration' => '2022_02_05_154725_create_accessory_categories_table',
                    'batch' => 0,
                ),
                162 => 
                array (
                    'id' => 163,
                    'migration' => '2022_02_05_154725_create_categories_table',
                    'batch' => 0,
                ),
                163 => 
                array (
                    'id' => 164,
                    'migration' => '2022_02_05_154725_create_data_rows_table',
                    'batch' => 0,
                ),
                164 => 
                array (
                    'id' => 165,
                    'migration' => '2022_02_05_154725_create_data_types_table',
                    'batch' => 0,
                ),
                165 => 
                array (
                    'id' => 166,
                    'migration' => '2022_02_05_154725_create_failed_jobs_table',
                    'batch' => 0,
                ),
                166 => 
                array (
                    'id' => 167,
                    'migration' => '2022_02_05_154725_create_materials_table',
                    'batch' => 0,
                ),
                167 => 
                array (
                    'id' => 168,
                    'migration' => '2022_02_05_154725_create_menu_items_table',
                    'batch' => 0,
                ),
                168 => 
                array (
                    'id' => 169,
                    'migration' => '2022_02_05_154725_create_menus_table',
                    'batch' => 0,
                ),
                169 => 
                array (
                    'id' => 170,
                    'migration' => '2022_02_05_154725_create_parterres_table',
                    'batch' => 0,
                ),
                170 => 
                array (
                    'id' => 171,
                    'migration' => '2022_02_05_154725_create_password_resets_table',
                    'batch' => 0,
                ),
                171 => 
                array (
                    'id' => 172,
                    'migration' => '2022_02_05_154725_create_pedestals_table',
                    'batch' => 0,
                ),
                172 => 
                array (
                    'id' => 173,
                    'migration' => '2022_02_05_154725_create_permission_role_table',
                    'batch' => 0,
                ),
                173 => 
                array (
                    'id' => 174,
                    'migration' => '2022_02_05_154725_create_permissions_table',
                    'batch' => 0,
                ),
                174 => 
                array (
                    'id' => 175,
                    'migration' => '2022_02_05_154725_create_personal_access_tokens_table',
                    'batch' => 0,
                ),
                175 => 
                array (
                    'id' => 176,
                    'migration' => '2022_02_05_154725_create_pillars_table',
                    'batch' => 0,
                ),
                176 => 
                array (
                    'id' => 177,
                    'migration' => '2022_02_05_154725_create_products_table',
                    'batch' => 0,
                ),
                177 => 
                array (
                    'id' => 178,
                    'migration' => '2022_02_05_154725_create_roles_table',
                    'batch' => 0,
                ),
                178 => 
                array (
                    'id' => 179,
                    'migration' => '2022_02_05_154725_create_services_table',
                    'batch' => 0,
                ),
                179 => 
                array (
                    'id' => 180,
                    'migration' => '2022_02_05_154725_create_settings_table',
                    'batch' => 0,
                ),
                180 => 
                array (
                    'id' => 181,
                    'migration' => '2022_02_05_154725_create_stellas_table',
                    'batch' => 0,
                ),
                181 => 
                array (
                    'id' => 182,
                    'migration' => '2022_02_05_154725_create_tombstones_table',
                    'batch' => 0,
                ),
                182 => 
                array (
                    'id' => 183,
                    'migration' => '2022_02_05_154725_create_translations_table',
                    'batch' => 0,
                ),
                183 => 
                array (
                    'id' => 184,
                    'migration' => '2022_02_05_154725_create_user_roles_table',
                    'batch' => 0,
                ),
                184 => 
                array (
                    'id' => 185,
                    'migration' => '2022_02_05_154725_create_users_table',
                    'batch' => 0,
                ),
                185 => 
                array (
                    'id' => 186,
                    'migration' => '2022_02_05_154726_add_foreign_keys_to_data_rows_table',
                    'batch' => 0,
                ),
                186 => 
                array (
                    'id' => 187,
                    'migration' => '2022_02_05_154726_add_foreign_keys_to_menu_items_table',
                    'batch' => 0,
                ),
                187 => 
                array (
                    'id' => 188,
                    'migration' => '2022_02_05_154726_add_foreign_keys_to_permission_role_table',
                    'batch' => 0,
                ),
                188 => 
                array (
                    'id' => 189,
                    'migration' => '2022_02_05_154726_add_foreign_keys_to_user_roles_table',
                    'batch' => 0,
                ),
                189 => 
                array (
                    'id' => 190,
                    'migration' => '2022_02_05_154726_add_foreign_keys_to_users_table',
                    'batch' => 0,
                ),
            ));
       } catch(Exception $e) {
         throw new Exception('Exception occur ' . $e);

         \DB::rollBack();
       }

       \DB::commit();
    }
}
