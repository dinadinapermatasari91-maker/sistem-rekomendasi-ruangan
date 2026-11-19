
@extends('layouts.app')

@section('title', 'Jadwal Perkuliahan')

@section('content')

<div class="card" style="padding: 30px;">
    <h1 style="color: #173b67;">Jadwal Perkuliahan</h1>

    <p style="color: #666;">
        Informasi penggunaan ruangan berdasarkan hari,
        mata kuliah, kelas, dan waktu perkuliahan.
    </p>

    <br>

    <a href="/rekomendasi" class="btn">
        Cari Rekomendasi Ruangan
    </a>
</div>

<div class="card">
    <h2 style="color: #173b67;">Daftar Jadwal Penggunaan Ruangan</h2>

    <p style="color: #666; margin-bottom: 18px;">
        Terdapat 10 data jadwal perkuliahan dalam sistem.
    </p>

    <div style="overflow-x: auto;">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Mata Kuliah</th>
                    <th>Kelas</th>
                    <th>ID Ruangan</th>
                    <th>Hari</th>
                    <th>Waktu</th>
                </tr>
            </thead>

            <tbody>
                @foreach (\App\Data\JadwalData::semuaJadwal() as $j)
                    <tr>
                        <td>{{ $j['id'] }}</td>
                        <td><strong>{{ $j['mata_kuliah'] }}</strong></td>
                        <td>{{ $j['kelas'] }}</td>
                        <td>Ruangan {{ $j['ruangan_id'] }}</td>
                        <td>{{ $j['hari'] }}</td>
                        <td>{{ $j['mulai'] }} - {{ $j['selesai'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
