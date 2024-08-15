@extends('user.layout.main')

@section('main-container')

    <div class="header-height"></div>

    <div class="pager-header">
        <div class="container">
            <div class="page-content">
                <h2>Fundraising Details</h2>
                <p>Help today because tomorrow you may be the one who <br>needs more helping!</p>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('show.home.page')}}">Home</a></li>
                    <li class="breadcrumb-item active">Fundrising Details</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    <section class="blog-section bg-grey padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 sm-padding">
                    <div class="blog-items single-post row">
                        <img src="{{url('img/'.$data->image)}}" alt="blog post">
                        <h2>{{$data->title}}</h2>
                        <div class="meta-info">
                            <span>
                                <i class="fa-solid fa-user"></i> Written By <a href="#">GMDF NGO</a>
                                </span>
                            {{-- <span>
                                <button class="btn btn-small " style="background-color: #090099; color: #fff;height: 25px;width: 55px; font-size: 14px;line-height: 0px;border-radius: 4px;text-align: center;padding-left: 5px;">Donate Now</button>
                                </span> --}}
                                <span>
                                    <i class="fa fa-clock-o"></i> Published <a href="#">{{$data->created_at}}</a>
                                    </span>
                        </div>
                        <!-- Meta Info -->
                        <p>{!!$data->description!!}</p>

                        

                        <div class="share-wrap">
                            <h4>Share This Article</h4>
                            <ul class="share-icon">
                                <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}"><i class="fa-brands fa-facebook"></i> Facebook</a></li>
                                <li><a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}"><i class="fa-brands fa-twitter"></i> Twitter</a></li>
                                <!-- <li><a href="#"><i class="ti-google"></i> Google+</a></li> -->
                                <li><a href="https://www.instagram.com/your_instagram_username"><i class="fa-brands fa-instagram"></i> Instagram</a></li>
                                <!-- <li><a href="#"><i class="ti-linkedin"></i> Linkedin</a></li> -->
                            </ul>
                        </div>
                        <!-- Share Wrap -->

                    </div>
                </div>
                <!-- Blog Posts -->
                <div class="col-lg-3 sm-padding">
                    <div class="sidebar-wrap">
                      
                        <div class="sidebar-widget mb-30">
                          <a href="{{url('/make-fundrising-donation')}}/{{encrypt($data->id)}}"> <button class="btn ani-fund-donate" style="background-color: #090099; color: #fff;
                             width: 100%;height: 44px; border-radius: 5px;font-family: sans-serif;font-weight: bold; font-size: 14px;"> DONATE NOW</button></a> 
                           
                        </div>
                        <div class="donation-box mb-50">
                            <p><i class="fa-solid fa-chart-column"></i>Goal: ₹{{$data->price}}</p>
                            {{-- <p><i class="fa-solid fa-thumbs-up"></i>Raised: $5000</p> --}}
                        </div>

                        {{-- <div class="sidebar-widget mb-15">
                            <h4>Search Posts</h4>
                            <form action="" class="search-form">
                                <input type="text" class="form-control" placeholder="Type here">
                                <button class="search-btn" type="button"><i class="fa fa-search"></i></button>
                            </form>
                        </div> --}}
                        <!-- Categories -->
                        <div class="sidebar-widget mb-50">
                            <h4>Recent Posts</h4>
                            <ul class="recent-posts">
                               
                                @foreach($data1 as $sidebaritem)
                                <li>
                                    <img src="{{url('img/'.$sidebaritem->image)}}" alt="blog post">
                                    <div>
                                        <h4><a href="{{url('/fundrising-read-more')}}/{{encrypt($sidebaritem->id)}}">{{$sidebaritem->title}} </a></h4>
                                        <span class="date"><i class="fa fa-clock-o"></i> {{$sidebaritem->created_at}}</span>
                                    </div>
                                </li>
                                @endforeach
                               
                            </ul>
                        </div>
                        <!-- Recent Posts -->
                     
                     
                    </div>
                    <!-- /Sidebar Wrapper -->
                </div>
            </div>
        </div>
    </section>
    <!-- /Blog Section -->

   @endsection