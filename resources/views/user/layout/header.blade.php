<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html  lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
  

    <title>{{$title}}</title>

    <link rel="icon" type="image/x-icon" href="{{url('user-asset/img/favicon.png')}}">

    <!-- Font Awesome Icons CSS -->

    <link rel="stylesheet" href="{{url('user-asset/bower_components/bootstrap/dist/css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{url('user-asset/bower_components/themify-icons/themify-icons.css')}}" />


    <link rel="stylesheet" href="{{url('user-asset/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Themify Icons CSS -->
    <link rel="stylesheet" href="{{url('user-asset/css/themify-icons.css')}}">
    <!-- Elegant Font Icons CSS -->
    <link rel="stylesheet" href="{{url('user-asset/css/elegant-font-icons.css')}}">
    <!-- Elegant Line Icons CSS -->
    <link rel="stylesheet" href="{{url('user-asset/css/elegant-line-icons.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('user-asset/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- Venobox CSS -->
    <link rel="stylesheet" href="{{url('user-asset/css/venobox/venobox.css')}}">
    <!-- OWL-Carousel CSS -->
    <link rel="stylesheet" href="{{url('user-asset/css/owl.carousel.css')}}">
    <!-- Slick Nav CSS -->
    <link rel="stylesheet" href="{{url('user-asset/css/slicknav.min.css')}}">
    <!-- Css Animation CSS -->
    <link rel="stylesheet" href="{{url('user-asset/css/css-animation.min.css')}}">
    <!-- Nivo Slider CSS -->
    <link rel="stylesheet" href="{{url('user-asset/css/nivo-slider.css')}}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{url('user-asset/css/main.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{url('user-asset/css/responsive.css')}}">

    <script src="{{url('user-asset/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>


   

</head>

<body>

    <header id="header" class="header-section">
        <div class="top-header">
            <div class="container">
                <div class="top-content-wrap row">
                    <div class="col-sm-8">
                        <ul class="left-info">
                            @if($settingdata != null)
                            <li><a href="#"><i class="fa-solid fa-envelope"></i></i>{{$settingdata->email}}</a></li>
                            @endif

                            @if($settingdata != null)
                            <li><a href="#"><i class="fa-solid fa-phone"></i>+91 {{$settingdata->contact}}</a></li>
                            @endif
                        </ul>
                    </div>
                    <div class="col-sm-4 d-none d-md-block">
                        <ul class="right-info">
                            @if($settingdata != null)
                            <li><a href="{{$settingdata->facebook}}"><i class="fa-brands fa-facebook"></i></a></li>
                            @endif

                            @if($settingdata != null)
                            <li><a href="{{$settingdata->twitter}}"><i class="fa-brands fa-twitter"></i></a></li>
                            @endif

                            @if($settingdata != null)
                            <li><a href="{{$settingdata->instagram}}"><i class="fa-brands fa-instagram"></i></a></li>
                            @endif
                            {{-- <li><a href="{{url('admin/dashboard')}}"><i class="fa-brands fa-pinterest"></i></a></li> --}}
                           
                           @if($settingdata != null)
                            <li><a href="{{$settingdata->linkdin}}"><i class="fa-brands fa-linkedin"></i></a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-header">
            <div class="container">
                <div class="bottom-content-wrap row">
                    <div class="col-sm-2">
                        <div class="site-branding">
                            <a href="{{route('show.home.page')}}"><img src="{{url('user-asset/img/logo.jpg')}}" alt="Brand" height="auto" width="70px"></a>
                        </div>
                    </div>
                    <div class="col-sm-10 text-right">
                        <ul id="mainmenu" class="nav navbar-nav nav-menu">
                            <li class="active"> <a href="{{route('show.home.page')}}">Home</a></li>
                            <li><a href="{{route('show.about.page')}}">About</a></li>
                            <li><a href="{{route('show.gallery.page')}}">Gallery</a></li>
                            <li><a href="{{route('show.news.page')}}">News</a>
                               
                                <li> <a href="{{route('show.notice')}}">Notice</a></li>
                            <li><a href="{{route('fundrising')}}">Fundraising</a></li>
                            {{-- <li><a href="{{route('membership')}}">Membership</a></li> --}}
                            <li> <a href="{{route('contact.Form')}}">Contact</a></li>
                            
                            <a href="{{route('ngo.make.donation')}}" class="default-btn">Donate Now</a>
                            {{-- <a href="{{route('login')}}" class="default-btn">Login</a> --}}
                            {{-- <a href="{{url('admin/dashboard')}}" class="default-btn">Login</a> --}}
                             @if (Route::has('login'))
                            {{-- <nav class="-mx-3 flex flex-1 justify-end"> --}}
                                @auth
                                @if (session('usertype') != 'Student')
                                    <a
                                        href="{{ url('admin/dashboard') }}"
                                        class="default-btn"
                                    >
                                        Dashboard
                                    </a> 
                                    @endif

                                    @if (session('usertype') === 'Student')
                                    <a
                                        href="{{ url('school/dashboard') }}"
                                        class="default-btn"
                                    >
                                        Dashboard
                                    </a> 
                                    @endif
                                     {{-- <a href="{{url('/dashboard')}}" target="_blank" class="default-btn">School</a>  --}}
                                    
                                @else 
                                    <a
                                        href="{{ route('login') }}"
                                        class=" default-btn "
                                    >
                                        Log in
                                    </a> 
                                     {{-- <a href="{{route('login')}}" target="_blank" class="default-btn">School</a> --}}

                                     {{-- @if (Route::has('register')) --}}
                                        {{-- <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                            Register
                                        </a> --}}
                                    {{-- @endif --}}
                                 @endauth
                            {{-- </nav> --}}
                        @endif 
                        </ul>
                       
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- /Header Section -->