
@extends('layouts.app')

@section('title', 'Tentang Sistem')

@section('content')

<div class="card" style="padding: 30px;">
    <h1 style="color: #173b67;">Tentang Sistem</h1>

    <p style="color: #666; line-height: 1.8;">
        Sistem Rekomendasi Ruangan Perkuliahan merupakan
        aplikasi berbasis web yang dirancang untuk membantu
        menentukan ruangan perkuliahan sesuai kebutuhan.
        Sistem ini melakukan pemeriksaan berdasarkan kapasitas,
        fasilitas, serta jadwal penggunaan ruangan.
    </p>
</div>

<div class="card">
    <h2 style="color: #173b67;">Tujuan Sistem</h2>

    <p style="line-height: 1.8;">
        Membantu proses pemilihan ruangan perkuliahan agar
        lebih mudah, cepat, dan tepat sesuai kebutuhan
        mahasiswa serta kegiatan pembelajaran.
    </p>
</div>

<div class="card">
    <h2 style="color: #173b67;">Fungsi Sistem</h2>

    <ul style="padding-left: 25px; line-height: 2;">
        <li>Menampilkan daftar ruangan perkuliahan.</li>
        <li>Menampilkan kapasitas dan fasilitas ruangan.</li>
        <li>Memeriksa ketersediaan ruangan berdasarkan jadwal.</li>
        <li>Memberikan rekomendasi ruangan yang sesuai.</li>
        <li>Menghitung selisih kapasitas ruangan dengan jumlah mahasiswa.</li>
        <li>Menampilkan alasan ruangan layak atau tidak layak digunakan.</li>
    </ul>
</div>

<div class="card">
    <h2 style="color: #173b67;">Teknologi yang Digunakan</h2>

    <ul style="padding-left: 25px; line-height: 2;">
        <li>PHP</li>
        <li>Laravel</li>
        <li>HTML dan CSS</li>
        <li>Blade Template</li>
    </ul>
</div>

@endsection
