@extends('school.studentlayout.main')

@Section('main-container')
    <div class="b mb-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <div class="alert custom-alert alert-dismissible fade show" role="alert" id="warning"
                        style="background-color: beige;">
                        <strong>Welcome to the Dashboard!</strong> &nbsp;Please click on the specific subject folder to view
                        the notes
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
                <!-- <div class="col-sm-2"></div> -->
            </div>
        </div>
        <div class="folder-container">

            @foreach ($subjects as $subject)
                <a href="{{ url('/school/view-notes') }}/{{ encrypt($subject->id) }}">
                    <div class="folder">
                        <img src="{{ url('school-asset/images/folder.png') }}" alt="">
                </a>

                <h5>{{ $subject->subject }}</h5>

        </div>
        @endforeach






















    </div>
    </div>
    </div>


    </section>
@endsection
