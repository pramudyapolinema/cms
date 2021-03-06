<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        DB::table('menus')->insert([
            'nama' => 'Coffee Latte',
            'deskripsi' => $faker->text(150),
            'foto' => 'special-1.jpg',
            'harga' => '34'
        ]);
        
        DB::table('menus')->insert([
            'nama' => 'Croissant',
            'deskripsi' => $faker->text(150),
            'foto' => 'special-2.jpg',
            'harga' => '26'
        ]);

        DB::table('menus')->insert([
            'nama' => 'Lemon Squash',
            'deskripsi' => $faker->text(150),
            'foto' => 'special-3.jpg',
            'harga' => '19'
        ]);

        DB::table('menus')->insert([
            'nama' => 'Salad',
            'deskripsi' => $faker->text(150),
            'foto' => 'special-4.jpg',
            'harga' => '57'
        ]);
    }
}
