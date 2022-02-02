<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MaterialsTableSeeder extends Seeder
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

        \DB::table('materials')->delete();

        \DB::table('materials')->insert(array (
                0 => 
                array (
                    'id' => 1,
                    'name' => 'Габбро-диабаз',
                    'image' => 'materials/September2021/1M6KPYaoU61QQuDB5Giv.jpg',
                    'price' => '20000.00',
                    'color' => 'черный',
                    'country' => 'Россия',
                    'created_at' => NULL,
                    'updated_at' => '2022-01-12 09:21:50',
                ),
                1 => 
                array (
                    'id' => 2,
                    'name' => 'Дымовский гранит',
                    'image' => 'materials/September2021/pEbRU872JLNw6kBVxgrT.jpg',
                    'price' => '25000.00',
                    'color' => 'темно-коричневый',
                    'country' => 'Россия',
                    'created_at' => '2021-09-05 20:17:45',
                    'updated_at' => '2022-01-12 09:23:46',
                ),
                2 => 
                array (
                    'id' => 3,
                    'name' => 'Гранит Покостовский',
                    'image' => 'materials/November2021/Fwg5GMJCdYNGwGfzARZ8.jpg',
                    'price' => '25000.00',
                    'color' => 'Серый',
                    'country' => 'Украина',
                    'created_at' => '2021-11-01 14:25:42',
                    'updated_at' => '2022-01-12 09:24:07',
                ),
                3 => 
                array (
                    'id' => 4,
                    'name' => 'Гранит Лезники',
                    'image' => 'materials/November2021/KkcELzW0aGnjYWvjUC4o.jpg',
                    'price' => '25000.00',
                    'color' => 'Красно-черный',
                    'country' => 'Украина',
                    'created_at' => '2021-11-01 14:29:05',
                    'updated_at' => '2022-01-12 09:23:57',
                ),
                4 => 
                array (
                    'id' => 5,
                    'name' => 'Гранит Аврора',
                    'image' => 'materials/November2021/e2Uj6GLLucrEhd5N4Bhs.jpg',
                    'price' => '38000.00',
                    'color' => 'Коричнево-черный',
                    'country' => 'Россия',
                    'created_at' => '2021-11-08 09:55:35',
                    'updated_at' => '2021-11-08 09:56:34',
                ),
                5 => 
                array (
                    'id' => 6,
                    'name' => 'Гранит Блюперн',
                    'image' => 'materials/November2021/7az5OaeD1YkCW7GH8Bzc.jpg',
                    'price' => '38000.00',
                    'color' => 'Серо-голубой',
                    'country' => 'Россия',
                    'created_at' => '2021-11-08 09:57:07',
                    'updated_at' => '2021-11-08 09:57:07',
                ),
            ));
       } catch(Exception $e) {
         throw new Exception('Exception occur ' . $e);

         \DB::rollBack();
       }

       \DB::commit();
    }
}
