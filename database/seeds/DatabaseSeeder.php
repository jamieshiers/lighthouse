<?php

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
        $this->call(
            [
                //FleetSeeder::class,
                //UsersTableSeeder::class,
                //RoomsTableSeeder::class,
                PermissionSeeder::class,
                //DressCodeSeeder::class,
            ]
        );
    }
}
