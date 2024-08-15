@extends('user.layout.main')

@section('main-container')

<div class="header-height"></div>
    <div class="pager-header">
        <div class="container">
            <div class="page-content">
                <h2>About Us</h2>
                <p>Help today because tomorrow you may be the one who <br>needs more helping!</p>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('show.home.page')}}">Home</a></li>
                    <li class="breadcrumb-item active">About Us</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    <section class="about-section bg-grey bd-bottom padding">
        <div class="container">
            <div class="row about-wrap">
                <div class="col-md-6 xs-padding">
                    <div class="about-image">
                        <img src="{{url('user-asset/img/about.jpg')}}" alt="about image">
                    </div>
                </div>
                <div class="col-md-6 xs-padding">
                    <div class="about-content">
                        <h2>You are definitely intrigued to <br> discover who we are.</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo praesentium pariatur atque numquam dolore, facere officia non consequatur porro, libero soluta blanditiis excepturi amet minima, ullam quia ea totam. Accusantium.</p>
                        <!-- <a href="#" class="default-btn">More About Us</a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /About Section -->

    <section class="about-section bd-bottom shape circle padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4 xs-padding">
                    <div class="profile-wrap">
                        <img class="profile" src="{{url('user-asset/img/profile.jpg')}}" alt="profile">
                        <h3>Jonathan Smith <span>CEO & Founder of Charitify.</span></h3>
                        <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless.</p>
                        <img src="{{url('user-asset/img/sign.png')}}" alt="sign">
                    </div>
                </div>
                <div class="col-md-8 xs-padding">
                    <div class="about-wrap row">
                        <div class="col-md-6 xs-padding">
                            <img src="{{url('user-asset/img/history.jpg')}}" alt="about-thumb">
                            <h3>Our History</h3>
                            <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor.</p>
                           
                        </div>
                        <div class="col-md-6 xs-padding">
                            <img src="{{url('user-asset/img/mission.jpg')}}" alt="about-thumb">
                            <h3>Our Mission</h3>
                            <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor.</p>
                            <!-- <a href="#" class="default-btn">Read More</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Causes Section -->


    <!-- ./Widget Section -->

    @endsection