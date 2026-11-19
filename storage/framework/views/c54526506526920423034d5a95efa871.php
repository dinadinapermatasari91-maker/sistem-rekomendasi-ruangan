


<?php $__env->startSection('title', 'Jadwal Perkuliahan'); ?>

<?php $__env->startSection('content'); ?>

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
                <?php $__currentLoopData = \App\Data\JadwalData::semuaJadwal(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($j['id']); ?></td>
                        <td><strong><?php echo e($j['mata_kuliah']); ?></strong></td>
                        <td><?php echo e($j['kelas']); ?></td>
                        <td>Ruangan <?php echo e($j['ruangan_id']); ?></td>
                        <td><?php echo e($j['hari']); ?></td>
                        <td><?php echo e($j['mulai']); ?> - <?php echo e($j['selesai']); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\rekomendasi-ruangan\resources\views/jadwal.blade.php ENDPATH**/ ?>