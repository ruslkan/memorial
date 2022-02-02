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
                    'password' => '$2y$10$JXC0sGMdgTKZ6E074YsTHufkHIkzagXw4oVbG8KDo29sI3sLByhda',
                    'remember_token' => '9aLKdEz3yfukYQYJ0ICGRvs8O7edECQgDMD5rWiGa1QIbV53reTr8taCEGbv',
                    'settings' => '{"locale":"ru"}',
                    'created_at' => '2021-08-19 06:00:21',
                    'updated_at' => '2021-10-29 02:08:33',
                ),
                1 => 
                array (
                    'id' => 2,
                    'role_id' => 3,
                    'name' => 'manager',
                    'email' => 'manager@email.com',
                    'avatar' => 'users/default.png',
                    'email_verified_at' => NULL,
                    'password' => '$2y$10$vbPHuXlxr8qT8ZtHgJzPfuTCo93q9ZP6VBxs5oJeB.rdBpTIXgJvW',
                    'remember_token' => 'LcAxjX7v6T1TfS0GgQpGNPEcnbhAPr06SzU1kz9L4kZc3EgO3cdWyKOWn9g0',
                    'settings' => '{"locale":"ru"}',
                    'created_at' => '2021-10-06 21:33:02',
                    'updated_at' => '2021-10-06 21:33:02',
                ),
            ));
       } catch(Exception $e) {
         throw new Exception('Exception occur ' . $e);

         \DB::rollBack();
       }

       \DB::commit();
    }
}
