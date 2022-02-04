<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StellasTableSeeder extends Seeder
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

        \DB::table('stellas')->delete();

        \DB::table('stellas')->insert(array (
                0 => 
                array (
                    'id' => 5,
                    'material_id' => 1,
                    'height' => 100,
                    'width' => 50,
                    'depth' => 5,
                    'price' => '428.00',
                    'created_at' => '2021-09-26 16:13:33',
                    'updated_at' => '2021-09-26 17:47:07',
                ),
                1 => 
                array (
                    'id' => 7,
                    'material_id' => 2,
                    'height' => 120,
                    'width' => 50,
                    'depth' => 7,
                    'price' => '806.40',
                    'created_at' => '2021-09-27 19:11:43',
                    'updated_at' => '2021-11-01 14:31:32',
                ),
                2 => 
                array (
                    'id' => 9,
                    'material_id' => 1,
                    'height' => 100,
                    'width' => 60,
                    'depth' => 5,
                    'price' => '513.00',
                    'created_at' => '2021-09-27 20:03:36',
                    'updated_at' => '2021-11-01 14:32:02',
                ),
                3 => 
                array (
                    'id' => 10,
                    'material_id' => 2,
                    'height' => 120,
                    'width' => 60,
                    'depth' => 7,
                    'price' => '967.68',
                    'created_at' => '2021-09-27 20:17:29',
                    'updated_at' => '2021-11-01 14:30:55',
                ),
                4 => 
                array (
                    'id' => 11,
                    'material_id' => 1,
                    'height' => 120,
                    'width' => 60,
                    'depth' => 7,
                    'price' => '861.84',
                    'created_at' => '2021-10-05 08:06:41',
                    'updated_at' => '2021-11-01 14:30:32',
                ),
                5 => 
                array (
                    'id' => 12,
                    'material_id' => 1,
                    'height' => 80,
                    'width' => 40,
                    'depth' => 5,
                    'price' => '273.60',
                    'created_at' => '2021-11-08 09:46:34',
                    'updated_at' => '2021-11-08 09:46:34',
                ),
                6 => 
                array (
                    'id' => 13,
                    'material_id' => 1,
                    'height' => 80,
                    'width' => 40,
                    'depth' => 7,
                    'price' => '383.04',
                    'created_at' => '2021-11-08 09:48:19',
                    'updated_at' => '2021-11-08 09:48:19',
                ),
                7 => 
                array (
                    'id' => 14,
                    'material_id' => 1,
                    'height' => 100,
                    'width' => 50,
                    'depth' => 7,
                    'price' => '598.50',
                    'created_at' => '2021-11-08 09:50:33',
                    'updated_at' => '2021-11-08 09:50:33',
                ),
                8 => 
                array (
                    'id' => 15,
                    'material_id' => 2,
                    'height' => 80,
                    'width' => 40,
                    'depth' => 5,
                    'price' => '307.20',
                    'created_at' => '2021-11-08 10:05:37',
                    'updated_at' => '2021-11-08 10:05:37',
                ),
                9 => 
                array (
                    'id' => 16,
                    'material_id' => 3,
                    'height' => 80,
                    'width' => 40,
                    'depth' => 5,
                    'price' => '310.40',
                    'created_at' => '2021-11-08 10:10:29',
                    'updated_at' => '2021-11-08 10:10:29',
                ),
                10 => 
                array (
                    'id' => 17,
                    'material_id' => 4,
                    'height' => 80,
                    'width' => 40,
                    'depth' => 5,
                    'price' => '326.40',
                    'created_at' => '2021-11-08 10:14:14',
                    'updated_at' => '2021-11-08 10:14:14',
                ),
                11 => 
                array (
                    'id' => 18,
                    'material_id' => 5,
                    'height' => 80,
                    'width' => 40,
                    'depth' => 5,
                    'price' => '608.00',
                    'created_at' => '2021-11-08 10:14:59',
                    'updated_at' => '2021-11-08 10:14:59',
                ),
                12 => 
                array (
                    'id' => 19,
                    'material_id' => 6,
                    'height' => 80,
                    'width' => 40,
                    'depth' => 5,
                    'price' => '608.00',
                    'created_at' => '2021-11-08 10:15:34',
                    'updated_at' => '2021-11-08 10:15:34',
                ),
                13 => 
                array (
                    'id' => 20,
                    'material_id' => 2,
                    'height' => 80,
                    'width' => 40,
                    'depth' => 7,
                    'price' => '456.96',
                    'created_at' => '2021-11-08 10:16:03',
                    'updated_at' => '2021-11-08 10:16:03',
                ),
                14 => 
                array (
                    'id' => 21,
                    'material_id' => 3,
                    'height' => 80,
                    'width' => 40,
                    'depth' => 7,
                    'price' => '456.96',
                    'created_at' => '2021-11-08 10:16:31',
                    'updated_at' => '2021-11-08 10:16:31',
                ),
                15 => 
                array (
                    'id' => 22,
                    'material_id' => 4,
                    'height' => 80,
                    'width' => 40,
                    'depth' => 7,
                    'price' => '456.96',
                    'created_at' => '2021-11-08 10:16:54',
                    'updated_at' => '2021-11-08 10:16:54',
                ),
                16 => 
                array (
                    'id' => 23,
                    'material_id' => 5,
                    'height' => 80,
                    'width' => 40,
                    'depth' => 7,
                    'price' => '851.20',
                    'created_at' => '2021-11-08 10:18:15',
                    'updated_at' => '2021-11-08 10:18:15',
                ),
                17 => 
                array (
                    'id' => 24,
                    'material_id' => 6,
                    'height' => 80,
                    'width' => 40,
                    'depth' => 7,
                    'price' => '851.20',
                    'created_at' => '2021-11-08 10:18:37',
                    'updated_at' => '2021-11-08 10:18:37',
                ),
                18 => 
                array (
                    'id' => 25,
                    'material_id' => 3,
                    'height' => 100,
                    'width' => 50,
                    'depth' => 5,
                    'price' => '510.00',
                    'created_at' => '2021-11-08 10:19:29',
                    'updated_at' => '2021-11-08 10:19:29',
                ),
                19 => 
                array (
                    'id' => 26,
                    'material_id' => 4,
                    'height' => 100,
                    'width' => 50,
                    'depth' => 5,
                    'price' => '510.00',
                    'created_at' => '2021-11-08 10:20:00',
                    'updated_at' => '2021-11-08 10:20:00',
                ),
                20 => 
                array (
                    'id' => 27,
                    'material_id' => 5,
                    'height' => 100,
                    'width' => 50,
                    'depth' => 5,
                    'price' => '950.00',
                    'created_at' => '2021-11-08 10:20:45',
                    'updated_at' => '2021-11-08 10:20:45',
                ),
                21 => 
                array (
                    'id' => 28,
                    'material_id' => 6,
                    'height' => 100,
                    'width' => 50,
                    'depth' => 5,
                    'price' => '950.00',
                    'created_at' => '2021-11-08 10:21:52',
                    'updated_at' => '2021-11-08 10:21:52',
                ),
                22 => 
                array (
                    'id' => 29,
                    'material_id' => 3,
                    'height' => 100,
                    'width' => 50,
                    'depth' => 7,
                    'price' => '714.00',
                    'created_at' => '2021-11-08 10:24:25',
                    'updated_at' => '2021-11-08 10:24:25',
                ),
                23 => 
                array (
                    'id' => 30,
                    'material_id' => 4,
                    'height' => 100,
                    'width' => 50,
                    'depth' => 7,
                    'price' => '714.00',
                    'created_at' => '2021-11-08 10:24:44',
                    'updated_at' => '2021-11-08 10:24:44',
                ),
                24 => 
                array (
                    'id' => 31,
                    'material_id' => 5,
                    'height' => 100,
                    'width' => 500,
                    'depth' => 7,
                    'price' => '13300.00',
                    'created_at' => '2021-11-08 10:25:20',
                    'updated_at' => '2021-11-08 10:25:20',
                ),
                25 => 
                array (
                    'id' => 32,
                    'material_id' => 6,
                    'height' => 100,
                    'width' => 50,
                    'depth' => 7,
                    'price' => '1330.00',
                    'created_at' => '2021-11-08 10:25:45',
                    'updated_at' => '2021-11-08 10:25:45',
                ),
                26 => 
                array (
                    'id' => 33,
                    'material_id' => 3,
                    'height' => 100,
                    'width' => 60,
                    'depth' => 5,
                    'price' => '612.00',
                    'created_at' => '2021-11-08 10:26:21',
                    'updated_at' => '2021-11-08 10:26:21',
                ),
                27 => 
                array (
                    'id' => 34,
                    'material_id' => 4,
                    'height' => 100,
                    'width' => 60,
                    'depth' => 5,
                    'price' => '612.00',
                    'created_at' => '2021-11-08 10:26:52',
                    'updated_at' => '2021-11-08 10:26:52',
                ),
                28 => 
                array (
                    'id' => 35,
                    'material_id' => 5,
                    'height' => 100,
                    'width' => 60,
                    'depth' => 5,
                    'price' => '1140.00',
                    'created_at' => '2021-11-08 10:27:12',
                    'updated_at' => '2021-11-08 10:27:12',
                ),
                29 => 
                array (
                    'id' => 36,
                    'material_id' => 6,
                    'height' => 100,
                    'width' => 60,
                    'depth' => 5,
                    'price' => '1140.00',
                    'created_at' => '2021-11-08 10:27:34',
                    'updated_at' => '2021-11-08 10:27:34',
                ),
                30 => 
                array (
                    'id' => 37,
                    'material_id' => 2,
                    'height' => 100,
                    'width' => 60,
                    'depth' => 7,
                    'price' => '856.80',
                    'created_at' => '2021-11-08 10:29:29',
                    'updated_at' => '2021-11-08 10:29:29',
                ),
                31 => 
                array (
                    'id' => 38,
                    'material_id' => 3,
                    'height' => 100,
                    'width' => 60,
                    'depth' => 7,
                    'price' => '856.80',
                    'created_at' => '2021-11-08 10:29:47',
                    'updated_at' => '2021-11-08 10:29:47',
                ),
                32 => 
                array (
                    'id' => 39,
                    'material_id' => 4,
                    'height' => 100,
                    'width' => 60,
                    'depth' => 7,
                    'price' => '856.80',
                    'created_at' => '2021-11-08 10:30:14',
                    'updated_at' => '2021-11-08 10:30:14',
                ),
                33 => 
                array (
                    'id' => 40,
                    'material_id' => 5,
                    'height' => 100,
                    'width' => 60,
                    'depth' => 7,
                    'price' => '1596.00',
                    'created_at' => '2021-11-08 10:30:31',
                    'updated_at' => '2021-11-08 10:30:31',
                ),
                34 => 
                array (
                    'id' => 41,
                    'material_id' => 6,
                    'height' => 100,
                    'width' => 60,
                    'depth' => 7,
                    'price' => '1596.00',
                    'created_at' => '2021-11-08 10:30:51',
                    'updated_at' => '2021-11-08 10:30:51',
                ),
                35 => 
                array (
                    'id' => 42,
                    'material_id' => 3,
                    'height' => 120,
                    'width' => 60,
                    'depth' => 5,
                    'price' => '734.40',
                    'created_at' => '2021-11-08 10:32:39',
                    'updated_at' => '2021-11-08 10:32:39',
                ),
                36 => 
                array (
                    'id' => 43,
                    'material_id' => 4,
                    'height' => 120,
                    'width' => 60,
                    'depth' => 5,
                    'price' => '734.40',
                    'created_at' => '2021-11-08 10:33:05',
                    'updated_at' => '2021-11-08 10:33:05',
                ),
                37 => 
                array (
                    'id' => 44,
                    'material_id' => 5,
                    'height' => 120,
                    'width' => 60,
                    'depth' => 5,
                    'price' => '1368.00',
                    'created_at' => '2021-11-08 10:55:49',
                    'updated_at' => '2021-11-08 10:55:49',
                ),
                38 => 
                array (
                    'id' => 45,
                    'material_id' => 6,
                    'height' => 120,
                    'width' => 60,
                    'depth' => 5,
                    'price' => '1368.00',
                    'created_at' => '2021-11-08 10:56:21',
                    'updated_at' => '2021-11-08 10:56:21',
                ),
                39 => 
                array (
                    'id' => 47,
                    'material_id' => 3,
                    'height' => 120,
                    'width' => 60,
                    'depth' => 7,
                    'price' => '1028.16',
                    'created_at' => '2021-11-08 10:57:23',
                    'updated_at' => '2021-11-08 10:57:23',
                ),
                40 => 
                array (
                    'id' => 48,
                    'material_id' => 4,
                    'height' => 120,
                    'width' => 60,
                    'depth' => 7,
                    'price' => '1028.16',
                    'created_at' => '2021-11-08 10:57:48',
                    'updated_at' => '2021-11-08 10:57:48',
                ),
                41 => 
                array (
                    'id' => 49,
                    'material_id' => 5,
                    'height' => 120,
                    'width' => 60,
                    'depth' => 7,
                    'price' => '1915.20',
                    'created_at' => '2021-11-08 10:58:22',
                    'updated_at' => '2021-11-08 10:58:22',
                ),
                42 => 
                array (
                    'id' => 50,
                    'material_id' => 6,
                    'height' => 120,
                    'width' => 60,
                    'depth' => 7,
                    'price' => '1915.20',
                    'created_at' => '2021-11-08 10:58:44',
                    'updated_at' => '2021-11-08 10:58:44',
                ),
                43 => 
                array (
                    'id' => 51,
                    'material_id' => 1,
                    'height' => 80,
                    'width' => 60,
                    'depth' => 5,
                    'price' => '410.40',
                    'created_at' => '2021-11-19 15:50:58',
                    'updated_at' => '2021-11-19 15:53:21',
                ),
            ));
       } catch(Exception $e) {
         throw new Exception('Exception occur ' . $e);

         \DB::rollBack();
       }

       \DB::commit();
    }
}
