<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">


    <title>{{ $title }}</title>

    {{-- <link rel="icon" type="image/x-icon" href="img/favicon.png"> --}}
    <!-- <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css" /> -->
    <link rel="stylesheet" href="{{ url('school-asset/task.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('school-asset/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Font Awesome Icons CSS -->



    <!-- Ani  -->
    <link rel="stylesheet" href="{{ url('school-asset/css/main.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ url('school-asset/css/responsive.css') }}">

    <style>
        .accordion-button::after {
            content: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3E%3Cpath d='M12 17.414 3.293 8.707l1.414-1.414L12 14.586l7.293-7.293 1.414 1.414L12 17.414z' style='fill:white'/%3E%3C/svg%3E");
        }

        
    </style>
</head>

<body>

    <header id="header" class="header-section mt-0">
        <div class="top-header" style="background-color: #1dd1a1;">
            <div class="container">
                <div class="top-content-wrap row">
                    <div class="col-sm-8">
                        <ul class="left-info">
                            <li><a href="#"><i class="bi bi-building"></i>{{session('schoolname')}}</a></li>
                            <li><a href="#"><i class="bi bi-person-check"></i>{{session('name')}}</a></li>
                            {{-- <li><a href="#"><i class="bi bi-envelope"></i>{{session('email')}}</a></li> --}}
                            <li><a href="#"><i class="bi bi-telephone"></i>+91 {{session('contact')}}</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 d-none d-md-block">
                        <ul class="right-info">
                            <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <!-- /Header Section -->
    <!-- <nav class="navbar navbar-expand-xl navbar-dark bg-custom" aria-label="Sixth navbar example" id="navBar">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Rupsa pvt lmt</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample06" aria-controls="navbarsExample06" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample06">
        <ul class="navbar-nav me-auto mb-2 mb-xl-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
        <form role="search">
          <input class="form-control" type="search" placeholder="Search" aria-label="Search">
        </form>
      </div>
    </div>
</nav> -->
    <section class="ani-section my-2 ">
        <div class="main ">

            <div class="a">
                <div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary"
                    style="width: 100%; min-width: 280px;">
                    <a href="/"
                        class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                        <svg class="bi pe-none me-2" width="40" height="32">
                            <use xlink:href="#bootstrap"></use>
                        </svg>
                        <a href="{{ route('school.schoolhome') }}" style="text-align: center; color: black;"><span
                                class="fs-4">GMDF | NGO</span></a>

                    </a>
                    <hr>
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item">
                            <a href="{{ route('show.myclassroom') }}" class="nav-link text-dark" aria-current="page">
                                <svg class="bi pe-none me-2" width="16" height="16">
                                    <use xlink:href="#home"></use>
                                </svg>
                                <i class="bi bi-house-door"></i>
                                 Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('student.profile') }}" class="nav-link link-body-emphasis">
                                <svg class="bi pe-none me-2" width="16" height="16">
                                    <use xlink:href="#speedometer2"></use>
                                </svg>
                                <i class="bi bi-person-plus"></i>
                                Profile
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('student.result') }}" class="nav-link link-body-emphasis">
                                <svg class="bi pe-none me-2" width="16" height="16">
                                    <use xlink:href="#table"></use>
                                </svg>
                                <i class="bi bi-card-checklist"></i>
                                Result
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('student.schedule') }}" class="nav-link link-body-emphasis">
                                <svg class="bi pe-none me-2" width="16" height="16">
                                    <use xlink:href="#grid"></use>
                                </svg>
                                <i class="bi bi-calendar2-day"></i>
                                Schedule
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('student.fees') }}" class="nav-link link-body-emphasis">
                                <svg class="bi pe-none me-2" width="16" height="16">
                                    <use xlink:href="#grid"></use>
                                </svg>
                                <i class="bi bi-bank"></i>
                                Fees
                            </a>
                        </li>
                        <li>
                            <a href="{{route('school.schoolhome')}}" class="nav-link link-body-emphasis">
                                <svg class="bi pe-none me-2" width="16" height="16">
                                    <use xlink:href="#people-circle"></use>
                                </svg>
                                <i class="bi bi-box-arrow-left"></i>
                                Back to Home
                            </a>
                        </li>
                    </ul>


                </div>
            </div>
           
