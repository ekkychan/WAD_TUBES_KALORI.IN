

<?php $__env->startSection('isi'); ?>
<br>
<br>
<br>
<br>
<br>
<div class="container mt-5">
    <div class="container mt-5">
        <form action="<?php echo e(route('profile.update',$user->id)); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('patch'); ?>
            <div class="form-group">
                <label for="exampleFormControlInput1">Nama</label>
                <input type="text" class="form-control" id="file" name="name" value="<?php echo e($user->name); ?>">
            </div>
            <br>
            <div class="form-group">
                <label for="exampleFormControlInput1">Email</label>
                <input type="text" class="form-control" id="file" name="email" value="<?php echo e($user->email); ?>">
            </div>
            <br>
            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-dark">Submit</button>
            </div>
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app3', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\WAD_TUBES_KALORI.IN\kalori.in\resources\views/Member/profile.blade.php ENDPATH**/ ?>