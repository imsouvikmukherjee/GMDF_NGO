@extends('user.layout.main')

@section('main-container')

    <div class="header-height"></div>

    <div class="pager-header">
        <div class="container">
            <div class="page-content">
                <h2>News</h2>
                <p>Help today because tomorrow you may be the one who <br>needs more helping!</p>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('show.home.page')}}">Home</a></li>
                    <li class="breadcrumb-item active">News</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    <section class="blog-section bg-grey padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 xs-padding">
                    <div class="blog-items grid-list row">
                       
                      
                        @if($records->isEmpty())
                        <span class="date mt-5 text-center">No data available</span>
                        @else
                        @foreach ($records as $key => $item)
                        @if($item->status == 1)
                        <div class="col-md-4 padding-15">
                            <div class="blog-post">
                                <img src="{{url('img/'.$item->newsimage)}}" alt="blog post">
                                <div class="blog-content">
                                  <div style="display: flex; justify-content: space-between"">
                                    @if($item->created_at != null)
                                    <span class="date"><i class="fa fa-clock-o"></i> {{$item->created_at}}</span>
                                    @else
                                    <span class="date"><i class="fa fa-clock-o"></i> Invalid Date</span>
                                    @endif
 
                                    <span class="date" >  <i class="fa-solid fa-bookmark"></i> {{$item->categoryname}}</span>
                                  </div>

                                    <h3><a href="{{url('/read-more')}}/{{encrypt($item->id)}}">{{$item->newstitle}}</a></h3>
                                    <p> {{strip_tags($item->description)}}</p>
                                    <a href="{{url('/read-more')}}/{{encrypt($item->id)}}" class="post-meta">Read More</a>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                        @endif

                      
                    </div>
                    {{-- <ul class="pagination_wrap align-center mt-30">
                        <li><a href="#"><i class="fa-solid fa-arrow-left"></i></a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#" class="active">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="fa-solid fa-arrow-right"></i></a></li>
                    </ul> --}}

                    <div class="mt-4">
                        {{-- @if ($records->isEmpty() && $records->currentPage() > 1)
                        <a href="{{ $records->previousPageUrl() }}" class="btn btn-primary">Previous Page</a>
                        @endif --}}
                        {{$records->links('pagination::bootstrap-4')}}
                    </div>
                    <!-- Pagination -->
                </div>
                <!-- Blog Posts -->
            </div>
        </div>
    </section>
    <!-- /Blog Section -->

   @endsection