
@extends('layouts.app')

@section('title', 'Hasil Rekomendasi')

@section('content')

<div class="card" style="padding: 30px;">
    <h1 style="color: #173b67;">Hasil Rekomendasi Ruangan</h1>
    <p style="color: #666;">Berikut hasil analisis berdasarkan kebutuhan perkuliahan.</p>

    <div style="background: #eef4fa; padding: 20px; border-radius: 8px; margin-top: 20px; line-height: 2;">
        <p><strong>Jumlah Mahasiswa:</strong> {{ $jumlahMahasiswa }} orang</p>
        <p><strong>Hari:</strong> {{ $hari }}</p>
        <p><strong>Waktu:</strong> {{ $mulai }} - {{ $selesai }}</p>
        <p><strong>Fasilitas:</strong> {{ implode(', ', $fasilitas) }}</p>
    </div>

    <br>
    <h2 style="color: #173b67;">
        {{ $totalLayak }} Ruangan Memenuhi Syarat
    </h2>
</div>

@if ($totalLayak > 0)

    <div class="card">
        <h2 style="color: #173b67;">Ruangan yang Direkomendasikan</h2>

        @foreach ($hasil as $item)
            @if ($item['layak'])
                <div style="border: 1px solid #cbd8e6; border-left: 5px solid #2874a6; padding: 22px; border-radius: 8px; margin-bottom: 18px;">

                    <h2 style="color: #173b67;">
                        {{ $item['ruangan']['nama'] }}
                    </h2>

                    <p>Gedung: {{ $item['ruangan']['gedung'] }}</p>
                    <p>Kapasitas: {{ $item['ruangan']['kapasitas'] }} orang</p>
                    <p>Selisih kapasitas: {{ $item['selisih'] }} orang</p>

                    <p style="color: green; font-weight: bold; margin-top: 10px;">
                        Ruangan Layak Digunakan
                    </p>

                    <p><strong>Alasan Rekomendasi:</strong></p>
                    <ul style="padding-left: 22px; line-height: 1.8;">
                        @foreach ($item['alasan'] as $alasan)
                            <li>{{ $alasan }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        @endforeach
    </div>

@else

    <div class="card" style="border-left: 5px solid #c0392b;">
        <h2 style="color: #c0392b;">Tidak Ada Ruangan yang Sesuai</h2>
        <p>
            Maaf, tidak ditemukan ruangan yang memenuhi seluruh persyaratan.
            Silakan ubah jumlah mahasiswa, jadwal, atau fasilitas yang dibutuhkan.
        </p>
    </div>

@endif

<div class="card">
    <h2 style="color: #173b67;">Pemeriksaan Seluruh Ruangan</h2>

    <div style="overflow-x: auto;">
        <table>
            <thead>
                <tr>
                    <th>Ruangan</th>
                    <th>Status</th>
                    <th>Selisih Kapasitas</th>
                    <th>Alasan</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($hasil as $item)
                    <tr>
                        <td><strong>{{ $item['ruangan']['nama'] }}</strong></td>

                        <td>
                            @if ($item['layak'])
                                <span style="color: green; font-weight: bold;">Layak</span>
                            @else
                                <span style="color: red; font-weight: bold;">Tidak Layak</span>
                            @endif
                        </td>

                        <td>{{ $item['selisih'] }} orang</td>

                        <td>
                            @foreach ($item['alasan'] as $alasan)
                                - {{ $alasan }}<br>
                            @endforeach
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<a href="/rekomendasi" class="btn">Cari Rekomendasi Lagi</a>
<a href="/ruangan" class="btn">Lihat Daftar Ruangan</a>

@endsection
