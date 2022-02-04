<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
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

        \DB::table('roles')->delete();

        \DB::table('roles')->insert(array (
                0 => 
                array (
                    'id' => 1,
                    'name' => 'admin',
                    'display_name' => 'Администратор',
                    'created_at' => '2021-08-19 05:43:34',
                    'updated_at' => '2021-08-19 05:43:34',
                ),
                1 => 
                array (
                    'id' => 2,
                    'name' => 'user',
                    'display_name' => 'Обычный Пользователь',
                    'created_at' => '2021-08-19 05:43:34',
                    'updated_at' => '2021-08-19 05:43:34',
                ),
                2 => 
                array (
                    'id' => 3,
                    'name' => 'manager',
                    'display_name' => 'Контент менеджер',
                    'created_at' => '2021-10-06 21:32:00',
                    'updated_at' => '2021-10-06 21:32:00',
                ),
            ));
       } catch(Exception $e) {
         throw new Exception('Exception occur ' . $e);

         \DB::rollBack();
       }

       \DB::commit();
    }
}
