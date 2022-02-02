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
            Accessory_categoriesTableSeeder::class,
            CategoriesTableSeeder::class,
            Data_rowsTableSeeder::class,
            Data_typesTableSeeder::class,
            Failed_jobsTableSeeder::class,
            MaterialsTableSeeder::class,
            Menu_itemsTableSeeder::class,
            MenusTableSeeder::class,
            MigrationsTableSeeder::class,
            ParterresTableSeeder::class,
            Password_resetsTableSeeder::class,
            PedestalsTableSeeder::class,
            Permission_roleTableSeeder::class,
            PermissionsTableSeeder::class,
            Personal_access_tokensTableSeeder::class,
            PillarsTableSeeder::class,
            ProductsTableSeeder::class,
            RolesTableSeeder::class,
            ServicesTableSeeder::class,
            SettingsTableSeeder::class,
            StellasTableSeeder::class,
            TombstonesTableSeeder::class,
            TranslationsTableSeeder::class,
            User_rolesTableSeeder::class,
            UsersTableSeeder::class,
            TranslationsTableSeeder::class,
            PermissionRoleTableSeeder::class,
        ]);
    }
}
