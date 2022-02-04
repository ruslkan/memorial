<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
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

        \DB::table('products')->delete();

        \DB::table('products')->insert(array (
                0 => 
                array (
                    'id' => 3,
                    'category_id' => 4,
                    'name' => 'Э-1',
                    'image' => NULL,
                    'stella_id' => 5,
                    'parterre_id' => 5,
                    'tombstone_id' => NULL,
                    'pedestal_id' => 3,
                    'price' => '1040.00',
                    'pillar_id' => NULL,
                    'created_at' => NULL,
                    'updated_at' => '2022-02-03 17:38:17',
                    'images' => NULL,
                ),
                1 => 
                array (
                    'id' => 4,
                    'category_id' => 3,
                    'name' => 'ДВ-1',
                    'image' => NULL,
                    'stella_id' => 9,
                    'parterre_id' => 33,
                    'tombstone_id' => NULL,
                    'pedestal_id' => 35,
                    'price' => '1210.00',
                    'pillar_id' => NULL,
                    'created_at' => NULL,
                    'updated_at' => '2022-02-03 17:41:43',
                    'images' => NULL,
                ),
                2 => 
                array (
                    'id' => 10,
                    'category_id' => 4,
                    'name' => 'Э-2',
                    'image' => NULL,
                    'stella_id' => 7,
                    'parterre_id' => 6,
                    'tombstone_id' => 4,
                    'pedestal_id' => 4,
                    'price' => '2312.50',
                    'pillar_id' => NULL,
                    'created_at' => '2021-11-02 07:35:42',
                    'updated_at' => '2022-02-03 17:38:52',
                    'images' => NULL,
                ),
                3 => 
                array (
                    'id' => 16,
                    'category_id' => 3,
                    'name' => 'ДВ-2',
                    'image' => NULL,
                    'stella_id' => 9,
                    'parterre_id' => 34,
                    'tombstone_id' => NULL,
                    'pedestal_id' => 35,
                    'price' => '1210.00',
                    'pillar_id' => NULL,
                    'created_at' => '2021-11-19 15:11:50',
                    'updated_at' => '2022-02-03 17:42:03',
                    'images' => NULL,
                ),
                4 => 
                array (
                    'id' => 17,
                    'category_id' => 3,
                    'name' => 'ДВ-3',
                    'image' => NULL,
                    'stella_id' => 9,
                    'parterre_id' => 33,
                    'tombstone_id' => NULL,
                    'pedestal_id' => 35,
                    'price' => '1910.00',
                    'pillar_id' => 1,
                    'created_at' => '2021-11-19 15:12:42',
                    'updated_at' => '2022-02-03 17:42:26',
                    'images' => NULL,
                ),
                5 => 
                array (
                    'id' => 42,
                    'category_id' => 2,
                    'name' => 'О-3',
                    'image' => NULL,
                    'stella_id' => 5,
                    'parterre_id' => 33,
                    'tombstone_id' => NULL,
                    'pedestal_id' => 20,
                    'price' => '1050.00',
                    'pillar_id' => NULL,
                    'created_at' => '2021-11-19 16:09:48',
                    'updated_at' => '2022-02-03 17:39:09',
                    'images' => NULL,
                ),
                6 => 
                array (
                    'id' => 43,
                    'category_id' => 2,
                    'name' => 'О-4',
                    'image' => NULL,
                    'stella_id' => 5,
                    'parterre_id' => 33,
                    'tombstone_id' => NULL,
                    'pedestal_id' => 20,
                    'price' => '1750.00',
                    'pillar_id' => 1,
                    'created_at' => '2021-11-19 16:10:31',
                    'updated_at' => '2022-02-03 17:39:34',
                    'images' => NULL,
                ),
                7 => 
                array (
                    'id' => 76,
                    'category_id' => 9,
                    'name' => 'КО-1',
                    'image' => NULL,
                    'stella_id' => 10,
                    'parterre_id' => 33,
                    'tombstone_id' => NULL,
                    'pedestal_id' => 7,
                    'price' => '2510.00',
                    'pillar_id' => 1,
                    'created_at' => '2021-12-06 16:08:05',
                    'updated_at' => '2022-02-03 17:40:10',
                    'images' => NULL,
                ),
                8 => 
                array (
                    'id' => 77,
                    'category_id' => 9,
                    'name' => 'КО-2',
                    'image' => NULL,
                    'stella_id' => 22,
                    'parterre_id' => NULL,
                    'tombstone_id' => NULL,
                    'pedestal_id' => 7,
                    'price' => '860.00',
                    'pillar_id' => NULL,
                    'created_at' => '2021-12-06 16:09:07',
                    'updated_at' => '2022-02-03 17:40:47',
                    'images' => NULL,
                ),
                9 => 
                array (
                    'id' => 78,
                    'category_id' => 9,
                    'name' => 'КО-3',
                    'image' => NULL,
                    'stella_id' => 5,
                    'parterre_id' => 5,
                    'tombstone_id' => 3,
                    'pedestal_id' => 3,
                    'price' => '2100.00',
                    'pillar_id' => 1,
                    'created_at' => '2021-12-06 16:09:53',
                    'updated_at' => '2022-02-03 17:41:16',
                    'images' => NULL,
                ),
                10 => 
                array (
                    'id' => 96,
                    'category_id' => 8,
                    'name' => 'К-1',
                    'image' => NULL,
                    'stella_id' => 5,
                    'parterre_id' => NULL,
                    'tombstone_id' => NULL,
                    'pedestal_id' => NULL,
                    'price' => '500.00',
                    'pillar_id' => NULL,
                    'created_at' => '2021-12-07 05:58:52',
                    'updated_at' => '2022-02-03 17:46:24',
                    'images' => NULL,
                ),
                11 => 
                array (
                    'id' => 97,
                    'category_id' => 8,
                    'name' => 'К-2',
                    'image' => NULL,
                    'stella_id' => 5,
                    'parterre_id' => 5,
                    'tombstone_id' => 3,
                    'pedestal_id' => 3,
                    'price' => '1400.00',
                    'pillar_id' => NULL,
                    'created_at' => '2021-12-07 05:59:16',
                    'updated_at' => '2022-02-03 17:46:49',
                    'images' => NULL,
                ),
                12 => 
                array (
                    'id' => 105,
                    'category_id' => 8,
                    'name' => 'К-10',
                    'image' => NULL,
                    'stella_id' => 5,
                    'parterre_id' => NULL,
                    'tombstone_id' => NULL,
                    'pedestal_id' => NULL,
                    'price' => '500.00',
                    'pillar_id' => NULL,
                    'created_at' => '2021-12-07 06:10:05',
                    'updated_at' => '2022-02-03 17:45:25',
                    'images' => NULL,
                ),
            ));
       } catch(Exception $e) {
         throw new Exception('Exception occur ' . $e);

         \DB::rollBack();
       }

       \DB::commit();
    }
}
