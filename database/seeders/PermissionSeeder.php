<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use Hash;
class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();
        $user = \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@test.dev',
            'password' => Hash::make('password'),
        ]);
        $user = \App\Models\User::factory()->create([
            'name' => 'demo',
            'email' => 'demo@test.dev',
            'password' => Hash::make('password'),
        ]);

    }
}
