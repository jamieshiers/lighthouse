<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        //Create Ship Permisssions
        Permission::create(['name' => 'View Venues']);
        Permission::create(['name' => 'Create Venues']);
        Permission::create(['name' => 'Edit Venues']);
        Permission::create(['name' => 'Delete Venues']);

        $ventura = Role::create(['name' => 'Ventura Admin']);
        $ventura->givePermissionTo('View Venues');
        $ventura->givePermissionTo('Create Venues');
        $ventura->givePermissionTo('Edit Venues');
        $ventura->givePermissionTo('Delete Venues');

        $arcadia = Role::create(['name' => 'Arcadia User']);
        $arcadia->givePermissionTo('View Venues');
        $arcadia->givePermissionTo('Edit Venues');

        $user = factory(App\Models\User::class)->create([
            'name' => 'Ventura User',
            'email' => 'ventura@example.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$UEhSapdRZ5oSGK748CRSKe/Wp/lVgm2jj0Y8.eq.FPVRsgacMlKuW', // password
            'remember_token' => Str::random(10),
        ]);
        $user->assignRole($ventura);

        $user = factory(App\Models\User::class)->create([
            'name' => 'Arcadia User',
            'email' => 'arcadia@example.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$UEhSapdRZ5oSGK748CRSKe/Wp/lVgm2jj0Y8.eq.FPVRsgacMlKuW', // password
            'remember_token' => Str::random(10),
        ]);
        $user->assignRole($arcadia);
    }
}
