<?php

namespace App\Http\Controllers;

use App\Data\RuanganData;
use App\Data\JadwalData;

class DashboardController extends Controller
{
    public function index()
    {
        $totalRuangan = count(RuanganData::semuaRuangan());
        $totalJadwal = count(JadwalData::semuaJadwal());

        return view('dashboard', compact(
            'totalRuangan',
            'totalJadwal'
        ));
    }
}