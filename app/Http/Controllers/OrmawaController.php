<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrmawaController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.ormawa');
    }
}
