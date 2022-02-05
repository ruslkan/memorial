<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
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

        \DB::table('data_types')->delete();

        \DB::table('data_types')->insert(array (
                0 => 
                array (
                    'id' => 1,
                    'name' => 'users',
                    'slug' => 'users',
                    'display_name_singular' => 'Пользователь',
                    'display_name_plural' => 'Пользователи',
                    'icon' => 'voyager-person',
                    'model_name' => 'TCG\\Voyager\\Models\\User',
                    'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                    'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                    'description' => '',
                    'generate_permissions' => 1,
                    'server_side' => 0,
                    'details' => NULL,
                    'created_at' => '2021-08-19 05:43:30',
                    'updated_at' => '2021-08-19 05:43:30',
                ),
                1 => 
                array (
                    'id' => 2,
                    'name' => 'menus',
                    'slug' => 'menus',
                    'display_name_singular' => 'Меню',
                    'display_name_plural' => 'Меню',
                    'icon' => 'voyager-list',
                    'model_name' => 'TCG\\Voyager\\Models\\Menu',
                    'policy_name' => NULL,
                    'controller' => '',
                    'description' => '',
                    'generate_permissions' => 1,
                    'server_side' => 0,
                    'details' => NULL,
                    'created_at' => '2021-08-19 05:43:30',
                    'updated_at' => '2021-08-19 05:43:30',
                ),
                2 => 
                array (
                    'id' => 3,
                    'name' => 'roles',
                    'slug' => 'roles',
                    'display_name_singular' => 'Роль',
                    'display_name_plural' => 'Роли',
                    'icon' => 'voyager-lock',
                    'model_name' => 'TCG\\Voyager\\Models\\Role',
                    'policy_name' => NULL,
                    'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController',
                    'description' => '',
                    'generate_permissions' => 1,
                    'server_side' => 0,
                    'details' => NULL,
                    'created_at' => '2021-08-19 05:43:30',
                    'updated_at' => '2021-08-19 05:43:30',
                ),
                3 => 
                array (
                    'id' => 5,
                    'name' => 'categories',
                    'slug' => 'categories',
                    'display_name_singular' => 'Категория',
                    'display_name_plural' => 'Категории',
                    'icon' => NULL,
                    'model_name' => 'App\\Models\\Category',
                    'policy_name' => NULL,
                    'controller' => NULL,
                    'description' => NULL,
                    'generate_permissions' => 1,
                    'server_side' => 0,
                    'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                    'created_at' => '2021-08-19 11:10:46',
                    'updated_at' => '2022-01-25 21:22:23',
                ),
                4 => 
                array (
                    'id' => 6,
                    'name' => 'products',
                    'slug' => 'products',
                    'display_name_singular' => 'Памятник',
                    'display_name_plural' => 'Памятники',
                    'icon' => NULL,
                    'model_name' => 'App\\Models\\Product',
                    'policy_name' => NULL,
                    'controller' => NULL,
                    'description' => NULL,
                    'generate_permissions' => 1,
                    'server_side' => 0,
                    'details' => '{"order_column":"category_id","order_display_column":"category_id","order_direction":"desc","default_search_key":null,"scope":null}',
                    'created_at' => '2021-08-19 11:13:36',
                    'updated_at' => '2022-01-25 21:23:40',
                ),
                5 => 
                array (
                    'id' => 7,
                    'name' => 'materials',
                    'slug' => 'materials',
                    'display_name_singular' => 'Материал',
                    'display_name_plural' => 'Материалы',
                    'icon' => NULL,
                    'model_name' => 'App\\Models\\Material',
                    'policy_name' => NULL,
                    'controller' => NULL,
                    'description' => NULL,
                    'generate_permissions' => 1,
                    'server_side' => 0,
                    'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                    'created_at' => '2021-08-19 12:47:31',
                    'updated_at' => '2022-01-25 21:22:43',
                ),
                6 => 
                array (
                    'id' => 8,
                    'name' => 'parterres',
                    'slug' => 'parterres',
                    'display_name_singular' => 'Цветник',
                    'display_name_plural' => 'Цветники',
                    'icon' => NULL,
                    'model_name' => 'App\\Models\\Parterre',
                    'policy_name' => NULL,
                    'controller' => NULL,
                    'description' => NULL,
                    'generate_permissions' => 1,
                    'server_side' => 0,
                    'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                    'created_at' => '2021-09-04 20:02:23',
                    'updated_at' => '2022-01-25 21:22:59',
                ),
                7 => 
                array (
                    'id' => 9,
                    'name' => 'stellas',
                    'slug' => 'stellas',
                    'display_name_singular' => 'Стелла',
                    'display_name_plural' => 'Стеллы',
                    'icon' => NULL,
                    'model_name' => 'App\\Models\\Stella',
                    'policy_name' => NULL,
                    'controller' => NULL,
                    'description' => NULL,
                    'generate_permissions' => 1,
                    'server_side' => 0,
                    'details' => '{"order_column":"material_id","order_display_column":"material_id","order_direction":"asc","default_search_key":null,"scope":null}',
                    'created_at' => '2021-09-05 18:35:54',
                    'updated_at' => '2022-01-25 21:23:59',
                ),
                8 => 
                array (
                    'id' => 10,
                    'name' => 'services',
                    'slug' => 'services',
                    'display_name_singular' => 'Услуга',
                    'display_name_plural' => 'Услуги',
                    'icon' => NULL,
                    'model_name' => 'App\\Models\\Service',
                    'policy_name' => NULL,
                    'controller' => NULL,
                    'description' => NULL,
                    'generate_permissions' => 1,
                    'server_side' => 0,
                    'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                    'created_at' => '2021-09-06 19:05:16',
                    'updated_at' => '2022-01-25 21:23:50',
                ),
                9 => 
                array (
                    'id' => 12,
                    'name' => 'pedestals',
                    'slug' => 'pedestals',
                    'display_name_singular' => 'Тумба',
                    'display_name_plural' => 'Тумбы',
                    'icon' => NULL,
                    'model_name' => 'App\\Models\\Pedestal',
                    'policy_name' => NULL,
                    'controller' => NULL,
                    'description' => NULL,
                    'generate_permissions' => 1,
                    'server_side' => 0,
                    'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                    'created_at' => '2021-09-24 06:06:34',
                    'updated_at' => '2022-01-25 21:23:09',
                ),
                10 => 
                array (
                    'id' => 13,
                    'name' => 'tombstones',
                    'slug' => 'tombstones',
                    'display_name_singular' => 'Надгробная плита',
                    'display_name_plural' => 'Надгробные плиты',
                    'icon' => NULL,
                    'model_name' => 'App\\Models\\Tombstone',
                    'policy_name' => NULL,
                    'controller' => NULL,
                    'description' => NULL,
                    'generate_permissions' => 1,
                    'server_side' => 0,
                    'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                    'created_at' => '2021-09-24 07:26:53',
                    'updated_at' => '2022-01-25 21:24:09',
                ),
                11 => 
                array (
                    'id' => 17,
                    'name' => 'pillars',
                    'slug' => 'pillars',
                    'display_name_singular' => 'Столбик',
                    'display_name_plural' => 'Столбики',
                    'icon' => NULL,
                    'model_name' => 'App\\Models\\Pillar',
                    'policy_name' => NULL,
                    'controller' => NULL,
                    'description' => NULL,
                    'generate_permissions' => 1,
                    'server_side' => 0,
                    'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                    'created_at' => '2021-10-25 14:40:19',
                    'updated_at' => '2022-01-25 21:23:18',
                ),
                12 => 
                array (
                    'id' => 18,
                    'name' => 'catalog_accessories',
                    'slug' => 'catalog-accessories',
                    'display_name_singular' => 'Каталог',
                    'display_name_plural' => 'Каталог аксессуаров',
                    'icon' => NULL,
                    'model_name' => 'App\\Models\\CatalogAccessory',
                    'policy_name' => NULL,
                    'controller' => NULL,
                    'description' => NULL,
                    'generate_permissions' => 1,
                    'server_side' => 0,
                    'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                    'created_at' => '2022-01-16 16:28:06',
                    'updated_at' => '2022-01-16 16:35:44',
                ),
                13 => 
                array (
                    'id' => 22,
                    'name' => 'accessories',
                    'slug' => 'accessories',
                    'display_name_singular' => 'Аксессуар',
                    'display_name_plural' => 'Аксессуары',
                    'icon' => NULL,
                    'model_name' => 'App\\Models\\Accessory',
                    'policy_name' => NULL,
                    'controller' => NULL,
                    'description' => NULL,
                    'generate_permissions' => 1,
                    'server_side' => 0,
                    'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                    'created_at' => '2022-01-17 20:46:49',
                    'updated_at' => '2022-01-25 21:22:12',
                ),
                14 => 
                array (
                    'id' => 23,
                    'name' => 'accessory_categories',
                    'slug' => 'accessory-categories',
                    'display_name_singular' => 'Категория',
                    'display_name_plural' => 'Категории',
                    'icon' => NULL,
                    'model_name' => 'App\\Models\\AccessoryCategory',
                    'policy_name' => NULL,
                    'controller' => NULL,
                    'description' => NULL,
                    'generate_permissions' => 1,
                    'server_side' => 0,
                    'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                    'created_at' => '2022-01-17 20:49:09',
                    'updated_at' => '2022-01-25 21:21:31',
                ),
            ));
       } catch(Exception $e) {
         throw new Exception('Exception occur ' . $e);

         \DB::rollBack();
       }

       \DB::commit();
    }
}
