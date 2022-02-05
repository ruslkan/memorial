<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            AccessoriesTableSeeder::class,
            AccessoryCategoriesTableSeeder::class,
            CategoriesTableSeeder::class,
            MaterialsTableSeeder::class,
            ParterresTableSeeder::class,
            PedestalsTableSeeder::class,
            PillarsTableSeeder::class,
            ProductsTableSeeder::class,
            ServicesTableSeeder::class,
            StellasTableSeeder::class,
            TombstonesTableSeeder::class,
            UsersTableSeeder::class,
        ]);
    }
}
