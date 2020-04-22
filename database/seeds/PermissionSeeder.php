<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
Use Spatie\Permission\PermissionRegistrar;

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
        Permission::create(['name' => 'Ventura']);
        Permission::create(['name' => 'Arcadia']);

        Permission::create(['name' => 'create venues']);
        Permission::create(['name' => 'edit venues']);
        Permission::create(['name' => 'delete venues']);

        $ventura = Role::create(['name' => 'ventura']);
        $ventura->givePermissionTo('Ventura');

        $arcadia = Role::create(['name' => 'arcadia']);
        $arcadia->givePermissionTo('Arcadia');

        $user = factory(App\User::class)->create([
            'name' => 'Ventura User',
            'email' => 'ventura@example.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$UEhSapdRZ5oSGK748CRSKe/Wp/lVgm2jj0Y8.eq.FPVRsgacMlKuW', // password
            'remember_token' => Str::random(10),
        ]);
        $user->assignRole($ventura);

        $user = factory(App\User::class)->create([
            'name' => 'Arcadia User',
            'email' => 'arcadia@example.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$UEhSapdRZ5oSGK748CRSKe/Wp/lVgm2jj0Y8.eq.FPVRsgacMlKuW', // password
            'remember_token' => Str::random(10),
        ]);
        $user->assignRole($ventura);


    }
}
