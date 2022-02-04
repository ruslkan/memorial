<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AccessoryCategoriesTableSeeder extends Seeder
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

        \DB::table('accessory_categories')->delete();

        \DB::table('accessory_categories')->insert(array (
                0 =>
                array (
                    'id' => 3,
                    'name' => 'Художественное оформление',
                    'image' => 'accessory-categories/January2022/FProb8amsmS0B8HTeNft.jpg',
                    'created_at' => '2022-01-17 13:58:53',
                    'updated_at' => '2022-01-25 21:20:20',
                ),
                1 =>
                array (
                    'id' => 6,
                    'name' => 'Ограды',
                    'image' => 'accessory-categories/January2022/7EesTLwcBDzRxCeKwpNH.jpg',
                    'created_at' => '2022-01-25 21:05:04',
                    'updated_at' => '2022-01-25 21:05:04',
                ),
            ));
       } catch(Exception $e) {
         throw new Exception('Exception occur ' . $e);

         \DB::rollBack();
       }

       \DB::commit();
    }
}
