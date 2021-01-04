

<?php $__env->startSection('isi'); ?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="container mt-5">
    <div class="row justify-content-center">
        <h2 class="text-center">Cart</h2>
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
                            <th class="text-center" scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $total=0;
                        ?>
                        <?php $__currentLoopData = Auth::user()->carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="text-center"><?php echo e($index+1); ?></td>
                            <td class="text-center"><?php echo e($cart->user->name); ?></td>
                            <td class="text-center"><?php echo e($cart->nohp); ?></td>
                            <td class="text-center"><?php echo e($cart->alamat); ?></td>
                            <td class="text-center"><?php echo e($cart->menu->paket); ?></td>
                            <td class="text-center"><?php echo e($cart->jumlah); ?></td>
                            <?php
                            $harga = $cart->menu->harga*$cart->jumlah;
                            $total = $total+$harga;
                            ?>
                            <td class="text-center">Rp. <?php echo e(number_format($harga,0,",",".")); ?></td>
                            <td class="text-center"><?php echo e($cart->request); ?></td>
                            <td class="text-center">
                                <form action="/deletecart/<?php echo e($cart->id); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('delete'); ?>
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="text-center" colspan="7"><b> Total Pesanan </b></td>
                            <td class="text-center">Rp. <?php echo e(number_format($total,0,",",".")); ?></td>
                            <td class="text-center">
                                <!-- <form action="/order" method="post">
                                    <?php echo csrf_field(); ?> -->
                                    <button type="button" class="btn btn-success "data-bs-toggle="modal" data-bs-target="#modal1">Bayar</button>
                                <!-- </form> -->
                            </td>
                        </tr>

                    </tbody>
                    <div class="modal" tabindex="-1" id="modal1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Pembayaran</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Total Pemesanan = Rp. <?php echo e(number_format($total,0,",",".")); ?></p>
                                </div>
                                <div class="modal-footer">
                                    <form action="/order" method="post">
                                        <?php echo csrf_field(); ?>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success " data-toggle="modal"
                                            data-target="#modal1">Bayar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app3', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\WAD_TUBES_KALORI.IN\kalori.in\resources\views/Member/cart.blade.php ENDPATH**/ ?>