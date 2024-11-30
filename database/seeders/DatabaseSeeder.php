<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\RoleUser;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $routes = \Route::getRoutes();

        foreach ($routes as $route) {

            $key = $route->getName();

            if ($key && !str_starts_with($key, 'generated::') && $key !== 'storage.local') {
                $name = ucfirst(str_replace('.', '-', $key));

                Permission::create([
                    'key' => $key,
                    'name' => $name,
                ]);
            }
        }

        $role1 = Role::create(['name' => 'Admin', 'color' => 'danger']);
        $role2 = Role::create(['name' => 'User', 'color' => 'success']);
        $role3 = Role::create(['name' => 'Moderator', 'color' => 'primary']);

        $permissions = Permission::pluck('id')->toArray();

        $role1->permissions()->attach($permissions);
        $role2->permissions()->attach($permissions);
        $role3->permissions()->attach($permissions);

        $user = User::factory()->create([
            'name' => 'Madiyor Shodiev',
            'email' => 'admin@gmail.com',
        ]);

        $user->roles()->attach($role1);

    }
}
