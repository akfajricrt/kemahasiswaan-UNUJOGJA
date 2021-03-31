<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Complaints;
use App\Models\Organizations;
use App\Models\Prestations;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.admin.dashboard', [
            'prestasi_mahasiswa' => Prestations::count(),
            'data_complaint' => Complaints::count(),
            'data_organization' => Organizations::count()

        ]);
    }
}
