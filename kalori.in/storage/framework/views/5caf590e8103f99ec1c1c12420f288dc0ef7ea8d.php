
<?php $__env->startSection('template'); ?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <h2 class="text-center">List User</h2>
        <div class="col-10 mt-5">
            <div class="tabel">
                <table class="table table-striped">

                    <thead>
                        <tr>
                            <th class="text-center" scope="col">No</th>
                            <th class="text-center" scope="col">Nama</th>
                            <th class="text-center" scope="col">Email</th>
                            <th class="text-center" scope="col">Role</th>
                            <th class="text-center" scope="col">Aksi</th>
                        </tr>

                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="text-center">
                            <td><?php echo e($index+1); ?></td>
                            <td><?php echo e($user->name); ?></td>
                            <td><?php echo e($user->email); ?></td>
                            <td><?php echo e($user->role->role); ?></td>
                            <td>
                                <form action="/deleteuser/<?php echo e($user->id); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('delete'); ?>
                                    <a href="/EditUser/<?php echo e($user->id); ?>" class="btn btn-primary">Edit</a>
                                    <button href="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            </div>
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <h2 class="text-center">List Menu</h2>
        <div class="col-10 mt-5">
            <div class="tabel">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="text-center" scope="col">No</th>
                            <th class="text-center" scope="col">Paket</th>
                            <th class="text-center" scope="col">Harga</th>
                            <th class="text-center" scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="text-center">
                            <td><?php echo e($index+1); ?></td>
                            <td><?php echo e($menu->paket); ?></td>
                            <td><?php echo e($menu->harga); ?></td>
                            <td>
                                <form action="/deletemenu/<?php echo e($menu->id); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('delete'); ?>
                                    <a href="/EditMenu/<?php echo e($menu->id); ?>" class="btn btn-primary">Edit</a>
                                    <button href="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <h2 class="text-center">List Info/Article</h2>
        <div class="col-10 mt-5">
            <div class="tabel">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="text-center" scope="col">No</th>
                            <th class="text-center" scope="col">Judul</th>
                            <th class="text-center" scope="col">Tanggal Post</th>
                            <th class="text-center" scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $infos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="text-center">
                            <td><?php echo e($index+1); ?></td>
                            <td><?php echo e($info->judul); ?></td>
                            <td><?php echo e(date('j F',strtotime($info->created_at))); ?></td>
                            <td>
                                <form action="/deleteinfo/<?php echo e($info->id); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('delete'); ?>
                                    <a href="/EditInfo/<?php echo e($info->id); ?>" class="btn btn-primary">Edit</a>
                                    <button href="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            </div>
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <h2 class="text-center">List Order</h2>
        <div class="col-10 mt-5">
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
                        <th class="text-center" scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                        <td>
                            <form action="/editOrder/<?php echo e($order->id); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <button href="submit" class="btn btn-success">Terima</button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\WAD_TUBES_KALORI.IN\kalori.in\resources\views/Admin/home.blade.php ENDPATH**/ ?>