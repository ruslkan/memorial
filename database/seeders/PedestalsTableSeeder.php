<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PedestalsTableSeeder extends Seeder
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

        \DB::table('pedestals')->delete();

        \DB::table('pedestals')->insert(array (
                0 => 
                array (
                    'id' => 3,
                    'material_id' => 1,
                    'height' => 20,
                    'width' => 40,
                    'depth' => 15,
                    'price' => '205.20',
                    'created_at' => '2021-09-26 17:37:34',
                    'updated_at' => '2021-11-08 10:59:31',
                ),
                1 => 
                array (
                    'id' => 4,
                    'material_id' => 2,
                    'height' => 20,
                    'width' => 50,
                    'depth' => 15,
                    'price' => '306.00',
                    'created_at' => '2021-09-26 17:38:04',
                    'updated_at' => '2021-11-08 10:59:59',
                ),
                2 => 
                array (
                    'id' => 5,
                    'material_id' => 2,
                    'height' => 140,
                    'width' => 60,
                    'depth' => 30,
                    'price' => '4838.40',
                    'created_at' => '2021-10-07 20:03:53',
                    'updated_at' => '2021-10-07 20:03:53',
                ),
                3 => 
                array (
                    'id' => 7,
                    'material_id' => 2,
                    'height' => 20,
                    'width' => 40,
                    'depth' => 15,
                    'price' => '244.80',
                    'created_at' => '2021-11-08 11:00:48',
                    'updated_at' => '2021-11-08 11:00:48',
                ),
                4 => 
                array (
                    'id' => 8,
                    'material_id' => 3,
                    'height' => 20,
                    'width' => 40,
                    'depth' => 15,
                    'price' => '244.80',
                    'created_at' => '2021-11-08 11:01:48',
                    'updated_at' => '2021-11-08 11:01:48',
                ),
                5 => 
                array (
                    'id' => 9,
                    'material_id' => 4,
                    'height' => 20,
                    'width' => 40,
                    'depth' => 15,
                    'price' => '244.80',
                    'created_at' => '2021-11-08 11:02:14',
                    'updated_at' => '2021-11-08 11:02:14',
                ),
                6 => 
                array (
                    'id' => 10,
                    'material_id' => 4,
                    'height' => 20,
                    'width' => 40,
                    'depth' => 15,
                    'price' => '244.80',
                    'created_at' => '2021-11-08 11:02:36',
                    'updated_at' => '2021-11-08 11:02:36',
                ),
                7 => 
                array (
                    'id' => 11,
                    'material_id' => 5,
                    'height' => 20,
                    'width' => 40,
                    'depth' => 15,
                    'price' => '456.00',
                    'created_at' => '2021-11-08 11:03:08',
                    'updated_at' => '2021-11-08 11:03:08',
                ),
                8 => 
                array (
                    'id' => 12,
                    'material_id' => 6,
                    'height' => 20,
                    'width' => 40,
                    'depth' => 15,
                    'price' => '456.00',
                    'created_at' => '2021-11-08 11:03:31',
                    'updated_at' => '2021-11-08 11:03:31',
                ),
                9 => 
                array (
                    'id' => 13,
                    'material_id' => 1,
                    'height' => 15,
                    'width' => 40,
                    'depth' => 15,
                    'price' => '153.90',
                    'created_at' => '2021-11-08 11:04:14',
                    'updated_at' => '2021-11-08 11:04:14',
                ),
                10 => 
                array (
                    'id' => 14,
                    'material_id' => 2,
                    'height' => 15,
                    'width' => 40,
                    'depth' => 15,
                    'price' => '183.60',
                    'created_at' => '2021-11-08 11:04:30',
                    'updated_at' => '2021-11-08 11:04:30',
                ),
                11 => 
                array (
                    'id' => 15,
                    'material_id' => 3,
                    'height' => 15,
                    'width' => 40,
                    'depth' => 15,
                    'price' => '183.60',
                    'created_at' => '2021-11-08 11:04:56',
                    'updated_at' => '2021-11-08 11:04:56',
                ),
                12 => 
                array (
                    'id' => 16,
                    'material_id' => 1,
                    'height' => 15,
                    'width' => 50,
                    'depth' => 15,
                    'price' => '192.38',
                    'created_at' => '2021-11-16 09:59:21',
                    'updated_at' => '2021-11-16 09:59:21',
                ),
                13 => 
                array (
                    'id' => 17,
                    'material_id' => 2,
                    'height' => 15,
                    'width' => 50,
                    'depth' => 15,
                    'price' => '229.50',
                    'created_at' => '2021-11-16 09:59:46',
                    'updated_at' => '2021-11-16 09:59:46',
                ),
                14 => 
                array (
                    'id' => 18,
                    'material_id' => 3,
                    'height' => 15,
                    'width' => 50,
                    'depth' => 15,
                    'price' => '229.50',
                    'created_at' => '2021-11-16 10:00:08',
                    'updated_at' => '2021-11-16 10:00:08',
                ),
                15 => 
                array (
                    'id' => 19,
                    'material_id' => 4,
                    'height' => 15,
                    'width' => 50,
                    'depth' => 15,
                    'price' => '229.50',
                    'created_at' => '2021-11-16 10:00:34',
                    'updated_at' => '2021-11-16 10:00:34',
                ),
                16 => 
                array (
                    'id' => 20,
                    'material_id' => 1,
                    'height' => 20,
                    'width' => 50,
                    'depth' => 15,
                    'price' => '256.50',
                    'created_at' => '2021-11-16 10:01:31',
                    'updated_at' => '2021-11-16 10:01:31',
                ),
                17 => 
                array (
                    'id' => 21,
                    'material_id' => 2,
                    'height' => 20,
                    'width' => 50,
                    'depth' => 15,
                    'price' => '306.00',
                    'created_at' => '2021-11-16 10:01:53',
                    'updated_at' => '2021-11-16 10:01:53',
                ),
                18 => 
                array (
                    'id' => 22,
                    'material_id' => 3,
                    'height' => 20,
                    'width' => 50,
                    'depth' => 15,
                    'price' => '306.00',
                    'created_at' => '2021-11-16 10:02:11',
                    'updated_at' => '2021-11-16 10:02:11',
                ),
                19 => 
                array (
                    'id' => 23,
                    'material_id' => 4,
                    'height' => 20,
                    'width' => 50,
                    'depth' => 15,
                    'price' => '306.00',
                    'created_at' => '2021-11-16 10:02:38',
                    'updated_at' => '2021-11-16 10:02:38',
                ),
                20 => 
                array (
                    'id' => 24,
                    'material_id' => 5,
                    'height' => 15,
                    'width' => 50,
                    'depth' => 15,
                    'price' => '427.50',
                    'created_at' => '2021-11-16 10:03:04',
                    'updated_at' => '2021-11-16 10:03:04',
                ),
                21 => 
                array (
                    'id' => 25,
                    'material_id' => 6,
                    'height' => 15,
                    'width' => 50,
                    'depth' => 15,
                    'price' => '427.50',
                    'created_at' => '2021-11-16 10:03:26',
                    'updated_at' => '2021-11-16 10:03:26',
                ),
                22 => 
                array (
                    'id' => 26,
                    'material_id' => 5,
                    'height' => 20,
                    'width' => 50,
                    'depth' => 15,
                    'price' => '570.00',
                    'created_at' => '2021-11-16 10:03:46',
                    'updated_at' => '2021-11-16 10:03:46',
                ),
                23 => 
                array (
                    'id' => 27,
                    'material_id' => 6,
                    'height' => 20,
                    'width' => 50,
                    'depth' => 15,
                    'price' => '570.00',
                    'created_at' => '2021-11-16 10:04:28',
                    'updated_at' => '2021-11-16 10:04:28',
                ),
                24 => 
                array (
                    'id' => 28,
                    'material_id' => 1,
                    'height' => 15,
                    'width' => 60,
                    'depth' => 15,
                    'price' => '230.85',
                    'created_at' => '2021-11-16 10:04:55',
                    'updated_at' => '2021-11-16 10:04:55',
                ),
                25 => 
                array (
                    'id' => 29,
                    'material_id' => 2,
                    'height' => 15,
                    'width' => 60,
                    'depth' => 15,
                    'price' => '275.40',
                    'created_at' => '2021-11-16 10:05:17',
                    'updated_at' => '2021-11-16 10:05:17',
                ),
                26 => 
                array (
                    'id' => 30,
                    'material_id' => 3,
                    'height' => 15,
                    'width' => 60,
                    'depth' => 15,
                    'price' => '275.40',
                    'created_at' => '2021-11-16 10:05:37',
                    'updated_at' => '2021-11-16 10:05:37',
                ),
                27 => 
                array (
                    'id' => 31,
                    'material_id' => 4,
                    'height' => 15,
                    'width' => 50,
                    'depth' => 15,
                    'price' => '229.50',
                    'created_at' => '2021-11-16 10:05:59',
                    'updated_at' => '2021-11-16 10:05:59',
                ),
                28 => 
                array (
                    'id' => 32,
                    'material_id' => 4,
                    'height' => 15,
                    'width' => 60,
                    'depth' => 15,
                    'price' => '275.40',
                    'created_at' => '2021-11-16 10:06:20',
                    'updated_at' => '2021-11-16 10:06:20',
                ),
                29 => 
                array (
                    'id' => 33,
                    'material_id' => 5,
                    'height' => 15,
                    'width' => 60,
                    'depth' => 15,
                    'price' => '513.00',
                    'created_at' => '2021-11-16 10:06:36',
                    'updated_at' => '2021-11-16 10:06:36',
                ),
                30 => 
                array (
                    'id' => 34,
                    'material_id' => 6,
                    'height' => 15,
                    'width' => 60,
                    'depth' => 15,
                    'price' => '513.00',
                    'created_at' => '2021-11-16 10:07:00',
                    'updated_at' => '2021-11-16 10:07:00',
                ),
                31 => 
                array (
                    'id' => 35,
                    'material_id' => 1,
                    'height' => 20,
                    'width' => 60,
                    'depth' => 15,
                    'price' => '307.80',
                    'created_at' => '2021-11-16 10:07:21',
                    'updated_at' => '2021-11-16 10:07:21',
                ),
                32 => 
                array (
                    'id' => 36,
                    'material_id' => 2,
                    'height' => 20,
                    'width' => 60,
                    'depth' => 15,
                    'price' => '367.20',
                    'created_at' => '2021-11-16 10:08:57',
                    'updated_at' => '2021-11-16 10:08:57',
                ),
                33 => 
                array (
                    'id' => 37,
                    'material_id' => 3,
                    'height' => 20,
                    'width' => 60,
                    'depth' => 15,
                    'price' => '367.20',
                    'created_at' => '2021-11-16 10:09:16',
                    'updated_at' => '2021-11-16 10:09:16',
                ),
                34 => 
                array (
                    'id' => 38,
                    'material_id' => 4,
                    'height' => 20,
                    'width' => 60,
                    'depth' => 15,
                    'price' => '367.20',
                    'created_at' => '2021-11-16 10:09:51',
                    'updated_at' => '2021-11-16 10:09:51',
                ),
                35 => 
                array (
                    'id' => 39,
                    'material_id' => 5,
                    'height' => 20,
                    'width' => 60,
                    'depth' => 15,
                    'price' => '684.00',
                    'created_at' => '2021-11-16 10:10:13',
                    'updated_at' => '2021-11-16 10:10:13',
                ),
                36 => 
                array (
                    'id' => 40,
                    'material_id' => 6,
                    'height' => 20,
                    'width' => 60,
                    'depth' => 15,
                    'price' => '684.00',
                    'created_at' => '2021-11-16 10:10:34',
                    'updated_at' => '2021-11-16 10:10:34',
                ),
                37 => 
                array (
                    'id' => 41,
                    'material_id' => 1,
                    'height' => 15,
                    'width' => 70,
                    'depth' => 15,
                    'price' => '269.33',
                    'created_at' => '2021-11-16 10:11:03',
                    'updated_at' => '2021-11-16 10:11:03',
                ),
                38 => 
                array (
                    'id' => 42,
                    'material_id' => 2,
                    'height' => 15,
                    'width' => 70,
                    'depth' => 15,
                    'price' => '321.30',
                    'created_at' => '2021-11-16 10:11:22',
                    'updated_at' => '2021-11-16 10:11:22',
                ),
                39 => 
                array (
                    'id' => 43,
                    'material_id' => 3,
                    'height' => 15,
                    'width' => 70,
                    'depth' => 15,
                    'price' => '321.30',
                    'created_at' => '2021-11-16 10:11:49',
                    'updated_at' => '2021-11-16 10:11:49',
                ),
                40 => 
                array (
                    'id' => 44,
                    'material_id' => 4,
                    'height' => 15,
                    'width' => 70,
                    'depth' => 15,
                    'price' => '321.30',
                    'created_at' => '2021-11-16 10:12:08',
                    'updated_at' => '2021-11-16 10:12:08',
                ),
                41 => 
                array (
                    'id' => 45,
                    'material_id' => 5,
                    'height' => 15,
                    'width' => 70,
                    'depth' => 15,
                    'price' => '598.50',
                    'created_at' => '2021-11-16 10:13:02',
                    'updated_at' => '2021-11-16 10:13:02',
                ),
                42 => 
                array (
                    'id' => 46,
                    'material_id' => 6,
                    'height' => 15,
                    'width' => 70,
                    'depth' => 15,
                    'price' => '598.50',
                    'created_at' => '2021-11-16 10:13:26',
                    'updated_at' => '2021-11-16 10:13:26',
                ),
                43 => 
                array (
                    'id' => 47,
                    'material_id' => 1,
                    'height' => 20,
                    'width' => 70,
                    'depth' => 15,
                    'price' => '359.10',
                    'created_at' => '2021-11-16 10:13:55',
                    'updated_at' => '2021-11-16 10:13:55',
                ),
                44 => 
                array (
                    'id' => 48,
                    'material_id' => 2,
                    'height' => 20,
                    'width' => 70,
                    'depth' => 15,
                    'price' => '428.40',
                    'created_at' => '2021-11-16 10:14:24',
                    'updated_at' => '2021-11-16 10:14:24',
                ),
                45 => 
                array (
                    'id' => 49,
                    'material_id' => 3,
                    'height' => 20,
                    'width' => 70,
                    'depth' => 15,
                    'price' => '428.40',
                    'created_at' => '2021-11-16 10:14:48',
                    'updated_at' => '2021-11-16 10:14:48',
                ),
                46 => 
                array (
                    'id' => 50,
                    'material_id' => 4,
                    'height' => 20,
                    'width' => 70,
                    'depth' => 15,
                    'price' => '428.40',
                    'created_at' => '2021-11-16 10:19:54',
                    'updated_at' => '2021-11-16 10:19:54',
                ),
                47 => 
                array (
                    'id' => 51,
                    'material_id' => 5,
                    'height' => 20,
                    'width' => 70,
                    'depth' => 15,
                    'price' => '798.00',
                    'created_at' => '2021-11-16 10:20:23',
                    'updated_at' => '2021-11-16 10:20:23',
                ),
                48 => 
                array (
                    'id' => 52,
                    'material_id' => 6,
                    'height' => 20,
                    'width' => 70,
                    'depth' => 15,
                    'price' => '798.00',
                    'created_at' => '2021-11-16 10:20:49',
                    'updated_at' => '2021-11-16 10:20:49',
                ),
                49 => 
                array (
                    'id' => 53,
                    'material_id' => 1,
                    'height' => 15,
                    'width' => 80,
                    'depth' => 15,
                    'price' => '307.80',
                    'created_at' => '2021-11-16 10:21:34',
                    'updated_at' => '2021-11-16 10:21:34',
                ),
                50 => 
                array (
                    'id' => 54,
                    'material_id' => 2,
                    'height' => 15,
                    'width' => 80,
                    'depth' => 15,
                    'price' => '367.20',
                    'created_at' => '2021-11-16 10:21:55',
                    'updated_at' => '2021-11-16 10:21:55',
                ),
                51 => 
                array (
                    'id' => 55,
                    'material_id' => 3,
                    'height' => 15,
                    'width' => 80,
                    'depth' => 15,
                    'price' => '367.20',
                    'created_at' => '2021-11-16 10:22:13',
                    'updated_at' => '2021-11-16 10:22:13',
                ),
                52 => 
                array (
                    'id' => 56,
                    'material_id' => 4,
                    'height' => 15,
                    'width' => 80,
                    'depth' => 15,
                    'price' => '367.20',
                    'created_at' => '2021-11-16 10:22:35',
                    'updated_at' => '2021-11-16 10:22:35',
                ),
                53 => 
                array (
                    'id' => 57,
                    'material_id' => 5,
                    'height' => 15,
                    'width' => 80,
                    'depth' => 15,
                    'price' => '684.00',
                    'created_at' => '2021-11-16 10:23:02',
                    'updated_at' => '2021-11-16 10:23:02',
                ),
                54 => 
                array (
                    'id' => 58,
                    'material_id' => 6,
                    'height' => 15,
                    'width' => 80,
                    'depth' => 15,
                    'price' => '684.00',
                    'created_at' => '2021-11-16 10:24:09',
                    'updated_at' => '2021-11-16 10:24:09',
                ),
                55 => 
                array (
                    'id' => 59,
                    'material_id' => 1,
                    'height' => 20,
                    'width' => 80,
                    'depth' => 15,
                    'price' => '410.40',
                    'created_at' => '2021-11-16 10:24:35',
                    'updated_at' => '2021-11-16 10:24:35',
                ),
                56 => 
                array (
                    'id' => 60,
                    'material_id' => 2,
                    'height' => 20,
                    'width' => 80,
                    'depth' => 15,
                    'price' => '489.60',
                    'created_at' => '2021-11-16 10:25:06',
                    'updated_at' => '2021-11-16 10:25:06',
                ),
                57 => 
                array (
                    'id' => 61,
                    'material_id' => 3,
                    'height' => 20,
                    'width' => 80,
                    'depth' => 15,
                    'price' => '489.60',
                    'created_at' => '2021-11-16 10:25:32',
                    'updated_at' => '2021-11-16 10:25:32',
                ),
                58 => 
                array (
                    'id' => 62,
                    'material_id' => 4,
                    'height' => 20,
                    'width' => 80,
                    'depth' => 15,
                    'price' => '489.60',
                    'created_at' => '2021-11-16 10:26:34',
                    'updated_at' => '2021-11-16 10:26:34',
                ),
                59 => 
                array (
                    'id' => 63,
                    'material_id' => 5,
                    'height' => 20,
                    'width' => 80,
                    'depth' => 15,
                    'price' => '912.00',
                    'created_at' => '2021-11-16 10:26:52',
                    'updated_at' => '2021-11-16 10:26:52',
                ),
                60 => 
                array (
                    'id' => 64,
                    'material_id' => 6,
                    'height' => 20,
                    'width' => 80,
                    'depth' => 15,
                    'price' => '912.00',
                    'created_at' => '2021-11-16 10:27:14',
                    'updated_at' => '2021-11-16 10:27:14',
                ),
                61 => 
                array (
                    'id' => 65,
                    'material_id' => 1,
                    'height' => 20,
                    'width' => 80,
                    'depth' => 20,
                    'price' => '547.20',
                    'created_at' => '2021-11-16 10:27:44',
                    'updated_at' => '2021-11-16 10:27:44',
                ),
                62 => 
                array (
                    'id' => 66,
                    'material_id' => 2,
                    'height' => 20,
                    'width' => 80,
                    'depth' => 20,
                    'price' => '652.80',
                    'created_at' => '2021-11-16 10:28:03',
                    'updated_at' => '2021-11-16 10:28:03',
                ),
                63 => 
                array (
                    'id' => 67,
                    'material_id' => 3,
                    'height' => 20,
                    'width' => 80,
                    'depth' => 20,
                    'price' => '652.80',
                    'created_at' => '2021-11-16 10:28:23',
                    'updated_at' => '2021-11-16 10:28:23',
                ),
                64 => 
                array (
                    'id' => 68,
                    'material_id' => 4,
                    'height' => 20,
                    'width' => 80,
                    'depth' => 20,
                    'price' => '652.80',
                    'created_at' => '2021-11-16 10:28:49',
                    'updated_at' => '2021-11-16 10:28:49',
                ),
                65 => 
                array (
                    'id' => 69,
                    'material_id' => 5,
                    'height' => 20,
                    'width' => 80,
                    'depth' => 20,
                    'price' => '1216.00',
                    'created_at' => '2021-11-16 10:29:33',
                    'updated_at' => '2021-11-16 10:29:33',
                ),
                66 => 
                array (
                    'id' => 70,
                    'material_id' => 6,
                    'height' => 20,
                    'width' => 80,
                    'depth' => 20,
                    'price' => '1216.00',
                    'created_at' => '2021-11-16 10:29:54',
                    'updated_at' => '2021-11-16 10:29:54',
                ),
                67 => 
                array (
                    'id' => 71,
                    'material_id' => 1,
                    'height' => 20,
                    'width' => 90,
                    'depth' => 15,
                    'price' => '461.70',
                    'created_at' => '2021-11-16 10:30:22',
                    'updated_at' => '2021-11-16 10:30:22',
                ),
                68 => 
                array (
                    'id' => 72,
                    'material_id' => 2,
                    'height' => 20,
                    'width' => 90,
                    'depth' => 15,
                    'price' => '550.80',
                    'created_at' => '2021-11-16 10:32:36',
                    'updated_at' => '2021-11-16 10:33:35',
                ),
                69 => 
                array (
                    'id' => 73,
                    'material_id' => 3,
                    'height' => 20,
                    'width' => 90,
                    'depth' => 15,
                    'price' => '550.80',
                    'created_at' => '2021-11-16 10:33:09',
                    'updated_at' => '2021-11-16 10:33:09',
                ),
                70 => 
                array (
                    'id' => 74,
                    'material_id' => 4,
                    'height' => 20,
                    'width' => 90,
                    'depth' => 15,
                    'price' => '550.80',
                    'created_at' => '2021-11-16 10:33:59',
                    'updated_at' => '2021-11-16 10:33:59',
                ),
                71 => 
                array (
                    'id' => 75,
                    'material_id' => 5,
                    'height' => 20,
                    'width' => 90,
                    'depth' => 15,
                    'price' => '1026.00',
                    'created_at' => '2021-11-16 10:34:27',
                    'updated_at' => '2021-11-16 10:34:27',
                ),
            ));
       } catch(Exception $e) {
         throw new Exception('Exception occur ' . $e);

         \DB::rollBack();
       }

       \DB::commit();
    }
}
