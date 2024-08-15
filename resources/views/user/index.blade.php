@extends('user.layout.main')

@Section('main-container')
<section class="slider-section">
        <div class="slider-wrapper">
            <div id="main-slider" class="nivoSlider">
            @foreach ($slider as $key => $item)
            <img src="{{url('img/'.$item->image)}}" alt="" title="#{{'slider-caption-'.$key+1}}" />
            @endforeach
               
            </div>
            

         @foreach($slider as $key => $textitem )
         <div id="{{'slider-caption-'.$key+1}}" class="nivo-html-caption slider-caption">
            <div class="display-table">
                <div class="table-cell">
                    <div class="container">
                        <div class="slider-text">
                            <h5 class="wow cssanimation fadeInBottom">Join Us Today</h5>
                            <h1 class="wow cssanimation leFadeInRight sequence">{{$textitem->title}}</h1>
                            <p class="wow cssanimation fadeInTop" data-wow-delay="1s">{{$textitem->description}}</p>
                          
                            {{-- <a href="{{route('ngo.make.donation')}}" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Donate Now</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
         @endforeach
         
        </div>
    </section>
    <!-- /#slider-Section -->

    <section class="promo-section bd-bottom">
        <div class="promo-wrap" >
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 xs-padding" >
                        <div class="promo-content" >
                            <img src="{{url('user-asset/img/icon-1.png')}}" alt="prmo icon" >
                            <h3>Make Donetion</h3>
                            <p>Help today because tomorrow you may be the one who needs helping!</p>
                            {{-- <a href="#">Read More</a> --}}
                            <a href="{{route('ngo.make.donation')}}" class="default-btn wow cssanimation fadeInBottom text-white text-decoration-none" data-wow-delay="0.8s">Make Donetion</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 xs-padding">
                        <div class="promo-content">
                            <img src="{{url('user-asset/img/icon-2.png')}}" alt="prmo icon">
                            <h3>Crowdfunding</h3>
                            <p>Help today because tomorrow you may be the one who needs helping! </p>
                            <a href="{{route('apply.fundrising')}}" class="default-btn wow cssanimation fadeInBottom text-white text-decoration-none" data-wow-delay="0.8s">Apply For Crowdfunding</a>
                            {{-- <a href="#">Read More</a> --}}
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 xs-padding">
                        <div class="promo-content">
                            <img src="{{url('user-asset/img/icon-3.png')}}" alt="prmo icon">
                            <h3>Become A Member</h3>
                            <p>Help today because tomorrow you may be the one who needs helping! </p>
                            <a href="{{route('membership')}}" class="default-btn wow cssanimation fadeInBottom text-white text-decoration-none" data-wow-delay="0.8s">Membership</a>
                            {{-- <a href="#">Read More</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Promo Section -->

    <section class="causes-section bg-grey bd-bottom padding">
        <div class="container">
            <div class="section-heading text-center mb-40">
                <h2>Fundraising</h2>
                <span class="heading-border"></span>
                <p>Help today because tomorrow you may be the one who <br> needs more helping!</p>
            </div>
            <!-- /Section Heading -->

            @if($fundrisingpost->isEmpty())
            <span class="date mt-5 text-center">No data available</span>
            @else

            <div class="causes-wrap row">
               @foreach($fundrisingpost as $item)
               <div class="col-md-4 xs-padding">
                <div class="causes-content">
                    <div class="causes-thumb">
                        <img src="{{url('img/'.$item->image)}}" alt="causes">
                    
                      
                    </div>
                    <div class="causes-details">
                        <h3>{{$item->title}}</h3>
                        <p>{{strip_tags($item->description)}}...</p>
                        <div class="donation-box">
                            <p><i class="fa-solid fa-chart-column"></i>Goal: ₹{{$item->price}}</p>
                            {{-- <p><i class="fa-solid fa-thumbs-up"></i>Raised: $5000</p> --}}
                        </div>
                        <a href="{{url('/fundrising-read-more')}}/{{encrypt($item->id)}}" class="read-more">Read More</a>
                        {{-- <a href="#" class="donate-btn">Donate Now<i class="fa-solid fa-plus"></i></i></a> --}}
                    </div>
                </div>
            </div>
               @endforeach
            </div>
            @endif
        </div>
    </section>
    <!-- /Causes Section -->

    <section class="about-section bd-bottom shape circle padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4 xs-padding">
                    <div class="profile-wrap">
                        <img class="profile" src="{{url('user-asset/img/profile.jpg')}}" alt="profile">
                        <h3>Jonathan Smith <span>CEO & Founder of Charitify.</span></h3>
                        <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless.</p>
                        <img src="img/sign.png" alt="sign">
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

    <section class="campaigns-section bd-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 xs-padding">
                    <div class="campaigns-wrap">
                        <!-- <h4>Featured Campaigns</h4> -->
                        <h2>Featured project to built a School.</h2>
                        <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless.</p>
                        <!-- <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 35%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span class="wow cssanimation fadeInLeft">35%</span></div>
                        </div> -->
                        <!-- <div class="donation-box">
                            <h3><i class="ti-bar-chart"></i>Goal: $450000</h3>
                            <h3><i class="ti-thumb-up"></i>Raised: $55000</h3>
                        </div> -->
                        <a href="#" class="default-btn">Donate Now</a>
                    </div>
                </div>
                <div class="col-md-6 xs-padding">
                    <div class="video-wrap">
                        <img src="{{url('user-asset/img/video.jpg')}}" alt="video">
                        <div class="play">
                            <a class="img-popup" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=_IlLwfC2dNc"><i class="fa-solid fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Featured Campaigns Section -->

    
    <!-- /Team Section -->

   

    <section class="events-section bg-grey bd-bottom padding">
        {{-- <div class="container">
            <div class="section-heading text-center mb-40">
                <h2>Latest News</h2>
                <span class="heading-border"></span>
                <p>Help today because tomorrow you may be the one who <br> needs more helping!</p>
            </div>
            <!-- /Section Heading -->

            @if($news->isEmpty())
            <span class="date mt-5 text-center">No post available</span>
            @else
            <div id="event-carousel" class="events-wrap owl-Carousel"> --}}
               
                {{-- @foreach($news as $item)
                <div class="events-item">
                    <div class="event-thumb">
                        <img src="{{url('img/'.$item->newsimage)}}" alt="events">
                    </div>
                    <div class="event-details">
                        <h3>{{$item->newstitle}}</h3>
                        <div class="event-info">
                            <p><i class="ti-calendar"></i>Category: {{$item->categoryname}}</p>
                           
                            @if ($item->created_at != null)
                            <p><i class="ti-location-pin"></i>Created_at: {{$item->created_at}}</p>
                            @else
                            <p><i class="ti-location-pin"></i>Created_at: Invalid Date</p>
                            @endif

                        </div>
                        <p>{{strip_tags($item->description)}}...</p>
                        <a href="{{url('/read-more')}}/{{encrypt($item->id)}}" class="default-btn">Read More</a>
                    </div>
                </div>
                @endforeach   --}}

              

            {{-- </div>
            @endif
        </div> --}}

        <div class="container">
            <div class="section-heading text-center mb-40">
                <h2>Latest News</h2>
                <span class="heading-border"></span>
                <p>Help today because tomorrow you may be the one who <br> needs more helping!</p>
            </div>
            <div class="row">
                <div class="col-lg-12 xs-padding">
                    <div class="blog-items grid-list row">
                       
                      
                        @if($news->isEmpty())
                        <span class="date mt-5 text-center">No data available</span>
                        @else
                        @foreach ($news as $key => $item)
                        @if($item->status == 1)
                        <div class="col-md-4 padding-15">
                            <div class="blog-post">
                                <img src="{{url('img/'.$item->newsimage)}}" alt="blog post">
                                <div class="blog-content">
                                 <div style="display: flex; justify-content: space-between">
                                    @if($item->created_at != null)
                                    <span class="date"><i class="fa fa-clock-o"></i> {{$item->created_at}}</span>
                                    @else
                                    <span class="date"><i class="fa fa-clock-o"></i> Invalid Date</span>
                                    @endif
                                    <span class="date" >  <i class="fa-solid fa-bookmark"></i> {{$item->categoryname}}</span>
                                 </div>
                                    <h3><a href="{{url('/read-more')}}/{{encrypt($item->id)}}">{{$item->newstitle}}</a></h3>
                                    <p> {{strip_tags($item->description)}}...</p>
                                    <a href="{{url('/read-more')}}/{{encrypt($item->id)}}" class="post-meta">Read More</a>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                        @endif

                      
                    </div>
                </div>
             
            </div>
        </div>
    </section>
    <!-- Events Section -->
    <section id="counter" class="counter-section">
        <div class="container">
            <ul class="row counters">
                <li class="col-md-3 col-sm-6 sm-padding">
                    <div class="counter-content">
                        <i class="fa-solid fa-indian-rupee-sign"></i>
                        <h3 class="counter">85389</h3>
                        <h4 class="text-white">Money Donated</h4>
                    </div>
                </li>
                <li class="col-md-3 col-sm-6 sm-padding">
                    <div class="counter-content">
                        <!-- <i class="ti-face-smile"></i> -->
                        <i class="fa-solid fa-face-smile"></i>
                        <h3 class="counter">10693</h3>
                        <h4 class="text-white">Volunteer Around The World</h4>
                    </div>
                </li>
                <li class="col-md-3 col-sm-6 sm-padding">
                    <div class="counter-content">
                        <i class="fa-solid fa-user"></i>
                        <h3 class="counter">50177</h3>
                        <h4 class="text-white">People Impacted</h4>
                    </div>
                </li>
                <li class="col-md-3 col-sm-6 sm-padding">
                    <div class="counter-content">
                        <i class="fa-solid fa-comment"></i>
                        <h3 class="counter">669</h3>
                        <h4 class="text-white">Positive Feedbacks</h4>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- Counter Section -->
   
    <!-- Testimonial Section -->

  
    <!-- Blog Section -->


    <section class="events-section bg-grey bd-bottom padding">
        <div class="container">
            <div class="section-heading text-center mb-40">
                <h2>Latest Notice</h2>
                <span class="heading-border"></span>
                <p>Help today because tomorrow you may be the one who <br> needs more helping!</p>
            </div>
            <!-- /Section Heading -->

            @if($notice->isEmpty())
            <span class="date mt-5 text-center">No data available</span>
            @else

          
            @foreach($notice as $key => $item)
            <div class="accordion" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse{{$key+1}}" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne" style="background-color: #090099; color: #fff;">
                      {{$item->title}}
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapse{{$key+1}}" class="accordion-collapse collapse show">
                    <div class="accordion-body">
                     {!!$item->description!!}
                    </div>
                  </div>
                </div>
               
               
              </div>
            @endforeach
              @endif

        </div>
    </section>

@endsection
 

  