<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonalController extends Controller
{
    public function donal(){
        return view('admin.home', [
            "name" => "sani ahmad nur hilmi",
            "fashion" => "is finding identity",
            "image" => "saya.JPG",
            "email" => "sanihilmi86@gmail.com",
            "telepon1" => "+6281234298483",
            "alamat" => "kopen kradenan purwoharjo banyuwangi",
            //section_starts
            "content" => "Hai, saya saat ini sedang mengampuh pendidikan dengan mengambil jurusan Teknik Informastika. Detik ini saya masih mencari untuk menemukan identitas diri saya sendiri, semua orang berkata bahwa jam terbang menentukan jati diri. Namun tak semua orang bisa memahami atas sebuah kesbikan bahkan seorang mahasiswa tak luput dan jauh dari 'tuugas' yang ada dipundak ",
            "age" => "20",
            "qualification" => "SAP data analysis, UI/UX",
            "post" => "Looking for the best",
            "language" => "Indonesia, English",
            //bisa dimasukkan untuk organisa atau pencapaian
            "box1" => "2+",
            "keterangan1" => "years of experience sains",
            //box2
            "box2" => "50+",
            "keterangan2" => "porject completed",
            //box3
            "box3" => "4+",
            "keterangan3" => "best participant of scientific work",
            //box4
            "box4" => "3+",
            "keterangan4" => "health material filler",
            //education
            //sd
            "tahun1" => "2009-2015",
            "sekolah1" => "MINU 2 Kradenan",
            "alamat1" => "Kopen Kradenan Purwoharjo Banyuwangi",
            //smp
            "tahun2" => "2015-2018",
            "sekolah2" => "MTs Al Amiriyyah",
            "alamat2" => "Blokagung Karangdoro Tegalsari Banyuwangi",
            //sma
            "tahun3" => "2018-2021",
            "sekolah3" => "SMK Darussalam",
            "alamat3" => "Blokagung Karangdoro Tegalsari Banyuwangi",
            //kuliah
            "tahun4"=> "2021-Sekarang",
            "sekolah4" => "Politeknik Negeri Banyuwangi",
            "alamat4" => "Jalan Raya Jember No.KM13, Kawang, Labanasem, Kec. Kabat, Kabupaten Banyuwangi, Jawa Timur 68461",
            //portofolio
            "image1" => "gambar1.jpg",
            "image2" => "gambar2.png",
            "image3" => "gambar3.jpg",
            "image4" => "gambar4.jpg",
            
    
    
        ]);
    }
}
