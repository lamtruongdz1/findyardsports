<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            ['name' => 'Sân 5','slug' => 'san-5'],
            ['name' => 'Sân 7','slug' => 'san-7'],
            ['name' => 'Sân 11','slug' => 'san-11'],
        ]);
    }
}
