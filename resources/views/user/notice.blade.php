@extends('user.layout.main')

@section('main-container')

    <div class="header-height"></div>

    <div class="pager-header">
        <div class="container">
            <div class="page-content">
                <h2>Notice</h2>
                <p>Help today because tomorrow you may be the one who <br>needs more helping!</p>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('show.home.page')}}">Home</a></li>
                    <li class="breadcrumb-item active">Notice</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    <section class="events-section bg-grey bd-bottom padding">
        <div class="container">
            <div class="section-heading text-center mb-40">
                <h2>Notice</h2>
                <span class="heading-border"></span>
                <p>Help today because tomorrow you may be the one who <br> needs more helping!</p>
            </div>

            @if($records->isEmpty())
            <span class="date mt-5 text-center">No data available</span>
            @else

            <!-- /Section Heading -->
            <div class="accordion" id="accordionPanelsStayOpenExample">
               
              @foreach ($records as $key => $item)
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse{{$key+1}}" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne" style="background: #090099; color:#fff;">
                    {{$item->title}}
                  </button>
                </h2>
                <div id="panelsStayOpen-collapse{{$key+1}}" class="accordion-collapse collapse show">
                  <div class="accordion-body">
                    <p>{!!$item->description!!}</p>
                  </div>
                </div>
              </div>
              @endforeach
                
              
              </div>
              @endif
        </div>
    </section>




   @endsection