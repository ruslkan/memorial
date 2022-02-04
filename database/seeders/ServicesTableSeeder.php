<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
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

        \DB::table('services')->delete();

        \DB::table('services')->insert(array (
                0 => 
                array (
                    'id' => 1,
                    'name' => 'Обычное оформление',
                    'price' => '120.00',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                1 => 
                array (
                    'id' => 2,
                'name' => 'Медальон + рамка + сусальное золото (фреза)',
                    'price' => '160.00',
                    'created_at' => NULL,
                    'updated_at' => '2021-09-29 12:28:24',
                ),
                2 => 
                array (
                    'id' => 3,
                'name' => 'Медальон + рамка + сусальное золото (пескоструй)',
                    'price' => '150.00',
                    'created_at' => NULL,
                    'updated_at' => '2021-09-29 12:28:34',
                ),
            ));
       } catch(Exception $e) {
         throw new Exception('Exception occur ' . $e);

         \DB::rollBack();
       }

       \DB::commit();
    }
}
