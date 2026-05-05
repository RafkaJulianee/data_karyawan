<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Karyawan;
use App\Models\Jabatan;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'totalKaryawan' => Karyawan::count(),
            'totalJabatan' => Jabatan::count()
        ]);
    }
}
