


<?php $__env->startSection('title', 'Daftar Ruangan'); ?>

<?php $__env->startSection('content'); ?>

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
                <?php $__currentLoopData = $ruangan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($r['id']); ?></td>
                        <td><strong><?php echo e($r['nama']); ?></strong></td>
                        <td><?php echo e($r['gedung']); ?></td>
                        <td><?php echo e($r['kapasitas']); ?> orang</td>
                        <td><?php echo e(implode(', ', $r['fasilitas'])); ?></td>
                        <td>
                            <a href="/ruangan/<?php echo e($r['id']); ?>" class="btn">
                                Lihat Detail
                            </a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\rekomendasi-ruangan\resources\views/ruangan/index.blade.php ENDPATH**/ ?>