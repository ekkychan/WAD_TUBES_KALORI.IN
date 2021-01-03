@extends('layouts.app3')

@section('isi')
<style>
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

.page-breadcrumb {
    padding: 250px 0 150px;
    background-image: url("images/bgblog.jpg");
    background-attachment: fixed;
    background-size: cover;
    background-position: 0 0;
    position: relative;
}

.all-page-title .container {
    position: relative;
    z-index: 2;
}

.all-page-title::before {
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

.all-page-title h1 {
    font-size: 38px;
    color: #ffffff;
    font-family: 'Rubik', sans-serif;
    padding: 0px;
    font-weight: 500;
}

.inner-pt {
    margin-top: 30px;
}

.inner-pt p {
    font-size: 18px;
}

.stuff-box {
    padding: 70px 0px;
}

.center {
    width: 600px;
    margin-left: auto;
    margin-right: auto;
}

.label {
    font-family: 'Quantico';
    text-align: center;
}

.card-wrapper {
    display: flex;
    flex-direction: row;
    justify-content: center;

    @media screen and (max-width: 320px) {
        flex-direction: column;
    }
}

.card-body ul li {
    display: inline-block;
    padding: 0px 5px;
}

.card-body ul li span {
    color: #d65106;
    cursor: pointer;
}

.card-body ul li span:hover {
    color: #010101;
}

.card-body ul li:first-child {
    padding-left: 0px;
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
    background-color: ;
}
</style>
<!-- Start All Pages -->
<div class="all-page-title page-breadcrumb">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-12">
                <h1>Information</h1>
            </div>
        </div>
    </div>
</div>
<!-- End All Pages -->

<!-- Start blog -->
<br>
<div class="blog-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading-title text-center">
                    <h2>What is trending about healthy today?</h2>

                </div>
            </div>
        </div>
    </div>
</div>
<br>
<div class="center">
    <div class="card-wrapper">
        @foreach($infos as $info)
        <div class="card" style="width: 30rem;">
            <img src="images/info/{{$info->img_path}}" class="card-img-top" alt="..." style="height:10rem">
            <div class="card-body">
                <h5 class="card-title">{{$info->judul}}</h5>
                <ul style="font-size:12px">
                    <li><span>Post by {{$info->user->name}}</span></li>
                    <li>|</li>
                    <li><span>{{date('j F Y',strtotime($info->created_at))}}</span></li>
                </ul>
                <p class="card-text" style="color:#888888">{{$info->header}}</p>
                <a href="/detail/{{$info->id}}" class="btn" style="background:#d65106; color:#fff">Read more</a>
            </div>
        </div>
        @endforeach
    </div>
</div>

<br>
<br>
@endsection