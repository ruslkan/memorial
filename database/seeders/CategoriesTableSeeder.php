<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
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

        \DB::table('categories')->delete();

        \DB::table('categories')->insert(array (
                0 => 
                array (
                    'id' => 2,
                    'name' => 'Одиночные',
                    'image' => 'categories/November2021/Dc1f9FccrGzBpZDvhaGd.jpg',
                    'deleted_at' => NULL,
                    'created_at' => '2021-08-19 14:39:56',
                    'updated_at' => '2021-11-18 12:46:58',
                ),
                1 => 
                array (
                    'id' => 3,
                    'name' => 'Двойные',
                    'image' => 'categories/August2021/QidOH5ZXceQW5i9AAxC0.jpg',
                    'deleted_at' => NULL,
                    'created_at' => '2021-08-19 14:40:23',
                    'updated_at' => '2021-08-21 17:02:42',
                ),
                2 => 
                array (
                    'id' => 4,
                    'name' => 'Эксклюзивные',
                    'image' => 'categories/November2021/LCNP1egLXfrnsCFoi4ZW.jpg',
                    'deleted_at' => NULL,
                    'created_at' => '2021-08-21 16:52:58',
                    'updated_at' => '2022-01-15 19:57:54',
                ),
                3 => 
                array (
                    'id' => 7,
                    'name' => 'Детские',
                    'image' => 'categories/December2021/xCIXqQHOJF9xwZWjt0hg.jpg',
                    'deleted_at' => NULL,
                    'created_at' => '2021-12-06 15:34:51',
                    'updated_at' => '2022-01-15 19:57:30',
                ),
                4 => 
                array (
                    'id' => 8,
                    'name' => 'Из гранитно-мраморной крошки',
                    'image' => 'categories/December2021/49UiAeSH2lN4tgFZobLm.jpg',
                    'deleted_at' => NULL,
                    'created_at' => '2021-12-06 15:37:19',
                    'updated_at' => '2021-12-07 05:11:00',
                ),
                5 => 
                array (
                    'id' => 9,
                    'name' => 'Комплексы',
                    'image' => 'categories/December2021/dZmNnmgmlYJA33eV6gZG.jpg',
                    'deleted_at' => NULL,
                    'created_at' => '2021-12-06 15:39:05',
                    'updated_at' => '2022-01-15 19:57:44',
                ),
            ));
       } catch(Exception $e) {
         throw new Exception('Exception occur ' . $e);

         \DB::rollBack();
       }

       \DB::commit();
    }
}
