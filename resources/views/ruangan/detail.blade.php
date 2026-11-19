
@extends('layouts.app')

@section('title', 'Detail Ruangan')

@section('content')

<div class="card" style="padding: 30px;">
    <h1 style="color: #173b67;">{{ $ruangan['nama'] }}</h1>

    <p style="color: #666; margin-bottom: 20px;">
        Informasi lengkap mengenai ruangan perkuliahan.
    </p>

    <div style="display: flex; gap: 20px; flex-wrap: wrap;">
        <div style="background: #eef4fa; padding: 20px; border-radius: 8px; flex: 1; min-width: 150px;">
            <p>Gedung</p>
            <h2 style="color: #173b67;">{{ $ruangan['gedung'] }}</h2>
        </div>

        <div style="background: #eef4fa; padding: 20px; border-radius: 8px; flex: 1; min-width: 150px;">
            <p>Kapasitas</p>
            <h2 style="color: #173b67;">{{ $ruangan['kapasitas'] }} Orang</h2>
        </div>
    </div>

    <br>

    <h3>Fasilitas Ruangan</h3>

    <ul style="padding-left: 25px; line-height: 2;">
        @foreach ($ruangan['fasilitas'] as $f)
            <li>{{ $f }}</li>
        @endforeach
    </ul>
</div>

<div class="card">
    <h2 style="color: #173b67;">Jadwal Penggunaan Ruangan</h2>

    @if (count($jadwal) > 0)
        <div style="overflow-x: auto;">
            <table>
                <tr>
                    <th>Mata Kuliah</th>
                    <th>Kelas</th>
                    <th>Hari</th>
                    <th>Waktu</th>
                </tr>

                @foreach ($jadwal as $j)
                    <tr>
                        <td>{{ $j['mata_kuliah'] }}</td>
                        <td>{{ $j['kelas'] }}</td>
                        <td>{{ $j['hari'] }}</td>
                        <td>{{ $j['mulai'] }} - {{ $j['selesai'] }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    @else
        <p>Belum ada jadwal penggunaan ruangan.</p>
    @endif
</div>

<a href="/ruangan" class="btn">Kembali ke Daftar Ruangan</a>

@endsection
