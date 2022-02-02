<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
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

        \DB::table('menus')->delete();

        \DB::table('menus')->insert(array (
                0 => 
                array (
                    'id' => 1,
                    'name' => 'admin',
                    'created_at' => '2021-08-19 05:43:32',
                    'updated_at' => '2021-08-19 05:43:32',
                ),
                1 => 
                array (
                    'id' => 2,
                    'name' => 'main_menu',
                    'created_at' => '2022-01-15 19:29:20',
                    'updated_at' => '2022-01-15 19:29:20',
                ),
            ));
       } catch(Exception $e) {
         throw new Exception('Exception occur ' . $e);

         \DB::rollBack();
       }

       \DB::commit();
    }
}
