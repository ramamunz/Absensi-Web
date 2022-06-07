

<?php $__env->startSection('konten'); ?>
  <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="container">
    <div class="main-body">
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?php echo e($item->namaPegawai); ?></h4>
                      <p class="text-secondary mb-1"><?php echo e($item->nama); ?></p>
                      <p class="text-muted font-size-sm"><?php echo e($item->alamat); ?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nama</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo e($item->namaPegawai); ?>

                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo e($item->email); ?>

                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">No Telp</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo e($item->noTelp); ?>

                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Alamat</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo e($item->alamat); ?>

                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Jenis Kelamin</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo e($item->jenisKelamin); ?>

                    </div>
                  </div>
                </div>
              </div>
  
            </div>
          </div>
  
        </div>
    </div>
  
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.profil-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Semester 4\Pemograman Web Lanjut\Project Pemweb\Absensi-App\resources\views/Profil.blade.php ENDPATH**/ ?>