<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('anggotas')->insert([
            'nim' => '1941720094',
            'nama' => 'Abdur Rozak',
            'absen' => '1',
            'foto' => 'rozak.jfif'
        ]);

        DB::table('anggotas')->insert([
            'nim' => '1941720054',
            'nama' => 'Pramudya W.',
            'absen' => '21',
            'foto' => 'pram.jfif'
        ]);
    }
}
