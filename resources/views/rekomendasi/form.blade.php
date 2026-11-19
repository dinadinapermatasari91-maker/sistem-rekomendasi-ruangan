
@extends('layouts.app')

@section('title', 'Form Rekomendasi')

@section('content')

<div class="card" style="padding: 30px;">
    <h1 style="color: #173b67;">Form Kebutuhan Ruangan</h1>

    <p style="color: #666;">
        Masukkan kebutuhan perkuliahan untuk mendapatkan
        rekomendasi ruangan yang paling sesuai.
    </p>
</div>

<div class="card" style="padding: 30px;">
    <form action="/hasil-rekomendasi" method="GET">

        <label><strong>Jumlah Mahasiswa</strong></label>
        <br><br>
        <input type="number"
               name="jumlah_mahasiswa"
               value="30"
               min="1"
               required
               style="width: 100%; padding: 12px;">

        <br><br>

        <label><strong>Hari Perkuliahan</strong></label>
        <br><br>
        <select name="hari" style="width: 100%; padding: 12px;">
            <option>Senin</option>
            <option>Selasa</option>
            <option>Rabu</option>
            <option>Kamis</option>
            <option>Jumat</option>
        </select>

        <br><br>

        <label><strong>Waktu Mulai</strong></label>
        <br><br>
        <input type="time" name="mulai" value="08:00" required
               style="padding: 10px;">

        <br><br>

        <label><strong>Waktu Selesai</strong></label>
        <br><br>
        <input type="time" name="selesai" value="10:00" required
               style="padding: 10px;">

        <br><br>

        <label><strong>Fasilitas yang Dibutuhkan</strong></label>
        <p style="color: #666; margin: 10px 0;">
            Pilih fasilitas yang diperlukan untuk perkuliahan.
        </p>

        <div style="background: #f4f6f9; padding: 18px; border-radius: 8px; line-height: 2.2;">
            <label><input type="checkbox" name="fasilitas[]" value="Proyektor" checked> Proyektor</label><br>
            <label><input type="checkbox" name="fasilitas[]" value="AC" checked> AC</label><br>
            <label><input type="checkbox" name="fasilitas[]" value="Komputer"> Komputer</label><br>
            <label><input type="checkbox" name="fasilitas[]" value="Papan Tulis"> Papan Tulis</label><br>
            <label><input type="checkbox" name="fasilitas[]" value="Speaker"> Speaker</label>
        </div>

        <br><br>

        <button type="submit" style="padding: 13px 22px;">
            Cari Rekomendasi Ruangan
        </button>

    </form>
</div>

@endsection
