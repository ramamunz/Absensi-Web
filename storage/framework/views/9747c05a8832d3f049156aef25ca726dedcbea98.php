<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey  on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Profil Pegawai</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- Bootsrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <!-- My CSS -->
    <link rel="stylesheet" href="css/profil.css">
</head>
<body>
  <!-- Navbar -->
  <?php echo $__env->make('components.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- End Navbar -->
    <?php echo $__env->yieldContent('konten'); ?>
<script type="text/javascript">

</script>
</body>
</html><?php /**PATH E:\Semester 4\Pemograman Web Lanjut\Project Pemweb\Absensi-App\resources\views/layout/profil-layout.blade.php ENDPATH**/ ?>