

<?php $__env->startSection('isi'); ?>
<br>
<br>
<br>
<br>
<br>
<div class="container mt-5">
    <div class="row justify-content-center">
        <h2 class="text-center">MyOrder</h2>
        <div class="col-10 mt-5">
            <div class="tabel">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="text-center" scope="col">No</th>
                            <th class="text-center" scope="col">Nama</th>
                            <th class="text-center" scope="col">NoHp</th>
                            <th class="text-center" scope="col">Alamat</th>
                            <th class="text-center" scope="col">Menu</th>
                            <th class="text-center" scope="col">Jumlah</th>
                            <th class="text-center" scope="col">Harga</th>
                            <th class="text-center" scope="col">Special Request</th>
                            <th class="text-center" scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = Auth::user()->orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="text-center"><?php echo e($index+1); ?></td>
                            <td class="text-center"><?php echo e($order->user->name); ?></td>
                            <td class="text-center"><?php echo e($order->nohp); ?></td>
                            <td class="text-center"><?php echo e($order->alamat); ?></td>
                            <td class="text-center"><?php echo e($order->menu->paket); ?></td>
                            <td class="text-center"><?php echo e($order->jumlah); ?></td>
                            <?php 
                            $harga = $order->menu->harga*$order->jumlah;
                            ?>
                            <td class="text-center">Rp. <?php echo e(number_format($harga,0,",",".")); ?></td>
                            <td class="text-center"><?php echo e($order->request); ?></td>
                            <td class="text-center"><?php echo e($order->status); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app3', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\WAD_TUBES_KALORI.IN\kalori.in\resources\views/Member/myorder.blade.php ENDPATH**/ ?>