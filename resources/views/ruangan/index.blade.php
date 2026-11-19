
@extends('layouts.app')

@section('title', 'Daftar Ruangan')

@section('content')

<div class="card" style="padding: 30px;">
    <h1 style="color: #173b67;">Daftar Ruangan Perkuliahan</h1>

    <p style="color: #666;">
        Berikut adalah informasi 15 ruangan perkuliahan yang tersedia,
        termasuk kapasitas dan fasilitas setiap ruangan.
    </p>

    <br>

    <a href="/rekomendasi" class="btn">
        Cari Rekomendasi Ruangan
    </a>
</div>

<div class="card">
    <h2 style="color: #173b67;">Informasi Ruangan</h2>

    <div style="overflow-x: auto;">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Ruangan</th>
                    <th>Gedung</th>
                    <th>Kapasitas</th>
                    <th>Fasilitas</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($ruangan as $r)
                    <tr>
                        <td>{{ $r['id'] }}</td>
                        <td><strong>{{ $r['nama'] }}</strong></td>
                        <td>{{ $r['gedung'] }}</td>
                        <td>{{ $r['kapasitas'] }} orang</td>
                        <td>{{ implode(', ', $r['fasilitas']) }}</td>
                        <td>
                            <a href="/ruangan/{{ $r['id'] }}" class="btn">
                                Lihat Detail
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
