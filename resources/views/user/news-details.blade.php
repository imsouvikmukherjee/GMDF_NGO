@extends('user.layout.main')

@section('main-container')

    <div class="header-height"></div>

    <div class="pager-header">
        <div class="container">
            <div class="page-content">
                <h2>News Details</h2>
                <p>Help today because tomorrow you may be the one who <br>needs more helping!</p>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('show.home.page')}}">Home</a></li>
                    <li class="breadcrumb-item active">Blog</li>
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
                        <img src="{{url('img/'.$data->newsimage)}}" alt="blog post">
                        <h2>{{$data->newstitle}}</h2>
                        <div class="meta-info">
                            <span>
                                <i class="fa-solid fa-user"></i> Written By <a href="#">GMDF NGO</a>
                                </span>
                            <span>
                                <i class="fa-solid fa-bookmark"></i> Category <a href="#">{{$data->categoryname}}</a>
                                </span>
                        </div>
                        <!-- Meta Info -->
                        <p>{!! $data->newsdescription !!}</p>

                       

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
                        <div class="sidebar-widget mb-50">
                            {{-- <h4>Search Posts</h4>
                            <form action="" class="search-form">
                                <input type="text" class="form-control" placeholder="Type here">
                                <button class="search-btn" type="button"><i class="fa fa-search"></i></button>
                            </form>
                        </div> --}}
                        <div class="sidebar-widget mb-50">
                            <h4>Categories</h4>
                            <ul class="cat-list">
                               @foreach($category as $cat)
                                    @if ($cat->status == 1)
                                    <li><a href="{{url('/news/category')}}/{{encrypt($cat->id)}}">{{$cat->categoryname}}</a><span></span></li>
                                    @endif
                               @endforeach
                               
                            </ul>
                        </div>
                        <!-- Categories -->
                        <div class="sidebar-widget mb-50">
                            <h4>Recent Posts</h4>
                            <ul class="recent-posts">
                               @foreach($newslist as $newsitem)
                             @if($newsitem->status == 1)
                             <li>
                                <img src="{{url('img/'.$newsitem->newsimage)}}" alt="blog post">
                                <div>
                                    <h4><a href="{{url('/read-more')}}/{{encrypt($newsitem->id)}}">{{$newsitem->newstitle}}</a></h4>
                                    <span class="date"><i class="fa fa-clock-o"></i>{{$newsitem->created_at}}</span>
                                </div>
                            </li>
                             @endif
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