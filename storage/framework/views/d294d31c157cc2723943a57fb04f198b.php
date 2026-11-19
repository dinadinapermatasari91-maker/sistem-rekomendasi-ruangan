

<?php $__env->startSection('title', 'Hasil Rekomendasi'); ?>

<?php $__env->startSection('content'); ?>

<div class="card">
    <h1>Hasil Rekomendasi Ruangan</h1>

    <p>Jumlah mahasiswa: <?php echo e($jumlahMahasiswa); ?> orang</p>
    <p>Hari: <?php echo e($hari); ?></p>
    <p>Waktu: <?php echo e($mulai); ?> - <?php echo e($selesai); ?></p>
    <p>Fasilitas: <?php echo e(implode(', ', $fasilitas)); ?></p>

    <h3>Total ruangan yang memenuhi syarat: <?php echo e($totalLayak); ?></h3>
</div>

<?php if($totalLayak > 0): ?>
    <div class="card">
        <h2>Daftar Ruangan yang Direkomendasikan</h2>

        <?php $__currentLoopData = $hasil; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($item['layak']): ?>
                <div class="card">
                    <h3><?php echo e($item['ruangan']['nama']); ?></h3>
                    <p>Gedung: <?php echo e($item['ruangan']['gedung']); ?></p>
                    <p>Kapasitas: <?php echo e($item['ruangan']['kapasitas']); ?> orang</p>
                    <p>Selisih kapasitas: <?php echo e($item['selisih']); ?> orang</p>

                    <p><strong>Alasan:</strong></p>
                    <ul>
                        <?php $__currentLoopData = $item['alasan']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alasan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($alasan); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php else: ?>
    <div class="card">
        <h2>Tidak Ada Ruangan yang Sesuai</h2>
        <p>
            Maaf, tidak ditemukan ruangan yang memenuhi
            seluruh persyaratan. Silakan ubah jumlah mahasiswa,
            jadwal, atau fasilitas yang dibutuhkan.
        </p>
    </div>
<?php endif; ?>

<div class="card">
    <h2>Hasil Pemeriksaan Seluruh Ruangan</h2>

    <table>
        <tr>
            <th>Ruangan</th>
            <th>Status</th>
            <th>Alasan</th>
        </tr>

        <?php $__currentLoopData = $hasil; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($item['ruangan']['nama']); ?></td>

                <td>
                    <?php if($item['layak']): ?>
                        <strong style="color: green;">Layak</strong>
                    <?php else: ?>
                        <strong style="color: red;">Tidak Layak</strong>
                    <?php endif; ?>
                </td>

                <td>
                    <?php $__currentLoopData = $item['alasan']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alasan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($alasan); ?><br>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</div>

<a href="/ruangan" class="btn">Lihat Daftar Ruangan</a>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\rekomendasi-ruangan\resources\views/rekomendasi/index.blade.php ENDPATH**/ ?>