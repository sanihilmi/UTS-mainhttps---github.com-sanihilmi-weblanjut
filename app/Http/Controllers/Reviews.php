<?php

namespace App\Http\Controllers;
use App\Models\Review;
use Illuminate\Http\Request;

class Reviews extends Controller
{
    public function Barang(){
        $data=[
            'barang'=>Review::all()
        ];
        return view('admin.review', $data);

    }

    public function Detail($id){
        $detail = Review::find($id);
        return view('admin.detail', compact('detail'));
    }
}
