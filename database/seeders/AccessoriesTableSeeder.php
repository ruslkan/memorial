<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AccessoriesTableSeeder extends Seeder
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

        \DB::table('accessories')->delete();

        \DB::table('accessories')->insert(array (
                0 => 
                array (
                    'id' => 3,
                    'name' => 'ХО-1',
                    'description' => NULL,
                    'image' => NULL,
                    'images' => NULL,
                    'price' => '0.00',
                    'accessory_category_id' => 3,
                    'created_at' => '2022-01-17 14:28:00',
                    'updated_at' => '2022-02-03 17:47:30',
                ),
                1 => 
                array (
                    'id' => 4,
                    'name' => 'ХО-2',
                    'description' => NULL,
                    'image' => NULL,
                    'images' => NULL,
                    'price' => '0.00',
                    'accessory_category_id' => 3,
                    'created_at' => '2022-01-17 18:28:28',
                    'updated_at' => '2022-02-03 17:47:23',
                ),
                2 => 
                array (
                    'id' => 5,
                    'name' => 'ХО-3',
                    'description' => NULL,
                    'image' => NULL,
                    'images' => NULL,
                    'price' => '0.00',
                    'accessory_category_id' => 3,
                    'created_at' => '2022-01-17 19:59:02',
                    'updated_at' => '2022-02-03 17:44:03',
                ),
                3 => 
                array (
                    'id' => 8,
                    'name' => 'ОГ-1',
                    'description' => NULL,
                    'image' => NULL,
                    'images' => NULL,
                    'price' => '0.00',
                    'accessory_category_id' => 6,
                    'created_at' => '2022-01-25 21:10:03',
                    'updated_at' => '2022-02-03 17:43:54',
                ),
                4 => 
                array (
                    'id' => 9,
                    'name' => 'ОГ-2',
                    'description' => NULL,
                    'image' => NULL,
                    'images' => NULL,
                    'price' => '0.00',
                    'accessory_category_id' => 6,
                    'created_at' => '2022-01-25 21:19:20',
                    'updated_at' => '2022-02-03 17:44:16',
                ),
            ));
       } catch(Exception $e) {
         throw new Exception('Exception occur ' . $e);

         \DB::rollBack();
       }

       \DB::commit();
    }
}
