<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
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

        \DB::table('users')->delete();

        \DB::table('users')->insert(array (
                0 => 
                array (
                    'id' => 1,
                    'role_id' => 1,
                    'name' => 'admin',
                    'email' => 'test@email.com',
                    'avatar' => 'users/default.png',
                    'email_verified_at' => NULL,
                    'password' => '$2y$10$B1T2YIJskdx/pbRBy/xzmOQCIXKuR54jQ7Sm2Ub3JEfb.zmvMKWFu',
                    'remember_token' => 'QehhxsaNsCn244dFghVjLAvEjwlqYV05NDVGGA5ta9u2RQBZEvOgMmdzW6JQ',
                    'settings' => '{"locale":"ru"}',
                    'created_at' => '2021-08-19 06:00:21',
                    'updated_at' => '2022-02-04 18:52:20',
                ),
                1 => 
                array (
                    'id' => 2,
                    'role_id' => 3,
                    'name' => 'manager',
                    'email' => 'manager@email.com',
                    'avatar' => 'users/default.png',
                    'email_verified_at' => NULL,
                    'password' => '$2y$10$.a5uHvrk.oHdlYkUyWW04esBqeZd/WgsWbzT4v503tCLqghFJMWo2',
                    'remember_token' => 'LcAxjX7v6T1TfS0GgQpGNPEcnbhAPr06SzU1kz9L4kZc3EgO3cdWyKOWn9g0',
                    'settings' => '{"locale":"ru"}',
                    'created_at' => '2021-10-06 21:33:02',
                    'updated_at' => '2022-02-04 18:52:38',
                ),
            ));
       } catch(Exception $e) {
         throw new Exception('Exception occur ' . $e);

         \DB::rollBack();
       }

       \DB::commit();
    }
}
