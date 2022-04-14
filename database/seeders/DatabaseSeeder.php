<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();
        $this->call([
            Districts::class,
            CategorySeeder::class,
<<<<<<< HEAD
            PermissionSeeder::class,
=======
>>>>>>> 13432e8d20034af0b1b8b7cd417b8e17c8fc07b3
            types_yard::class,
        ]);
    }
}
