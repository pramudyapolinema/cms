<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('posts')->insert([
            'judul' => 'Kelompok 3',
            'slug' => '/',
            'konten' => 'Ini konten pada halaman HOME. Fndimentum rhoncus, sem
            quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus
            pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut
            libero venenatis faucibus. Ettiam sit amet orci eget eros faucibus tincidunt.',
            'gambar' => 'img/1.jpg',
            'draft' => 0
        ]);

         DB::table('posts')->insert([
            'judul' => 'Halaman menu',
            'slug' => 'menu',
            'konten' => 'Ini konten pada halaman MENU. Fndimentum rhoncus, sem
            quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus
            pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut
            libero venenatis faucibus. Ettiam sit amet orci eget eros faucibus tincidunt.',
            'gambar' => 'img/1.jpg',
            'draft' => 0
        ]);
    }
}
