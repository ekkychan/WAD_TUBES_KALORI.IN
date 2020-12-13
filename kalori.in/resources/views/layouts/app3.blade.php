<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Kalori.in</title>
    <style>
    body {
        background-image: url("images/backgroundd.png");

    }

    /*---Navbar---*/
    .top-navbar {
        position: relative;
        z-index: 10;
    }

    .top-navbar .navbar {
        padding: 15px 0px;
        position: fixed;
        width: 100%;
        border-radius: 0px 0px 100px 100px;
        transition: height .3s ease-out, background .3s ease-out, box-shadow .3s ease-out;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
        -webkit-box-shadow: 0 8px 6px -6px rgba(0, 0, 0, 0.4);
        box-shadow: 0 8px 6px -6px rgba(0, 0, 0, 0.4);
        z-index: 100;
    }

    .top-navbar .navbar-light .navbar-nav .nav-link {
        color: #010101;
        font-size: 16px;
        padding: 10px 20px;
        border-radius: 4px;
        text-transform: uppercase;
    }

    .top-navbar .navbar-light .navbar-nav .nav-item .nav-link:hover {
        background: #d65106;
        color: #ffffff;
    }

    .top-navbar .navbar-light .navbar-nav .nav-item.active .nav-link {
        background: #d65106;
        color: #ffffff;
        border-radius: 4px;
    }

    .navbar-expand-lg .navbar-nav .dropdown-menu {
        border: none;
        border-radius: 0px;
        padding: 10px;
        box-shadow: 2px 5px 6px rgba(0, 0, 0, 0.5);
    }

    .navbar-expand-lg .navbar-nav .dropdown-menu a {
        padding: 10px 10px;
        text-transform: uppercase;
    }

    .navbar-expand-lg .navbar-nav .dropdown-menu a.dropdown-item:hover {
        background: #d65106;
        color: #ffffff;
    }

    .navbar-light .navbar-toggler:hover {
        background: #d65106;
    }

    /*---About---*/

    .about-section-box {
        padding: 70px 0px;

        background-size: cover;
    }

    .about-section-box .img-fluid {
        box-shadow: 20px 20px 0px #d65106;
    }

    .inner-column {
        text-align: left;
    }

    .inner-column h1 {
        font-family: 'Rubik', sans-serif;
        font-size: 30px;
        color: #010101;
        font-weight: 500;
    }

    .inner-column h1 span {
        color: #d65106;
    }

    .inner-column h4 {
        font-size: 16px;
        font-weight: 500;
    }

    .inner-column p {
        font-size: 18px;
        color: #222222;
    }

    .inner-column .btn-outline-new-white {
        color: #fff;
    }

    .inner-column .btn-outline-new-white:hover {
        color: #ffffff;
    }


    /*---About---*/
    .why-us .box {
        padding: 50px 30px;
        box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
        transition: all ease-in-out 0.3s;
        border-radius: 0px 100px 0px 100px;
        background: ;
    }

    .why-us .box span {
        display: block;
        font-size: 28px;
        font-weight: 700;
        color: #ffcf88;
    }

    .why-us .box h4 {
        font-size: 24px;
        font-weight: 600;
        padding: 0;
        margin: 20px 0;
        color: #d65106;
    }

    .why-us .box p {
        color: #ffcf88;
        font-size: 15px;
        margin: 0;
        padding: 0;
    }

    .why-us .box:hover {
        background: #d65106;
        padding: 30px 30px 70px 30px;
        box-shadow: 10px 15px 30px rgba(0, 0, 0, 0.18);
    }

    .why-us .box:hover span,
    .why-us .box:hover h4,
    .why-us .box:hover p {
        color: #fff;
    }

    #tales {
        width: 65%;
        height: 355px;
    }

    .button {
        background-color: #d65106;
        border: none;
        border-radius: 10px;
        color: white;
        padding: 10px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 17px;
        margin: 4px 2px;
        cursor: pointer;
    }

    .buttonMenu {
        background-color: #d65106;
        border: none;
        border-radius: 10px;
        color: white;
        padding: 10px 135px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 17px;
        margin: 4px 2px;
    }

    .buttonC {
        background-color: #d65106;
        border: #d65106 1px solid;
        border-radius: 10px;
        color: rgba(115, 178, 163, 1);
        padding: 10px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 17px;
        margin: 4px 2px;
    }




    .footer-area {
        padding-top: 50px;
        padding-bottom: 0px;
    }

    .bg-f {
        background-attachment: scroll;
        background-clip: initial;
        background-origin: initial;
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
    }

    .bg-f::before {
        background: #010101;
        content: "";
        height: 100%;
        left: 0;
        position: absolute;
        top: 0;
        width: 100%;
        z-index: 1;
        opacity: 0.8;
    }

    .footer-area .container {
        position: relative;
        z-index: 1;
    }

    .footer-area h3 {
        color: #ffffff;
        text-transform: uppercase;
        font-size: 18px;
        font-weight: 500;
        border-bottom: 2px solid rgba(207, 166, 113, 0.5);
        margin-bottom: 10px;
    }

    .footer-area p {
        font-size: 15px;
        color: rgba(255, 255, 255, 0.8);
        margin: 0;
        padding-bottom: 10px;
    }

    .arrow-right {
        position: relative;
    }

    .arrow-right::before {
        content: "\f101";
        font-family: 'FontAwesome';
        position: absolute;
        right: 0px;
        top: 0;
        color: #fff;
        font-size: 60px;
        line-height: 60px;
    }


    .footer-area p.lead {
        font-size: 19px;
        color: #ffffff;
        margin-bottom: 0px;
    }

    .footer-area p.lead a {
        color: #ffffff;
        margin-bottom: 15px;
    }

    .footer-area p.lead a:hover {
        color: #d65106;
    }

    .footer-area p a {
        font-size: 18px;
        color: #ffffff;
    }

    .footer-area p a:hover {
        color: #d65106;
    }

    .subscribe_form {
        display: block;
        text-align: center;
        padding: 5px 0;
    }

    .subscribe_form .form_input {
        display: block;
        background-color: rgba(0, 0, 0, 0.9);
        border: 1px solid #ffffff;
        color: #fff;
        font-size: 14px;
        line-height: 50px;
        padding: 0 10px;
        float: left;
        font-weight: 300;
        width: 100%;
        transition: all 0.5s ease-in-out;
    }

    .subscribe_form .submit {
        background-color: #d65106;
        color: #fff;
        font-size: 16px;
        font-weight: 500;
        line-height: 50px;
        display: inline-block;
        padding: 0 10px;
        float: left;
        width: 100%;
        border: none;
        cursor: pointer;
        transition: all 0.5s ease-in-out;
    }

    .subscribe_form .submit:hover {
        background: #010101;
    }

    .f-social {
        padding-bottom: 10px;
        margin: 0px;
        margin-top: 20px;
    }

    .f-social li a {
        font-size: 18px;
        color: rgba(214, 81, 6);
        width: 38px;
        height: 38px;
        display: block;
        text-align: center;
        line-height: 38px;
        background: #00000;
        border-radius: 4px;
    }

    .copyright {
        margin-top: 20px;
        position: relative;
        display: block;
        background-color: #010101;
        border-top: 1px solid rgba(207, 166, 113);
        padding: 30px 0;
        z-index: 1;
    }

    .copyright .company-name {
        font-size: 16px;
        text-align: center;
    }

    .copyright .company-name a {
        font-size: 16px;
    }

    .card {
        background-image: url("");
    }
    </style>
