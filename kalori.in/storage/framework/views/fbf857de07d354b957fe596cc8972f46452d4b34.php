<?php $__env->startSection('content'); ?>
  <div class="jumbotron jumbotronk">
  <div class="container">
    <p class="display-5 kata">WELCOME TO KALORI.IN</p>
    <br><br><br>
    <br><br><br>
    <br><br><br><br>
    <br><br><br><br><br>
    <a role="button" class="buttonSign" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
    <br><br>
    <a role="button" class="buttonSign" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
    <br><br><br>
  </div>
</div>
<div class="jumbotron">
    <img src="images/Kalori.in.png">
</div>
<div class="jumbotron">
    <img src="images/landinglagi.jpg">
</div>
    <hr>
<!-- Footer -->
<!-- Footer -->
<footer class="page-footer font-small blue">
<center><div class="link-icons">
  <a href="">
  <a><i class="fa fa-whatsapp" style="font-size:25px"></i></a>
  </a>
  <a href="">
  <a><i class="fa fa-envelope-o" style="font-size:25px"></i></a>
  </a>
  <a href="">
  <a><i class="fa fa-instagram" aria-hidden="true" style="font-size:25px"></i></a>
  </a>
  </div>
  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 - Kalori.In All Rights Reserved
  </div>
  </center>
  <!-- Copyright -->
</footer>
<!-- Footer -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\WAD_TUBES_KALORI.IN\kalori.in\resources\views/welcome.blade.php ENDPATH**/ ?>