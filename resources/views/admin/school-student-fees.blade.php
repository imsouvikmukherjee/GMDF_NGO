@extends('admin.layout.main')

@Section('main-container')

    <!-- Container Fluid-->
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Manage Fees | School</h1>

        </div>

        @if (session('success'))
            <div class="alert alert-success text-center alert-dismissible fade show" role="alert"">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <!-- Invoice Example -->
        <div class="col-xl-12 col-lg-12 mb-4">
            <div class="card">

                {{-- <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between text-dark"> --}}
                <!-- <h6 class="m-0 font-weight-bold">Fund Details</h6> -->
                {{-- <form action="" method="post" >
                        <div class="form-group " style="display: flex;">
                            
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Search by student id"  aria-describedby="emailHelp">
                            <button type="submit" class="btn btn-primary mx-3"><i class="bi bi-search"></i></button>
                          </div>
                          
                    </form> --}}
                {{-- </div> --}}

                @if ($feesdetails->isEmpty())
                    <p class="text-center text-muted my-3">No data available</p>
                @else
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th>Id</th>
                                    <th>Student Id</th>
                                    <th>Name</th>
                                    <th>Class</th>
                                    <th>Section</th>


                                    <th class="col-3">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($feesdetails as $key => $fees)
                                    <tr>
                                        <td><a href="#">{{ $key + 1 }}</a></td>
                                        <td>{{ $fees->studentid }}</td>
                                        <td>
                                            {{ $fees->studentname }}
                                        </td>
                                        <td>{{ $fees->class }}</td>
                                        <td>{{ $fees->section }}</td>


                                        <td>

                                            <a href="javascript:void(0)"
                                                onclick="confirmDelete('{{ url('/admin/school/fees-delete') }}/{{ encrypt($fees->id) }}')"
                                                class="btn btn-sm btn-danger" id="pdf-button" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Delete"><i class="bi bi-trash"></i></a>

                                            <a href="{{ url('otherstoredfiles/' . $fees->paymentrecipt) }}" download
                                                class="btn btn-sm btn-info" id="pdf-button" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="View Recipt"><i class="bi bi-eye-fill"></i>
                                            </a>

                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                @endif
            </div>
            <div class="card-footer">
                <div>
                    {{ $feesdetails->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </div>




    </div>
    <!---Container Fluid-->

@endsection


<script>
    function confirmDelete(url) {
        if (confirm('Are you sure you want to delete this record?')) {
            window.location.href = url;
        }
    }
</script>
