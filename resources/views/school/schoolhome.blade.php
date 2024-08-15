@extends('school.layout.main')

@Section('main-container')
    @if ($schooldetails->banner != null)
        <section class="slider-section">
            <img src="{{ url('school_img/' . $schooldetails->banner) }}" alt="School Hero Page" height="auto" width="100%" />
        </section>
    @else
        <section class="slider-section">
            <img src="{{ url('school-asset/img/slider-3.jpg') }}" alt="" title="#slider-caption-1" height="auto"
                width="100%" />
        </section>
        <!-- /#slider-Section -->
    @endif

    <section class="about-section bd-bottom shape circle padding">
        <div class="container">
            <div class="row">

                <div class="col-md-12 xs-padding">

                    <div class="about-wrap row">

                        <h2 class="text-center">About Our School</h2>
                        <div
                            style="height: 3px;width: 50px;background-color: #1dd1a1;margin:  auto; margin-top:5px;margin-bottom: 15px ;">
                        </div>

                        @if ($schooldetails->about != null)
                            {!! $schooldetails->about !!}
                        @else
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. At incidunt numquam amet? Omnis ullam
                            ex amet assumenda tenetur quo aspernatur inventore dolor dolorem eveniet, totam illo pariatur
                            debitis recusandae, ea voluptatibus asperiores numquam harum vitae eum magni nisi officia. At
                            repellat impedit ipsum numquam dolor hic, amet perspiciatis sint excepturi perferendis maxime
                            aperiam, eaque vero cupiditate ex temporibus saepe expedita!
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Causes Section -->






    <!-- /Team Section -->





    <!-- Blog Section -->


    <section class="events-section bg-grey bd-bottom padding">
        <div class="container">
            <div class="section-heading text-center mb-40">
                <h2>Notice</h2>
                <div
                    style="height: 3px;width: 50px;background-color: #1dd1a1;margin:  auto; margin-top:5px;margin-bottom: 15px ;">
                </div>
                <p>To view the notice in detail, please click on the respective accordion below.</p>
            </div>
            <!-- /Section Heading -->
            <div class="accordion" id="accordionPanelsStayOpenExample">

                @foreach ($schoolnotice as $key => $item)
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseOne{{ $key + 1 }}" aria-expanded="true"
                                aria-controls="panelsStayOpen-collapseOne" style="background-color: #1dd1a1; color: #fff;">
                                {{ $item->title }}
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne{{ $key + 1 }}" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <p>{!! $item->description !!}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
