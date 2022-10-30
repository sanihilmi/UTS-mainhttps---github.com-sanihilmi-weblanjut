<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    function berita(){
        $data = DB::table('artikel')
            ->get();
            return $data;
    }
    //
}
