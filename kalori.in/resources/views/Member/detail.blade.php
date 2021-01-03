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
    background-image: url("{{ asset('images/bgblog.jpg')}}");
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

.blog-inner-box {
    position: relative;
    margin: 0px 10px;
    margin-bottom: 30px;
}

.side-blog-img {
    box-shadow: 15px 15px 0px 0px rgba(214, 81, 6, 0.4);
    -webkit-transition: all 1s ease 0.01s;
    transition: all 1s ease 0.01s;
    position: relative;
}

.date-blog-up {
    position: absolute;
    right: 0px;
    top: 0px;
    background: #d65106;
    font-size: 18px;
    color: #ffffff;
    padding: 5px 15px 5px 5px;
}

.inner-blog-detail {
    background: #ffffff;
    position: relative;
    padding: 30px 20px;
}

.inner-blog-detail h3 {
    font-size: 20px;
    font-weight: 500;
    padding-bottom: 15px;
}

.inner-blog-detail ul li {
    display: inline-block;
    padding: 0px 5px;
    color: #222222;
}

.inner-blog-detail ul li span {
    color: #d65106;
}

.inner-blog-detail p {
    padding: 10px 0px;
}

.details-page blockquote {
    border-left: 5px solid #d65106;
}

.details-page blockquote {
    padding: 20px;
}

blockquote {
    margin: 20px 0 20px;
    padding: 30px;
}

.blog-inner-details-line {
    margin: 20px 0px;
    clear: both;
    float: left;
    width: 100%;
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

.recent-box-blog {
    margin-bottom: 20px;
    display: inline-block;
}

.recent-img {
    float: left;
    position: relative;
    width: 10rem;
    height: 5rem;
}

.recent-img::before {
    position: absolute;
    content: '';
    z-index: 2;
    top: 0;
    left: 0;
    width: 100%;
    height: 130%;
    background-color: #d65106;
    opacity: 0.4;
    transform: scale(0);
    -webkit-transform: scale(0);
    -moz-transform: scale(0);
    -ms-transform: scale(0);
    -o-transform: scale(0);
    transition: all 0.5s ease;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
}

.recent-box-blog:hover .recent-img::before {
    transform: scale(1);
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
}

.recent-info {
    display: table-cell;
    vertical-align: top;
    padding-left: 15px;
}

.recent-info ul li {
    display: inline-block;
    font-size: 11px;
    padding: 0px;
    color: #222222;
}

.recent-info h4 {
    font-size: 14px;
    padding: 0px;
    margin: 11px 0px;
    font-weight: 500;
}
</style>
<div class="all-page-title page-breadcrumb">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-12">
                <h1>Information</h1>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<!-- End All Pages -->

<!-- Start blog -->
<div class="blog-box">
    <div class="container">

        <div class="row">
            <div class="col-xl-8 col-lg-8 col-12">
                <div class="blog-inner-details-page">
                    <div class="blog-inner-box">
                        <div class="side-blog-img">
                            <img class="img-fluid" src="{{ asset('images/info/'.$info->img_path)}}" alt="">
                            <div class="date-blog-up">
                            {{date('j F',strtotime($info->created_at))}}
                            </div>
                        </div>
                        <div class="inner-blog-detail details-page">
                            <h3>{{$info->judul}}</h3>
                            <ul>
                                <li><i class="zmdi zmdi-account"></i>Posted By : <span>{{$info->user->name}}</span></li>
                                <li>|</li>
                                <li><i class="zmdi zmdi-time"></i>Time : <span>{{date('H:i',strtotime($info->created_at))}}</span></li>
                            </ul>
                            <p>{{$info->header}}</p>
                            <p></p>
                            <blockquote>
                                <p>{{$info->isi}}.</p>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8 col-12 blog-sidebar">
                <div class="right-side-blog">
                    <h3>Recent Post</h3>
                    <div class="post-box-blog">
                        <div class="recent-post-box">
                            <div class="recent-box-blog">
                                <div class="recent-img">
                                    <img class="img-fluid" src="images/detail2.jpg" alt="">
                                </div>
                                <div class="recent-info">
                                    <ul>
                                        <li><i class="zmdi zmdi-account"></i>Posted By : <span>Rubel Ahmed</span>
                                        </li>
                                    </ul>
                                    <h4><a href="detail.php">Mengenal Antinutrisi Asam Fitat yang Ganggu Penyerapan
                                            Mineral</a></h4>
                                    <h4></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection