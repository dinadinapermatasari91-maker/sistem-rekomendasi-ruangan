\# SISTEM REKOMENDASI RUANGAN PERKULIAHAN



\## Identitas Mahasiswa

\- \*\*Nama:\*\* Dina Permatasari

\- \*\*NIM:\*\* C2483207009

\- \*\*Program Studi:\*\* S1 Pendidikan Teknologi Informasi

\- \*\*Universitas:\*\* Universitas Muhammadiyah Tasikmalaya



\## Tema Proyek

Sistem Rekomendasi Ruangan Perkuliahan.



\## Deskripsi

Sistem Rekomendasi Ruangan Perkuliahan merupakan aplikasi berbasis web yang dibuat menggunakan Laravel. Aplikasi ini membantu pengguna menentukan ruangan perkuliahan yang sesuai berdasarkan jumlah mahasiswa, hari, waktu perkuliahan, dan fasilitas yang dibutuhkan.



\## Fitur Sistem

1\. Dashboard yang menampilkan informasi jumlah ruangan dan jadwal.

2\. Daftar 15 ruangan perkuliahan.

3\. Detail ruangan beserta fasilitas dan jadwal.

4\. Formulir pencarian rekomendasi ruangan.

5\. Analisis kapasitas, fasilitas, dan bentrok jadwal.

6\. Hasil rekomendasi berdasarkan kebutuhan perkuliahan.

7\. Informasi mengenai sistem.



\## Struktur MVC

\- \*\*Model/Data:\*\* Data ruangan dan jadwal disimpan menggunakan array PHP.

\- \*\*Controller:\*\* DashboardController, RuanganController, dan RekomendasiController.

\- \*\*View:\*\* Halaman dibuat menggunakan Blade Template Laravel.



\## Routing

Beberapa route yang digunakan:

\- `/` – Dashboard

\- `/ruangan` – Daftar ruangan

\- `/ruangan/{id}` – Detail ruangan

\- `/rekomendasi` – Form rekomendasi

\- `/hasil-rekomendasi` – Hasil rekomendasi

\- `/jadwal` – Daftar jadwal

\- `/tentang` – Tentang sistem



\## Screenshot Tampilan



\### 1. Dashboard

!\[Dashboard](screenshots/dashboard.png)



\### 2. Daftar Ruangan

!\[Daftar Ruangan](screenshots/daftar-ruangan.png)



\### 3. Hasil Rekomendasi

!\[Hasil Rekomendasi](screenshots/hasil-rekomendasi.png)



\## Cara Menjalankan Aplikasi

1\. Pastikan PHP dan Composer sudah terpasang.

2\. Buka folder proyek melalui terminal.

3\. Jalankan perintah:



```bash

composer install

```



4\. Jalankan server Laravel:



```bash

php artisan serve

```



5\. Buka browser dan akses:



```text

http://127.0.0.1:8000

```



\## Teknologi

\- PHP

\- Laravel

\- HTML

\- CSS

\- Blade Template



\## Data Sistem

\- 15 data ruangan.

\- 10 data jadwal perkuliahan.



\## Tujuan

Membantu proses pemilihan ruangan perkuliahan agar lebih mudah, cepat, dan sesuai dengan kebutuhan kegiatan belajar mengajar.

