<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Password_resetsTableSeeder extends Seeder
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

        \DB::table('password_resets')->delete();

        \DB::table('password_resets')->insert(array (
            ));
       } catch(Exception $e) {
         throw new Exception('Exception occur ' . $e);

         \DB::rollBack();
       }

       \DB::commit();
    }
}
