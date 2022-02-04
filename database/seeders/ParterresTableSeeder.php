<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ParterresTableSeeder extends Seeder
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

        \DB::table('parterres')->delete();

        \DB::table('parterres')->insert(array (
                0 => 
                array (
                    'id' => 5,
                    'material_id' => 1,
                    'length' => 300,
                    'height' => 10,
                    'depth' => 5,
                    'price' => '256500000',
                    'created_at' => NULL,
                    'updated_at' => '2021-10-28 08:41:10',
                ),
                1 => 
                array (
                    'id' => 6,
                    'material_id' => 2,
                    'length' => 250,
                    'height' => 10,
                    'depth' => 7,
                    'price' => '336',
                    'created_at' => NULL,
                    'updated_at' => '2021-10-28 08:43:27',
                ),
                2 => 
                array (
                    'id' => 30,
                    'material_id' => 2,
                    'length' => 350,
                    'height' => 7,
                    'depth' => 5,
                    'price' => '235',
                    'created_at' => NULL,
                    'updated_at' => '2021-10-28 08:43:49',
                ),
                3 => 
                array (
                    'id' => 33,
                    'material_id' => 1,
                    'length' => 250,
                    'height' => 10,
                    'depth' => 5,
                    'price' => '214',
                    'created_at' => '2021-11-01 02:38:26',
                    'updated_at' => '2021-11-01 02:38:26',
                ),
                4 => 
                array (
                    'id' => 34,
                    'material_id' => 1,
                    'length' => 250,
                    'height' => 10,
                    'depth' => 5,
                    'price' => '214',
                    'created_at' => '2021-11-01 07:44:54',
                    'updated_at' => '2021-11-01 07:44:54',
                ),
            ));
       } catch(Exception $e) {
         throw new Exception('Exception occur ' . $e);

         \DB::rollBack();
       }

       \DB::commit();
    }
}
