<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class jenis extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jenis')->insert([
            [
                'id_kode' => 'a11',
                'jenis' => 'lipstik'
            ],
            [
                'id_kode' => 'a22',
                'jenis' => 'bedak'
            ],
            [
                'id_kode' => 'a33',
                'jenis' => 'eyeshadow'
            ]

        ]);
    }
}
