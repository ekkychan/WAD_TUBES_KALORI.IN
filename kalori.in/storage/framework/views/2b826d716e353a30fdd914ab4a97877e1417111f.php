<?php $__env->startSection('isi'); ?>

<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
        <li data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></li>
        <li data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
            <img src="images/gambar2.jpg" class="d-block w-100" alt="" style="height: 654px; filter: brightness(50%)">
            <div class="carousel-caption d-none d-md-block">
                <h2 style="color:white"> <b>Welcome to Kalori.in</b></h2>
                <p><a class="btn" type="button" href="#menu" style="background-color:#d65106; color:white">Menu</a>
                </p>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <img src="images/gambar3.jpg" class="d-block w-100" alt="..."
                style="height: 654px; filter: brightness(50%)">
            <div class="carousel-caption d-none d-md-block">
                <h2 style="color:white"> <b>Diet & Healthy Catering </b></h2>
                <p><a class="btn" type="button" href="#menu" style="background-color:#d65106; color:white">Menu</a>
                </p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/gambar4.jpg" class="d-block w-100" alt="..."
                style="height: 654px; filter: brightness(50%)">
            <div class="carousel-caption d-none d-md-block">
                <h2 style="color:white"> <b>"Perfectly light in every bite" </b></h2>
                <p><a class="btn" type="button" href="#menu" style="background-color:#d65106; color:white">Menu</a>
                </p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleDark" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleDark" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </a>
</div>

<div class="about-section-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                <div class="inner-column">
                    <h1><span>Kalori.in</span></h1>
                    <h4 style="color:white">About us</h4>
                    <p style="color:white">Perusahaan Catering sehat no.1 di indonesia. Kalori.in menyediakan
                        berbagai makanan
                        yang lezat seperti fast food tetapi dengan bahan-bahan yang sudah dipastikan rendah kalori.
                    </p>
                    <p style="color:white">Website Kalori.in bukan hanya menyediakan layanan pesan makanan namun
                        juga dilengkapi dengan fitur yang sangat berguna bagi customer kami.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <img src="images/about.jpg" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<br>
<br>
<section id="why-us" class="why-us">
    <div class="container">

        <div class="section-title">
            <h1 align="center" style="color:white;">Our Website <span>Features</span></h1>
            <p align="center" style="color:white;">Healthy features in our website that you can used</p>
        </div>

        <div class="row">

            <div class="col-lg-4">
                <div class="box">

                    <h4 align="center">BMI Calculator</h4>
                    <p>Helps you to calculate your weight, wether it is normal, underweight or even obese</p>
                </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0">
                <div class="box">

                    <h4 align="center">Activity</h4>
                    <p>Helps you to calculate the number of calories in each of your activities</p>
                </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0">
                <div class="box">

                    <h4 align="center"> Nutrition</h4>
                    <p>Helps you tell the nutrition you need every day</p>
                </div>
            </div>
        </div>

    </div>
</section><!-- End Whu Us Section -->
<br>
<br>
<br>
<section id="menu" class="menu">
    <div class="container">
        <center>
            <h1 style="color:white;">Our Menu</h1>
        </center>
        <center>
            <h4 style="color:green"><b>BATCH 1</b></h4>
        </center>
        <center>
            <h6 style="color:red"><b>3 JANUARI - 4 FEBRUARY 2021</b></h6>
        </center>
        <br>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col">
                    <div class="card text-center">
                        <img src="images/menu/<?php echo e($menu->img_path); ?>" class="card-img-top" height="400px" alt="...">
                        <h3><b><?php echo e($menu->paket); ?></b></h3>
                        <p><b>Rp. <?php echo e(number_format($menu->harga,0,",",".")); ?></b></p>
                        <div class="card-body">
                            <!-- Button trigger modal -->
                            <button type="button" class="button" data-bs-toggle="modal" data-bs-target="#menu<?php echo e($index); ?>">
                                Detail
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="menu<?php echo e($index); ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                        <div class="modal-header">
                                            <h4 class="modal-title col-md-12 col-sm-12 " id="exampleModalLabel"><?php echo e($menu->paket); ?></h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="card-group">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title buttonMenu">SENIN</h5>
                                                        <p class="card-text"><u>LUNCH</u></p>
                                                        <p><?php echo nl2br($menu->senin_lunch); ?></p>
                                                        <p class="card-text"><u>DINNER</u></p>
                                                        <p><?php echo nl2br($menu->senin_dinner); ?></p>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title buttonMenu">SELASA</h5>
                                                        <p class="card-text"><u>LUNCH</u></p>
                                                        <p><?php echo nl2br($menu->selasa_lunch); ?></p>
                                                        <p class="card-text"><u>DINNER</u></p>
                                                        <p><?php echo nl2br($menu->selasa_dinner); ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-group">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title buttonMenu">RABU</h5>
                                                        <p class="card-text"><u>LUNCH</u></p>
                                                        <p><?php echo nl2br($menu->rabu_lunch); ?></p>
                                                        <p class="card-text"><u>DINNER</u></p>
                                                        <p><?php echo nl2br($menu->rabu_dinner); ?></p>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title buttonMenu">KAMIS</h5>
                                                        <p class="card-text"><u>LUNCH</u></p>
                                                        <p><?php echo nl2br($menu->kamis_lunch); ?></p>
                                                        <p class="card-text"><u>DINNER</u></p>
                                                        <p><?php echo nl2br($menu->kamis_dinner); ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-group">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title buttonMenu">JUM'AT</h5>
                                                        <p class="card-text"><u>LUNCH</u></p>
                                                        <p><?php echo nl2br($menu->jumat_lunch); ?></p>
                                                        <p class="card-text"><u>DINNER</u></p>
                                                        <p><?php echo nl2br($menu->jumat_dinner); ?></p>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title buttonMenu">SABTU</h5>
                                                        <p class="card-text"><u>LUNCH</u></p>
                                                        <p><?php echo nl2br($menu->sabtu_lunch); ?></p>
                                                        <p class="card-text"><u>DINNER</u></p>
                                                        <p><?php echo nl2br($menu->sabtu_dinner); ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="">
                                            <a href="/order/<?php echo e($menu->id); ?>" class="button">Order
                                                Now </a>
                                        </div>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <br>
        <hr>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app3', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\WAD_TUBES_KALORI.IN\kalori.in\resources\views/Member/home.blade.php ENDPATH**/ ?>