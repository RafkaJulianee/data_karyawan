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
        return Inertia::render('Dashboard', [
            'totalKaryawan' => Karyawan::count(),
            'totalJabatan' => Jabatan::count()
        ]);
    }
}
