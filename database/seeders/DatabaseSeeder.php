<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            PermissionsTableSeeder::class,
            RolesTableSeeder::class,
            PermissionRoleTableSeeder::class,
            UsersTableSeeder::class,
            RoleUserTableSeeder::class,

            // Custom
            BrandTableSeeder::class,
            HomepageReviewTableSeeder::class,
            TagTableSeeder::class,
            ReviewTableSeeder::class,

            // Media
            MediaTableSeeder::class,
        ]);
    }
}
