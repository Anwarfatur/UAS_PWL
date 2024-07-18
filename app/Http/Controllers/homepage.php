<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Galeri;
use Illuminate\Http\Request;

class homepage extends Controller
{
    public function index(){

        $berita = Berita::latest()->get();
        $galeri = Galeri::latest()->get();

        $data = [
            'berita' => $berita,
            'galeri' => $galeri,
        ];

        // dd($data);

        return view('homepage.index', $data);
    }

    public function dashboard(){

        return view('dashboard.index');
    }
}
