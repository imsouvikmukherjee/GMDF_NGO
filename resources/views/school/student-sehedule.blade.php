@extends('school.studentlayout.main')

@Section('main-container')


    <div class="child-2 w-75">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="text-center text-primary mt-4">Class Sehedule</h3>
                    <div
                    style="height: 3px;width: 50px;background-color: #1dd1a1;margin:  auto; margin-top:5px;margin-bottom: 15px ;">
                </div>

                    @if ($schedule != null)
                        <table class="table table-striped text-center table-sm mt-5">
                            <thead>
                                <tr>
                                    <th>Sr No.</th>
                                    <th>School</th>
                                    <th>Class</th>
                                    <th class="col-6">Section</th>

                                    <th>View Schedule</th>
                                </tr>
                            </thead>

                            @foreach($schedule as $key => $item)

                            <tr>


                                <td>{{ $key+1 }}</td>
                                <td>{{ $item->schoolname }}</td>
                                <td>{{ $item->class }}</td>
                                <td>{{ $item->section }}</td>
                                <td>
                                    @if ($item->scheduledocument != null)
                                        <a href="{{ url('otherstoredfiles/' . $item->scheduledocument) }}" download
                                            class="btn btn-light btn-sm" id="pdf-button" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="View Result"><i class="bi bi-eye-fill"></i></a>
                                    @endif

                                </td>
                            </tr>
                            @endforeach

                        </table>
                    @else
                        <p class="text-center text-muted my-5">Your schedule have not been released yet</p>
                    @endif

                </div>
            </div>
        </div>

    </div>
    </div>

@endsection