</head>

<body>
    <header class="top-navbar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="images/Kalori.in webfd.png" alt="" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food"
                    aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <br>
                <div class="collapse navbar-collapse" id="navbars-rs-food">
                    <ul class="navbar-nav ml-auto">
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="menu.html">BMI Calculator</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.html">Activity</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.html">Nutrition</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.html">Information</a></li>
                </div>
                <div class="nav-item ">
                    <a class="nav-link" href=""><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-cart3"
                            fill="#000000" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                        </svg></a>
                </div>
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false"><svg width="2em" height="2em"
                            viewBox="0 0 16 16" class="bi bi-person-circle" fill="#000000"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z" />
                            <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            <path fill-rule="evenodd"
                                d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z" />
                        </svg>
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </ul>
                </div>
                @endguest
        </nav>
    </header>
    @yield('isi')

    <!-- Start Footer -->
    <footer class="footer-area bg-f">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <h3>About Us</h3>
                    <p>Perusahaan Catering No.1 Indonesia.</p>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h3>Contact information</h3>
                    <p class="lead">Jalan Mawar No.6 Jakarta</p>
                    <p class="lead"><a href="#">+62 189 835 494</a></p>
                    <p><a href="#"> info@kaloriin.com</a></p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3>Opening hours</h3>
                    <p><span class="text-color">Monday: </span>Closed</p>
                    <p><span class="text-color">Tue-Wed :</span> 9:Am - 10PM</p>
                    <p><span class="text-color">Thu-Fri :</span> 9:Am - 10PM</p>
                    <p><span class="text-color">Sat-Sun :</span> 5:PM - 10PM</p>
                </div>
            </div>
        </div>

        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="company-name">All Rights Reserved. &copy; 2020 <a href="#">Kalori.in</a>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>