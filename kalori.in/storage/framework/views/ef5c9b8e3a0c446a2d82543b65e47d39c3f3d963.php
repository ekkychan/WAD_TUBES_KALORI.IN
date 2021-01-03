
<?php $__env->startSection('template'); ?>
<div class="text-center">
    <h2>Insert Menu</h2>
</div>
<form action="<?php echo e(route('menu.store')); ?>" method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="form-group">
        <label for="exampleFormControlInput1">Paket</label>
        <select class="form-control" name="paket">
            <option value="Paket A">Paket A</option>
            <option value="Paket B">Paket B</option>
            <option value="Paket C">Paket C</option>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Harga</label>
        <div class="mb-3">
            <div class="input-group is-invalid">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="validatedInputGroupPrepend">Rp</span>
                </div>
                <input type="number" name="harga" class="form-control" aria-describedby="validatedInputGroupPrepend" required>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Image file input</label>
        <div>
            <input type="file" class="form-control-input" id="file" name="img_path">
        </div>
    </div>

    <div class="text-center border-bottom mt-3">
        <h2>Senin</h2>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Lunch</label>
        <textarea class="form-control" name='senin_lunch' id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <div class="form-group mb-2">
        <label for="exampleFormControlInput1">Dinner</label>
        <textarea class="form-control" name='senin_dinner' id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>

    <div class="text-center border-bottom mt-3">
        <h2>Selasa</h2>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Lunch</label>
        <textarea class="form-control" name='selasa_lunch' id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <div class="form-group mb-2">
        <label for="exampleFormControlInput1">Dinner</label>
        <textarea class="form-control" name='selasa_dinner' id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <div class="text-center border-bottom mt-3">
        <h2>Rabu</h2>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Lunch</label>
        <textarea class="form-control" name='rabu_lunch' id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <div class="form-group mb-2">
        <label for="exampleFormControlInput1">Dinner</label>
        <textarea class="form-control" name='rabu_dinner' id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>

    <div class="text-center border-bottom mt-3">
        <h2>Kamis</h2>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Lunch</label>
        <textarea class="form-control" name='kamis_lunch' id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <div class="form-group mb-2">
        <label for="exampleFormControlInput1">Dinner</label>
        <textarea class="form-control" name='kamis_dinner' id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>

    <div class="text-center border-bottom mt-3">
        <h2>Jumat</h2>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Lunch</label>
        <textarea class="form-control" name='jumat_lunch' id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <div class="form-group mb-2">
        <label for="exampleFormControlInput1">Dinner</label>
        <textarea class="form-control" name='jumat_dinner' id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>

    <div class="text-center border-bottom mt-3">
        <h2>Sabtu</h2>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Lunch</label>
        <textarea class="form-control" name='sabtu_lunch' id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <div class="form-group mb-2">
        <label for="exampleFormControlInput1">Dinner</label>
        <textarea class="form-control" name='sabtu_dinner' id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>




    <div class="form-group">
        <button type="submit" name="submit" class="btn btn-dark">Submit</button>
    </div>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\WAD_TUBES_KALORI.IN\kalori.in\resources\views/Admin/AddMenu.blade.php ENDPATH**/ ?>