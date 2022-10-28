<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class barangs extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barangs')->insert([
            [
                'nama' => 'Implora',
                'code_jenis' => 'a11',
                'deskripsi_view' => 'Untuk pewarna bibir',
                'desskripsi_detail' => 'Lipcream adalah kosmetika yang terbuat dari lilin, pigmen, minyak, dll. Lipstik biasa dimanfaatkan untuk memberikan warna pada bibir.',
                'stock' => 32,
                'foto' => 'implora.jpg',
                'harga' => 25000
            ],
            [
                'nama' => 'Brasov',
                'code_jenis' => 'a11',
                'deskripsi_view' => 'Untuk pewarna bibir',
                'desskripsi_detail' => 'Liptint adalah produk kosmetik yang digunakan untuk mewarnai bibir, biasanya dalam bentuk cair atau gel. Biasanya bertahan lebih lama dari lipstik dengan meninggalkan noda warna di bibir. Namun, itu bisa mengeringkan bibir dan tidak disarankan untuk musim dingin.',
                'stock' => 22,
                'foto' => 'brasov.jpg',
                'harga' => 27500
            ],
            [
                'nama' => 'Y.O.U',
                'code_jenis' => 'a22',
                'deskripsi_view' => 'Untuk base wajah',
                'desskripsi_detail' => 'bedak tabur adalah bedak yang tidak dipadatkan dan biasanya berbentuk bubuk halus. Bedak tabur biasanya dapat membuat tampilan make-up tahan lama dan tidak pecah. Berbeda dengan transluscent powder, bedak tabur umumnya mempunyai berbagai varian shade sesuai dengan warna kulit.',
                'stock' => 10,
                'foto' => 'you.jpg',
                'harga' => 75000
            ],
            [
                'nama' => 'Pixy',
                'code_jenis' => 'a22',
                'deskripsi_view' => 'Untuk base wajah',
                'desskripsi_detail' => 'bedak padat salah satu produk make-up yang dibutuhkan untuk melengkapi riasan wajah kamu. Bedak padat yang bagus memiliki tekstur ringan dan mampu menutupi warna tidak merata pada kulit.',
                'stock' => 22,
                'foto' => 'pixy.jpg',
                'harga' => 34500
            ],
            [
                'nama' => 'Wardah',
                'code_jenis' => 'a33',
                'deskripsi_view' => 'Untuk hiasan mata',
                'desskripsi_detail' => 'eyeshadow adalah kosmetik yang digunakan pada kelopak mata dan di bawah alis. Perona mata umumnya digunakan untuk membuat mata pemakai lebih menonjol atau agar terlihat lebih menarik.',
                'stock' => 20,
                'foto' => 'wardah.jpg',
                'harga' => 38500
            ],
            [
                'nama' => 'Focallure',
                'code_jenis' => 'a33',
                'deskripsi_view' => 'Untuk hiasan mata',
                'desskripsi_detail' => 'kosmetik yang digunakan pada kelopak mata dan di bawah alis. Perona mata umumnya digunakan untuk membuat mata pemakai lebih menonjol atau agar terlihat lebih menarik.',
                'stock' => 11,
                'foto' => 'focallure.jpg',
                'harga' => 39000
            ]

        ]);
    }
}
