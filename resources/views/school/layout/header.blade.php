<!doctype html>

<html lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">


    <title>{{ $title }}</title>

    <link rel="icon" type="image/x-icon" href="{{ url('school-asset/img/favicon.png') }}">

    <!-- Font Awesome Icons CSS -->

    <link rel="stylesheet" href="{{ url('school-asset/bower_components/bootstrap/dist/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ url('school-asset/bower_components/themify-icons/themify-icons.css') }}" />


    <link rel="stylesheet" href="{{ url('school-asset/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Themify Icons CSS -->
    <link rel="stylesheet" href="{{ url('school-asset/css/themify-icons.css') }}">
    <!-- Elegant Font Icons CSS -->
    <link rel="stylesheet" href="{{ url('school-asset/css/elegant-font-icons.css') }}">
    <!-- Elegant Line Icons CSS -->
    <link rel="stylesheet" href="{{ url('school-asset/css/elegant-line-icons.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('school-asset/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- Venobox CSS -->
    <link rel="stylesheet" href="{{ url('school-asset/css/venobox/venobox.css') }}">
    <!-- OWL-Carousel CSS -->
    <link rel="stylesheet" href="{{ url('school-asset/css/owl.carousel.css') }}">
    <!-- Slick Nav CSS -->
    <link rel="stylesheet" href="{{ url('school-asset/css/slicknav.min.css') }}">
    <!-- Css Animation CSS -->
    <link rel="stylesheet" href="{{ url('school-asset/css/css-animation.min.css') }}">
    <!-- Nivo Slider CSS -->
    <link rel="stylesheet" href="{{ url('school-asset/css/nivo-slider.css') }}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ url('school-asset/css/main.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ url('school-asset/css/responsive.css') }}">

    <script src="{{ url('school-asset/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
    <style>
        .heading-border {
            background-color: #1dd1a1 !important;
        }
    </style>

</head>

<body>


    <!-- <div class="site-preloader-wrap">
        <div class="spinner"></div>
    </div> -->
    <!-- Preloader -->

    <header id="header" class="header-section">
        <div class="top-header" style="background-color: #1dd1a1;">
            <div class="container">
                <div class="top-content-wrap row" ">
                    <div class="col-sm-8">
                        <ul class="left-info">
                            {{-- <li><a href="#"><i class="fa-solid fa-envelope"></i></i>Info@gmail.com</a></li>
                            <li><a href="#"><i class="fa-solid fa-phone"></i>+91 545642313285</a></li> --}}
                            <li class="text-white">{{ session('schoolname') }}</li>
                        </ul>
                    </div>
                    {{-- <div class="col-sm-4 d-none d-md-block">
                        <ul class="right-info"> --}}
                            {{-- <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li> --}}
                             {{-- <li><a href="#"><i class="fa-solid fa-envelope"></i></i>Info@gmail.com</a></li>
                            <li><a href="#"><i class="fa-solid fa-phone"></i>+91 545642313285</a></li> --}}
                            {{-- <li class="text-white">souvik mukherjee souvik mukherjee souvik ff</li> --}}
                        {{-- </ul>
                       
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="bottom-header">
            <div class="container">
                <div class="bottom-content-wrap row">
                    <div class="col-sm-3">
                        <div class="site-branding">

                             @if ($schooldetails != null)
                    <a href="#"><img src="{{ url('school_img/' . $schooldetails->logo) }}" alt="Brand"
                            height="auto" width="70px"></a>
                @else
                    <a href="#"><img src="{{ url('school-asset/img/logo.jpg') }}" alt="Brand" height="auto"
                            width="70px"></a>
                    @endif

                </div>
            </div>
            <div class="col-sm-9 text-right">
                <ul id="mainmenu" class="nav navbar-nav nav-menu">
                    <li class="active"> <a href="{{ route('school.schoolhome') }}">Home</a></li>
                    <li><a href="{{ route('show.myclassroom') }}">My Classroom</a></li>


                    <li> <a href="{{ route('contact.form') }}">Contact</a></li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            {{-- <x-dropdown-link :href="">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link> --}}

                            <a class="dropdown-item" href="route('logout')"
                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{-- <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> --}}
                                Logout
                            </a>
                        </form>
                    </li>



                    <!-- <li><a href="blog-grid.html">Blog</a>
                                <ul>
                                    <li><a href="blog-grid.html">Blog Grid</a></li>
                                    <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                    <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                    <li><a href="blog-single.html">Blog Single</a></li>
                                </ul>
                            </li> -->

                </ul>
                <!-- <a href="#" class="default-btn">Donate Now</a>
                        <a href="school/index.html" class="default-btn">School</a> -->
            </div>
        </div>
        </div>
        </div>
    </header>
    <!-- /Header Section -->

    <div class="header-height"></div>
