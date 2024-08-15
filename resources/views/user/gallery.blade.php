
@extends('user.layout.main')

@section('main-container')

<div class="header-height"></div>
<div class="pager-header">
    <div class="container">
        <div class="page-content">
            <h2>Image Gallery</h2>
            <p>Help today because tomorrow you may be the one who <br>needs more helping!</p>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('show.home.page')}}">Home</a></li>
                <li class="breadcrumb-item active">Gallery</li>
            </ol>
        </div>
    </div>
</div>

    <section class="gallery-section bg-grey bd-bottom padding">
        <div class="container">
            {{-- <div class="row"> --}}
                {{-- <ul class="gallery-filter align-center mb-30">
                    <li class="active" data-filter="*">All</li>
                    <li data-filter=".branding">Branding</li>
                    <li data-filter=".design">Design</li>
                    <li data-filter=".wordpress">Wordpress</li>
                    <li data-filter=".marketing">Marketing</li>
                </ul> --}}
                <!-- /.gallery filter -->
            {{-- </div> --}}

            @if($gallery->isEmpty())
            <span class="date mt-5 text-center">No image available</span>
            @else

            <div class="gallery-items row">
                
                @foreach($gallery as $item)
                <div class="col-lg-4 col-sm-6 single-item ">
                    <div class="gallery-wrap">
                        <img src="{{url('img/'.$item->image)}}" alt="gallery">
                        <div class="hover">
                            <a class="img-popup" data-gall="galleryimg" href="{{url('img/'.$item->image)}}"><i class="fa-solid fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
              
            </div>

            @endif
            <div class="mt-4">
                       
                {{$gallery->links('pagination::bootstrap-4')}}
            </div>
        </div>
       
    </section>
    <!-- /Gallery Section -->

   
@endsection