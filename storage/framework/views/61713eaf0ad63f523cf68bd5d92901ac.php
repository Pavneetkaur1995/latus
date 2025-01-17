<!DOCTYPE html>
<html>

<head>
  <title><?php echo $__env->yieldContent('title'); ?></title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  <link href="<?php echo e(asset('css/styles.css')); ?>" rel="stylesheet" type="text/css" >
  <?php echo $__env->yieldContent('styles'); ?>
</head>

<body>
    <?php echo $__env->yieldContent('content'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <!-- Toast Message script starts -->
    <script type="text/javascript" src="<?php echo e(asset('js/scripts.js')); ?>"></script>
    <script>
      //
      <?php if(Session::has('success-response')): ?>
          toastr.success("<?php echo e(session('success-response')); ?>");
      <?php endif; ?>

      <?php if(Session::has('error-response')): ?>
          toastr.error("<?php echo e(session('error-response')); ?>");
      <?php endif; ?>

      <?php if(Session::has('info-response')): ?>
          toastr.info("<?php echo e(session('info')); ?>");
      <?php endif; ?>
    </script>
    <!-- Toast Message Script Ends -->
     <?php echo $__env->yieldContent('scripts'); ?>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\latus\resources\views/layouts/app.blade.php ENDPATH**/ ?>