<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PrestationRequest;
use App\Models\Prestations;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PrestasiController extends Controller
{
    public function index(Request $request)
    {   
        $prestasi = Prestations::all();

        return view('pages.prestasi', [
            'prestasi' => $prestasi
        ]);
        // return view('pages.prestasi');
    }

    
    public function create()
    {
        return view('pages.inputPrestasi');
    }

    public function store(PrestationRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->nama_lengkap);

        
        $DataPrestasi = new Prestations();
        $DataPrestasi->nama_lengkap = $data['nama_lengkap'];
        $DataPrestasi->slug = $data['slug'];
        $DataPrestasi->nim = $data['nim'];
        $DataPrestasi->prodi = $data['prodi'];
        $DataPrestasi->no_hp = $data['no_hp'];
        $DataPrestasi->nama_acara = $data['nama_acara'];
        $DataPrestasi->institusi_pembuat_acara = $data['institusi_pembuat_acara'];
        $DataPrestasi->tanggal_pelaksanaan = $data['tanggal_pelaksanaan'];
        $DataPrestasi->peringkat_perlombaan = $data['peringkat_perlombaan'];
        
        $DataPrestasi->sertifikat = $data['sertifikat']= $request->file('sertifikat')->store(
            'assets/pdf','public'
        );

        $DataPrestasi->dokumentasi_acara = $data['dokumentasi_acara']= $request->file('dokumentasi_acara')->store(
            'assets/img','public'
        );

         

        $DataPrestasi->save();


        return view('pages.berhasil');
    }
}
