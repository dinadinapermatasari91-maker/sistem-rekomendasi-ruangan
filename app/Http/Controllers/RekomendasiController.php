<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data\RuanganData;
use App\Data\JadwalData;

class RekomendasiController extends Controller
{
    public function index(Request $request)
    {
        $jumlahMahasiswa = (int) $request->input('jumlah_mahasiswa', 30);
        $hari = $request->input('hari', 'Senin');
        $mulai = $request->input('mulai', '08:00');
        $selesai = $request->input('selesai', '10:00');

        $fasilitas = $request->input(
            'fasilitas',
            ['Proyektor', 'AC']
        );

        $ruangan = RuanganData::semuaRuangan();
        $jadwal = JadwalData::semuaJadwal();

        $hasil = [];

        foreach ($ruangan as $r) {
            $alasan = [];

            $kapasitasSesuai = $r['kapasitas'] >= $jumlahMahasiswa;

            if (!$kapasitasSesuai) {
                $alasan[] = 'Kapasitas ruangan tidak mencukupi';
            }

            $fasilitasKurang = array_diff(
                $fasilitas,
                $r['fasilitas']
            );

            $fasilitasSesuai = empty($fasilitasKurang);

            if (!$fasilitasSesuai) {
                $alasan[] = 'Fasilitas tidak lengkap: ' .
                    implode(', ', $fasilitasKurang);
            }

            $bentrok = false;

            foreach ($jadwal as $j) {
                if (
                    $j['ruangan_id'] == $r['id'] &&
                    $j['hari'] == $hari &&
                    $mulai < $j['selesai'] &&
                    $selesai > $j['mulai']
                ) {
                    $bentrok = true;
                    $alasan[] = 'Ruangan digunakan untuk ' .
                        $j['mata_kuliah'] . ' (' .
                        $j['mulai'] . '-' . $j['selesai'] . ')';
                    break;
                }
            }

            $selisih = $r['kapasitas'] - $jumlahMahasiswa;

            $layak = $kapasitasSesuai &&
                     $fasilitasSesuai &&
                     !$bentrok;

            if ($layak) {
                $alasan[] = 'Memenuhi seluruh persyaratan';
            }

            $hasil[] = [
                'ruangan' => $r,
                'selisih' => $selisih,
                'layak' => $layak,
                'alasan' => $alasan
            ];
        }

        usort($hasil, function ($a, $b) {
            if ($a['layak'] != $b['layak']) {
                return $b['layak'] <=> $a['layak'];
            }

            return $a['selisih'] <=> $b['selisih'];
        });

        $totalLayak = count(array_filter($hasil, function ($item) {
            return $item['layak'];
        }));

        return view('rekomendasi.index', compact(
            'hasil',
            'jumlahMahasiswa',
            'hari',
            'mulai',
            'selesai',
            'fasilitas',
            'totalLayak'
        ));
    }
}