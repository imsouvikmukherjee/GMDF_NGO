@extends('user.layout.main')

@section('main-container')

    <div class="header-height"></div>

    <div class="pager-header">
        <div class="container">
            <div class="page-content">
                <h2>Fundrising</h2>
                <p>Help today because tomorrow you may be the one who <br>needs more helping!</p>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('show.home.page')}}">Home</a></li>
                    <li class="breadcrumb-item active">Fundrising</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    <section class="causes-section bg-grey bd-bottom padding">
        <div class="container">
            <div class="causes-wrap row">
               
                @if($records->isEmpty())
                <span class="date mt-5 text-center">No data available</span>
                @else

                @foreach($records as $item)
                <div class="col-md-4 padding-15">
                    <div class="causes-content">
                        <div class="causes-thumb">
                            <img src="{{url('img/'.$item->image)}}" alt="causes">
                            
                           
                        </div>
                        <div class="causes-details">
                            <h3>{{$item->title}}</h3>
                            <p>{{strip_tags($item->description)}}...</p>
                            <div class="donation-box">
                                <p><i class="fa-solid fa-chart-column"></i>Goal: ₹{{$item->price}}</p>
                                {{-- <p><i class="fa-solid fa-thumbs-up"></i>Raised: ₹5000</p> --}}
                            </div>
                            <a href="{{url('/fundrising-read-more')}}/{{encrypt($item->id)}}" class="read-more">Read More</a>

                            {{-- <a href="#" class="donate-btn">Donate Now<i class="fa-solid fa-plus"></i></a> --}}
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
                <!-- /Causes-1 -->
                {{-- <div class="col-md-4 padding-15">
                    <div class="causes-content">
                        <div class="causes-thumb">
                            <img src="{{url('user-asset/img/causes-2.jpg')}}" alt="causes">
                          
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 45%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span class="wow cssanimation fadeInLeft">45%</span></div>
                            </div>
                        </div>
                        <div class="causes-details">
                            <h3>Big charity: build school for poor children.</h3>
                            <p>Help today because tomorrow you may be the one who needs more helping!</p>
                            <div class="donation-box">
                                <p><i class="fa-solid fa-chart-column"></i>Goal: ₹45000</p>
                                <p><i class="fa-solid fa-thumbs-up"></i>Raised: ₹5000</p>
                            </div>
                            <a href="{{route('fundrising.details')}}" class="read-more">Read More</a>
                            <a href="#" class="donate-btn">Donate Now<i class="fa-solid fa-plus"></i></a>
                        </div>
                    </div>
                </div> --}}
            
                <!-- /Causes-6 -->
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
            </div>
        </div>
    </section>
    <!-- /Causes Section -->

@endsection