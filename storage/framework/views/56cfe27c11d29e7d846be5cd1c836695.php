


<?php $__env->startSection('title', 'Detail Ruangan'); ?>

<?php $__env->startSection('content'); ?>

<div class="card" style="padding: 30px;">
    <h1 style="color: #173b67;"><?php echo e($ruangan['nama']); ?></h1>

    <p style="color: #666; margin-bottom: 20px;">
        Informasi lengkap mengenai ruangan perkuliahan.
    </p>

    <div style="display: flex; gap: 20px; flex-wrap: wrap;">
        <div style="background: #eef4fa; padding: 20px; border-radius: 8px; flex: 1; min-width: 150px;">
            <p>Gedung</p>
            <h2 style="color: #173b67;"><?php echo e($ruangan['gedung']); ?></h2>
        </div>

        <div style="background: #eef4fa; padding: 20px; border-radius: 8px; flex: 1; min-width: 150px;">
            <p>Kapasitas</p>
            <h2 style="color: #173b67;"><?php echo e($ruangan['kapasitas']); ?> Orang</h2>
        </div>
    </div>

    <br>

    <h3>Fasilitas Ruangan</h3>

    <ul style="padding-left: 25px; line-height: 2;">
        <?php $__currentLoopData = $ruangan['fasilitas']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($f); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>

<div class="card">
    <h2 style="color: #173b67;">Jadwal Penggunaan Ruangan</h2>

    <?php if(count($jadwal) > 0): ?>
        <div style="overflow-x: auto;">
            <table>
                <tr>
                    <th>Mata Kuliah</th>
                    <th>Kelas</th>
                    <th>Hari</th>
                    <th>Waktu</th>
                </tr>

                <?php $__currentLoopData = $jadwal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($j['mata_kuliah']); ?></td>
                        <td><?php echo e($j['kelas']); ?></td>
                        <td><?php echo e($j['hari']); ?></td>
                        <td><?php echo e($j['mulai']); ?> - <?php echo e($j['selesai']); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
    <?php else: ?>
        <p>Belum ada jadwal penggunaan ruangan.</p>
    <?php endif; ?>
</div>

<a href="/ruangan" class="btn">Kembali ke Daftar Ruangan</a>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\rekomendasi-ruangan\resources\views/ruangan/detail.blade.php ENDPATH**/ ?>