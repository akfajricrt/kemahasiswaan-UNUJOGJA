<?php

namespace App\Http\Controllers;

use App\Models\Hmps;
// use App\Models\Organizations;
use App\Models\Ukms;
use Illuminate\Http\Request;

class OrmawaController extends Controller
{
    public function index(Request $request)
    {   
        
        $organizations = Hmps::with(['forHmp'])->get();
        $items = Ukms::with(['forUkm'])->get();
        
        
        return view('pages.ormawa',[
            
            'organizations' => $organizations,
            'items' => $items,
            
        ]);
        
    }
}
