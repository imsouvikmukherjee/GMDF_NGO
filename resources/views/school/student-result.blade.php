@extends('school.studentlayout.main')

@Section('main-container')


    <div class="w-75 text-center">
        <div class="container mx-4">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="text-center text-primary mt-4">Student Result</h3>
                    <div
                    style="height: 3px;width: 50px;background-color: #1dd1a1;margin:  auto; margin-top:5px;margin-bottom: 15px ;">
                </div>

                    @if ($result != null)
                        <table class="table table-striped  table-sm mt-5">
                            <thead>
                                <tr>
                                    <th>Student ID</th>
                                    <th>Name</th>
                                    <th>Class</th>
                                    <th>Section</th>

                                    <th>View</th>
                                </tr>
                            </thead>



                            <tr>

                                <td>{{ $result->contact }}</td>
                                <td>{{ $result->name }}</td>
                                <td>{{ $result->class }}</td>
                                <td>{{ $result->section }} </td>



                                <td>
                                    @if ($result->resultdocument != null)
                                        <a href="{{ url('otherstoredfiles/' . $result->resultdocument) }}" download
                                            class="btn btn-light btn-sm" id="pdf-button" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="View Result"><i class="bi bi-eye-fill"></i></a>
                                    @endif
                                </td>


                            </tr>


                        </table>
                    @else
                        <p class="text-center text-muted my-5">Your result have not been released yet</p>
                    @endif
                </div>
            </div>
        </div>

    </div>
    </div>

@endsection
