<?php

namespace App\Data;

class JadwalData
{
    public static function semuaJadwal()
    {
        return [
            [
                'id' => 1,
                'ruangan_id' => 1,
                'mata_kuliah' => 'Pemrograman Internet',
                'kelas' => 'PTI 5A',
                'hari' => 'Senin',
                'mulai' => '08:00',
                'selesai' => '10:00'
            ],
            [
                'id' => 2,
                'ruangan_id' => 2,
                'mata_kuliah' => 'Basis Data',
                'kelas' => 'PTI 5B',
                'hari' => 'Senin',
                'mulai' => '10:00',
                'selesai' => '12:00'
            ],
            [
                'id' => 3,
                'ruangan_id' => 3,
                'mata_kuliah' => 'Desain Grafis',
                'kelas' => 'PTI 3A',
                'hari' => 'Selasa',
                'mulai' => '08:00',
                'selesai' => '10:00'
            ],
            [
                'id' => 4,
                'ruangan_id' => 4,
                'mata_kuliah' => 'Jaringan Komputer',
                'kelas' => 'PTI 5A',
                'hari' => 'Selasa',
                'mulai' => '10:00',
                'selesai' => '12:00'
            ],
            [
                'id' => 5,
                'ruangan_id' => 5,
                'mata_kuliah' => 'Multimedia',
                'kelas' => 'PTI 3B',
                'hari' => 'Rabu',
                'mulai' => '08:00',
                'selesai' => '10:00'
            ],
            [
                'id' => 6,
                'ruangan_id' => 6,
                'mata_kuliah' => 'Pemrograman Web',
                'kelas' => 'PTI 5B',
                'hari' => 'Rabu',
                'mulai' => '10:00',
                'selesai' => '12:00'
            ],
            [
                'id' => 7,
                'ruangan_id' => 7,
                'mata_kuliah' => 'Praktikum Komputer',
                'kelas' => 'PTI 3A',
                'hari' => 'Kamis',
                'mulai' => '08:00',
                'selesai' => '10:00'
            ],
            [
                'id' => 8,
                'ruangan_id' => 8,
                'mata_kuliah' => 'Sistem Informasi',
                'kelas' => 'PTI 5A',
                'hari' => 'Kamis',
                'mulai' => '10:00',
                'selesai' => '12:00'
            ],
            [
                'id' => 9,
                'ruangan_id' => 9,
                'mata_kuliah' => 'Multimedia Interaktif',
                'kelas' => 'PTI 3B',
                'hari' => 'Jumat',
                'mulai' => '08:00',
                'selesai' => '10:00'
            ],
            [
                'id' => 10,
                'ruangan_id' => 10,
                'mata_kuliah' => 'Analisis Sistem',
                'kelas' => 'PTI 5B',
                'hari' => 'Jumat',
                'mulai' => '10:00',
                'selesai' => '12:00'
            ],
        ];
    }
}
