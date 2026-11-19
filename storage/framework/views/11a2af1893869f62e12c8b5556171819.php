

<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>

<div style="background: linear-gradient(120deg, #173b67, #2874a6); color: white; padding: 40px; border-radius: 12px; margin-bottom: 25px;">
    <h1>Selamat Datang!</h1>
    <p style="font-size: 17px; margin-bottom: 20px;">
        Sistem Rekomendasi Ruangan Perkuliahan
    </p>
    <p>
        Temukan ruangan perkuliahan yang sesuai berdasarkan
        kapasitas, fasilitas, dan jadwal penggunaan.
    </p>
    <br>
    <a href="/rekomendasi" class="btn" style="background: white; color: #173b67;">
        Cari Rekomendasi Ruangan
    </a>
</div>

<div style="display: flex; gap: 20px; flex-wrap: wrap;">

    <div class="card" style="flex: 1; min-width: 200px;">
        <h3>Total Ruangan</h3>
        <h1 style="color: #173b67; font-size: 38px;">
            <?php echo e($totalRuangan); ?>

        </h1>
        <p>Ruangan tersedia dalam sistem</p>
    </div>

    <div class="card" style="flex: 1; min-width: 200px;">
        <h3>Total Jadwal</h3>
        <h1 style="color: #2874a6; font-size: 38px;">
            <?php echo e($totalJadwal); ?>

        </h1>
        <p>Data jadwal perkuliahan</p>
    </div>

</div>

<div class="card">
    <h2>Fitur Sistem</h2>
    <ul style="line-height: 2; padding-left: 20px;">
        <li>Melihat daftar dan detail ruangan.</li>
        <li>Memeriksa kapasitas ruangan.</li>
        <li>Memeriksa fasilitas yang tersedia.</li>
        <li>Mengecek bentrok jadwal perkuliahan.</li>
        <li>Memberikan rekomendasi ruangan terbaik.</li>
    </ul>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\rekomendasi-ruangan\resources\views/dashboard.blade.php ENDPATH**/ ?>