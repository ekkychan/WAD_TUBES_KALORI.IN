
<?php $__env->startSection('template'); ?>
<form action="<?php echo e(route('user.update',$user->id)); ?>" method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo method_field('patch'); ?>
    <div class="form-group">
        <label for="exampleFormControlInput1">Nama</label>
        <input type="text" class="form-control" id="file" name="name" value="<?php echo e($user->name); ?>">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Email</label>
    <input type="text" class="form-control" id="file" name="email" value="<?php echo e($user->email); ?>" >
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Role</label>
        <select name="role_id" class="form-control">
            <option value="1" <?php echo e($user->role_id == 1 ? 'checked':''); ?>>Admin</option>
            <option value="2" <?php echo e($user->role_id == 2 ? 'checked':''); ?> >User</option>
        </select>
    </div>
    <div class="form-group">
        <button type="submit" name="submit" class="btn btn-dark">Submit</button>
    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\WAD_TUBES_KALORI.IN\kalori.in\resources\views/Admin/EditUser.blade.php ENDPATH**/ ?>