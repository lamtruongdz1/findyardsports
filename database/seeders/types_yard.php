<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class types_yard extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types_yard')->insert([
            ['name' => 'sân 5', 'slug' =>'san-5','type' =>'1'],
            ['name' => 'sân 7', 'slug' =>'san-7','type' =>'1.5'],
            ['name' => 'sân 11', 'slug' =>'san-11','type' =>'2'],
            ]);



    }
}
