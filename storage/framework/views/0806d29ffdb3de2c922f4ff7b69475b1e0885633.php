

<?php $__env->startSection('konten'); ?>
<div class="container my-3">
    <h4 class="text-light">Rekap Absensi Hari Ini</h4>
    <table class="table-light p-2" style="width: 100%">
        <thead class="table-dark">
          <tr>
            <th scope="col">NIP</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Jam Absen</th>
            <th scope="col">Keterangan</th>
          </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $absen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($item->nip); ?></td>
                    <td><?php echo e($item->namaPegawai); ?></td>
                    <td><?php echo e($item->jamAbsen); ?></td>
                    <td><?php echo e($item->keterangan); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.admin-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Semester 4\Pemograman Web Lanjut\Project Pemweb\Absensi-App\resources\views/admin/rekap.blade.php ENDPATH**/ ?>