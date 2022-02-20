<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\State;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'admin.index']);
        Permission::create(['name' => 'roles.index']);
        Permission::create(['name' => 'roles.create']);
        Permission::create(['name' => 'roles.store']);
        Permission::create(['name' => 'roles.edit']);
        Permission::create(['name' => 'roles.update']);
        Permission::create(['name' => 'roles.destroy']);
        Permission::create(['name' => 'roles.show']);

        Permission::create(['name' => 'users.index']);
        Permission::create(['name' => 'users.create']);
        Permission::create(['name' => 'users.store']);
        Permission::create(['name' => 'users.edit']);
        Permission::create(['name' => 'users.update']);
        Permission::create(['name' => 'users.destroy']);
        Permission::create(['name' => 'users.show']);

        Permission::create(['name' => 'countries.index']);
        Permission::create(['name' => 'countries.create']);
        Permission::create(['name' => 'countries.store']);
        Permission::create(['name' => 'countries.edit']);
        Permission::create(['name' => 'countries.update']);
        Permission::create(['name' => 'countries.destroy']);
        Permission::create(['name' => 'countries.show']);

        Permission::create(['name' => 'states.index']);
        Permission::create(['name' => 'states.create']);
        Permission::create(['name' => 'states.store']);
        Permission::create(['name' => 'states.edit']);
        Permission::create(['name' => 'states.update']);
        Permission::create(['name' => 'states.destroy']);
        Permission::create(['name' => 'states.show']);

        $permissions = [1, 2, 3, 4, 5, 6, 7, 8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29];

        $super = Role::create(['name' => 'super-admin']);
        $super->
        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo($permissions);

        User::create([
            'name' => 'Edwin Henriquez',
            'email' => 'ed@gmail.com',
            'phone' => '04144753555',
            'address' => 'Calle 181, valle verde, naguanagua',
            'country' => 'Venezuela',
            'state' => 'Carabobo',
            'document'=>'123',
            'password' => bcrypt('123'),
            'email_verified_at' => now(),
        ])->roles()->sync('1');

        User::create([
            'name' => 'Administrador',
            'email' => 'admin@gmail.com',
            'phone' => '04144753555',
            'address' => 'Calle 181, valle verde, naguanagua',
            'country' => 'Venezuela',
            'state' => 'Carabobo',
            'document'=>'123',
            'password' => bcrypt('123'),
            'email_verified_at' => now(),
        ])->roles()->sync('2');

        User::create([
            'name' => 'Sin Role',
            'email' => 'sr@gmail.com',
            'phone' => '04144753555',
            'address' => 'Calle 181, valle verde, naguanagua',
            'country' => 'Venezuela',
            'state' => 'Carabobo',
            'document'=>'123',
            'password' => bcrypt('123'),
            'email_verified_at' => now(),
        ]);

        Country::factory(10)->create();
        State::factory(100)->create();

    }
}
