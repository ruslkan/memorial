<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Traits\Seedable;

class VoyagerDeploymentOrchestratorSeeder extends Seeder
{
    use Seedable;

    protected $seedersPath = '';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AccessoriesTableSeeder::class,
            AccessoryCategoriesTableSeeder::class,
            CategoriesTableSeeder::class,
            MaterialsTableSeeder::class,
            MigrationsTableSeeder::class,
            ParterresTableSeeder::class,
            PedestalsTableSeeder::class,
            PillarsTableSeeder::class,
            ProductsTableSeeder::class,
            ServicesTableSeeder::class,
            StellasTableSeeder::class,
            TombstonesTableSeeder::class,
        ]);
    }
}
