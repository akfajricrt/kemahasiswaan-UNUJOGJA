<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ComplaintsRequest;
use App\Models\Complaints;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.layanan');
    }

    public function store(ComplaintsRequest $request)
    {
        $data = $request->all();

        $Datacomplaint = new Complaints();
        $Datacomplaint->email = $data['email'];
        $Datacomplaint->nama_lengkap = $data['nama_lengkap'];
        $Datacomplaint->no_hp = $data['no_hp'];
        $Datacomplaint->nim = $data['nim'];
        $Datacomplaint->prodi = $data['prodi'];
        $Datacomplaint->kategori_keluhan = $data['kategori_keluhan'];
        $Datacomplaint->permasalahan = $data['permasalahan'];
        $Datacomplaint->save();
        
        

        return view('pages.berhasil');
    }
}
