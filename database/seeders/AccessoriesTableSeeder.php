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
                    'image' => 'accessories/January2022/tELnztAdh4ZHujSQxK8d.jpg',
                    'images' => NULL,
                    'price' => '0.00',
                    'accessory_category_id' => 3,
                    'created_at' => '2022-01-17 14:28:00',
                    'updated_at' => '2022-01-25 21:09:18',
                ),
                1 => 
                array (
                    'id' => 4,
                    'name' => 'ХО-2',
                    'description' => NULL,
                    'image' => 'accessories/January2022/iS5UEFQRZMGFv44vLfbZ.jpg',
                    'images' => NULL,
                    'price' => '0.00',
                    'accessory_category_id' => 3,
                    'created_at' => '2022-01-17 18:28:28',
                    'updated_at' => '2022-01-25 21:20:57',
                ),
                2 => 
                array (
                    'id' => 5,
                    'name' => 'ХО-3',
                    'description' => NULL,
                    'image' => 'accessories/January2022/hU98BwF05VzyLmY1Pxkt.jpg',
                    'images' => NULL,
                    'price' => '0.00',
                    'accessory_category_id' => 3,
                    'created_at' => '2022-01-17 19:59:02',
                    'updated_at' => '2022-01-25 21:08:41',
                ),
                3 => 
                array (
                    'id' => 8,
                    'name' => 'ОГ-1',
                    'description' => NULL,
                    'image' => 'accessories/January2022/kHG5PCs9YXJsa7qFBurg.jpg',
                    'images' => NULL,
                    'price' => '0.00',
                    'accessory_category_id' => 6,
                    'created_at' => '2022-01-25 21:10:03',
                    'updated_at' => '2022-01-25 21:10:03',
                ),
                4 => 
                array (
                    'id' => 9,
                    'name' => 'ОГ-2',
                    'description' => NULL,
                    'image' => 'accessories/January2022/LRESMhr1HrazPxCq92KC.jpg',
                    'images' => NULL,
                    'price' => '0.00',
                    'accessory_category_id' => NULL,
                    'created_at' => '2022-01-25 21:19:20',
                    'updated_at' => '2022-01-25 21:19:20',
                ),
            ));
       } catch(Exception $e) {
         throw new Exception('Exception occur ' . $e);

         \DB::rollBack();
       }

       \DB::commit();
    }
}
