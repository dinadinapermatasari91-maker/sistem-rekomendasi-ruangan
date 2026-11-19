<?php

namespace App\Http\Controllers;

use App\Data\RuanganData;
use App\Data\JadwalData;

class RuanganController extends Controller
{
    public function index()
    {
        $ruangan = RuanganData::semuaRuangan();

        return view('ruangan.index', compact('ruangan'));
    }

    public function detail($id)
    {
        $semuaRuangan = RuanganData::semuaRuangan();

        $ruangan = collect($semuaRuangan)->firstWhere('id', $id);

        if (!$ruangan) {
            abort(404);
        }

        $jadwal = array_filter(
            JadwalData::semuaJadwal(),
            function ($item) use ($id) {
                return $item['ruangan_id'] == $id;
            }
        );

        return view('ruangan.detail', compact(
            'ruangan',
            'jadwal'
        ));
    }
}