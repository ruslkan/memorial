<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PillarsTableSeeder extends Seeder
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

        \DB::table('pillars')->delete();

        \DB::table('pillars')->insert(array (
                0 => 
                array (
                    'id' => 1,
                    'material_id' => 1,
                    'height' => 100,
                    'width' => 50,
                    'depth' => 7,
                    'price' => '599.00',
                    'created_at' => '2021-10-25 14:59:28',
                    'updated_at' => '2021-10-25 14:59:28',
                ),
                1 => 
                array (
                    'id' => 2,
                    'material_id' => 2,
                    'height' => 100,
                    'width' => 30,
                    'depth' => 5,
                    'price' => '288.00',
                    'created_at' => '2021-10-25 15:00:16',
                    'updated_at' => '2021-11-01 14:19:24',
                ),
                2 => 
                array (
                    'id' => 3,
                    'material_id' => 1,
                    'height' => 120,
                    'width' => 30,
                    'depth' => 5,
                    'price' => '308.00',
                    'created_at' => '2021-12-06 14:29:17',
                    'updated_at' => '2021-12-06 14:29:17',
                ),
                3 => 
                array (
                    'id' => 4,
                    'material_id' => 2,
                    'height' => 120,
                    'width' => 30,
                    'depth' => 5,
                    'price' => '450.00',
                    'created_at' => '2021-12-06 14:29:53',
                    'updated_at' => '2022-01-16 09:49:26',
                ),
            ));
       } catch(Exception $e) {
         throw new Exception('Exception occur ' . $e);

         \DB::rollBack();
       }

       \DB::commit();
    }
}
