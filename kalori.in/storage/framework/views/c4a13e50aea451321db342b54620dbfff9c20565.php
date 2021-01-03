
<?php $__env->startSection('template'); ?>
<div class="text-center">
    <h2>Insert Information</h2>
</div>
<form action="<?php echo e(route('info.add')); ?>" method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="form-group">
        <label for="exampleFormControlInput1">Judul</label>
        <input type="text" name="judul" class="form-control" aria-describedby="validatedInputGroupPrepend" required>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Image file input</label>
        <div>
            <input type="file" class="form-control-input" id="file" name="img_path">
        </div>
    </div>

    <div class="text-center border-bottom mt-3">
        <h2>Information/Article</h2>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Header</label>
        <textarea class="form-control" name='header' id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <div class="form-group mb-2">
        <label for="exampleFormControlInput1">Isi</label>
        <textarea class="form-control" name='isi' id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <div class="form-group">
        <button type="submit" name="submit" class="btn btn-dark">Submit</button>
    </div>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\WAD_TUBES_KALORI.IN\kalori.in\resources\views/Admin/AddInformation.blade.php ENDPATH**/ ?>