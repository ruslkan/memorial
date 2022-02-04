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
            DataRowsTableSeeder::class,
            DataTypesTableSeeder::class,
            MaterialsTableSeeder::class,
            MenuItemsTableSeeder::class,
            MenusTableSeeder::class,
            MigrationsTableSeeder::class,
            ParterresTableSeeder::class,
            PedestalsTableSeeder::class,
            PermissionRoleTableSeeder::class,
            PermissionsTableSeeder::class,
            PillarsTableSeeder::class,
            ProductsTableSeeder::class,
            RolesTableSeeder::class,
            ServicesTableSeeder::class,
            SettingsTableSeeder::class,
            StellasTableSeeder::class,
            TombstonesTableSeeder::class,
            UsersTableSeeder::class,
            PermissionRoleTableSeeder::class,
        ]);
    }
}
