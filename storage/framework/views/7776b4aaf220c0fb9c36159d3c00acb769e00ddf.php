

<?php $__env->startSection('konten'); ?>
<?php if($isAbsen == 1): ?>
  <div class="container text-center mt-5">
    <div class="card bg-warning text-light">
      <div class="card-body">
        Anda Sudah Melakukan Presensi Hari ini
      </div>
    </div>
  </div>
<?php else: ?>
  <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
    <div class="form">
      <form action="/absen" method="POST">
        <?php echo csrf_field(); ?>
          <div class="form-signin m-auto">
              <h1 class="h3 mb-3 fw-bold text-light text-center mb-3">ABSEN</h1>
              <input type="hidden" class="form-control" value="<?php echo e($item->pegawaiId); ?>" name="id">
              <div class="form-input mb-4">
                  <label class="text-light mb-2"><i class="bi bi-envelope"></i> NIP</label>
                  <input type="text" class="form-control" value="<?php echo e($item->nip); ?>" id="floatingInput" name="nip" readonly>
              </div>
              <div class="form-input">
                <label class="text-light mb-2"> <i class="bi bi-file-lock2"></i> Nama Pegawai</label>
                <input type="text" class="form-control" id="floatingPassword" value="<?php echo e($item->namaPegawai); ?>" name="nama" readonly>
              </div>
              <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Absen</button>
          </div>
        </form>
    </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.login-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Semester 4\Pemograman Web Lanjut\Project Pemweb\Absensi-App\resources\views/presensi.blade.php ENDPATH**/ ?>