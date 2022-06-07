

<?php $__env->startSection('konten'); ?>
<div class="form">
  <form method="POST" action="/login">
    <?php echo csrf_field(); ?>
      <div class="form-signin m-auto">
          <h1 class="h3 mb-3 fw-bold text-light text-center mb-3">LOGIN</h1>
  
          <div class="form-input mb-4">
              <label class="text-light mb-2"><i class="bi bi-envelope"></i> Email</label>
              <input type="text" class="form-control" id="floatingInput" name="email" placeholder="Enter Email">
          </div>
          <div class="form-input">
              <label class="text-light mb-2"> <i class="bi bi-file-lock2"></i> Password</label>
            <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Enter Password">
          </div>
      
          <div class="checkbox mb-3 text-light">
            <label>
              <input type="checkbox" value="remember-me"> Keep in Sign in
            </label>
          </div>
          <button class="w-100 btn btn-lg btn-primary">Sign In</button>
      </div>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.login-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Semester 4\Pemograman Web Lanjut\Project Pemweb\Absensi-App\resources\views/Login.blade.php ENDPATH**/ ?>