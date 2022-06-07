

<?php $__env->startSection('konten'); ?>
<div class="container mt-3">
    <a href="/tambah-pegawai" class="btn btn-primary mb-3">Tambahkan Pegawai</a>
    <table class="table-light" style="width: 100%">
        <thead class="table-dark">
          <tr>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Level</th>
          </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($item->name); ?></td>
                    <td><?php echo e($item->email); ?></td>
                    <td><?php echo e($item->level); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.admin-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Semester 4\Pemograman Web Lanjut\Project Pemweb\Absensi-App\resources\views/admin/user.blade.php ENDPATH**/ ?>