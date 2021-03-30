<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KetentuanController extends Controller
{
    public function tata_laksana(Request $request)
    {
        return view('pages.tataLaksana');
    }

    public function kode_etik(Request $request)
    {
        return view('pages.kodeEtik');
    }


}
