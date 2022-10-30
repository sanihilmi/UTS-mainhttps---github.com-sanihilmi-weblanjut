<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class artikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artikel') -> insert([
            [
                'kode_jenis_arikel' => 'OR',
                'judul' => "PSSI Sebaiknya di Bubarkan",
                'isi' => "Ia mengatakan bahwa untuk mengakhiri perseteruan dua kubu tersebut, sebaiknya mereka duduk bersama membahas peleburan kompetisi, merevisi status PSSI, dan persiapan kongres.",
            ],

            [
                'kode_jenis_artikel' => 'PL',
                'judul' => "Puan Memberikan Baju Kepada Masyarakat",
                'isi' => "Mbak Puan itu sangat familiar, sangat humble kalau ketemu sama masyarakat. Kalau Mbak Puan itu tidak humble, seakan-akan mukanya mbak Puan tidak merakyat, kemudian untuk apa kira-kira mbak Puan turun ke bawah.",
            ],

            
        ]);
    }
}
