<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TombstonesTableSeeder extends Seeder
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

        \DB::table('tombstones')->delete();

        \DB::table('tombstones')->insert(array (
                0 => 
                array (
                    'id' => 3,
                    'material_id' => 1,
                    'height' => 100,
                    'width' => 60,
                    'depth' => 3,
                    'price' => '307.80',
                    'created_at' => '2021-09-26 18:41:37',
                    'updated_at' => '2021-11-01 14:32:55',
                ),
                1 => 
                array (
                    'id' => 4,
                    'material_id' => 2,
                    'height' => 100,
                    'width' => 60,
                    'depth' => 3,
                    'price' => '345.60',
                    'created_at' => '2021-09-26 18:42:00',
                    'updated_at' => '2021-11-01 14:32:36',
                ),
                2 => 
                array (
                    'id' => 5,
                    'material_id' => 1,
                    'height' => 100,
                    'width' => 45,
                    'depth' => 3,
                    'price' => '230.85',
                    'created_at' => '2021-12-06 14:32:32',
                    'updated_at' => '2021-12-06 14:32:32',
                ),
                3 => 
                array (
                    'id' => 6,
                    'material_id' => 1,
                    'height' => 110,
                    'width' => 50,
                    'depth' => 3,
                    'price' => '282.15',
                    'created_at' => '2021-12-06 14:33:22',
                    'updated_at' => '2021-12-06 14:33:22',
                ),
            ));
       } catch(Exception $e) {
         throw new Exception('Exception occur ' . $e);

         \DB::rollBack();
       }

       \DB::commit();
    }
}
