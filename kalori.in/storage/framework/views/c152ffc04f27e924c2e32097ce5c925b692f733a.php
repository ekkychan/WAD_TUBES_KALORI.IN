

<?php $__env->startSection('isi'); ?>

<div>
    <br>
    <br>
    <br>
    <br>
</div>
<div class="container mt-5">
    <div class="card-group">
        <div class="card">
            <div class="card-body text-center">
                <img src="<?php echo e(asset('images/menu/'.$menu->img_path)); ?>" class="card-img-top" height="400px" alt="...">
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center">Order Your Food</h5>
                <br>
                <form action="<?php echo e(route('order.store',$menu->id)); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                    <div class="form-group row">
                        <label for="inputNomorHP" class="col-sm-4 col-form-label">Phone Number</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="nohp">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="FormControlTextarea1" class="col-sm-4 col-form-label">Address</label>
                        <div class="col-sm-7">
                            <textarea class="form-control" name="alamat"></textarea>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="inputjumlah" class="col-sm-4 col-form-label">Jumlah Pesanan</label>
                        <div class="col-sm-7">
                            <input type="number" class="form-control" name="jumlah">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="inputjumlah" class="col-sm-4 col-form-label">Special Request</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="custom" value="tidak ada">
                        </div>
                    </div>
                    <br>
                    <div class="text-center">
                        <button class="btn btn-primary btn-lg btn-block" name="order" type="submit">Order</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app3', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\WAD_TUBES_KALORI.IN\kalori.in\resources\views/Member/order.blade.php ENDPATH**/ ?>