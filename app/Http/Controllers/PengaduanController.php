<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{

    public function index(){

        $pengaduan = Pengaduan::latest()->get();

        return view('dashboard.pengaduan.index', compact('pengaduan'));
    }

    public function store(Request $request){

        // dd($request->all());

        Pengaduan::create($request->all());

        return redirect('/');
    }
}
