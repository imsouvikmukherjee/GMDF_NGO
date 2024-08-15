@extends('admin.layout.main')

@section('main-container')

<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Manage Bank</h1>
    </div>

    @if(session('success'))
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
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between text-dark">
                <a href="{{ route('bank.details') }}" class="btn btn-sm btn-light"><i class="bi bi-arrow-90deg-left"></i> Back</a>
            </div>

            @if ($records == null)
                <p class="text-center text-muted my-3">No data available</p>
            @else
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th>Bank Name</th>
                                <th>Account Number</th>
                                <th>IFSC Code</th>
                                <th>Branch</th>
                                <th>UPI Id</th>
                                
                                <th class="col-3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $records->bank_name }}</td>
                                <td>{{ $records->account_number }}</td>
                                <td>{{ $records->ifsc_code }}</td>
                                <td>{{ $records->branch }}</td>
                                <td>{{ $records->upi_id }}</td>
                                <td>
                                   

                                    <a href="javascript:void(0)" onclick="confirmDelete('{{ url('/admin/school/bank-details-delete')}}/{{encrypt($records->id)}}')" class="btn btn-sm btn-danger" id="pdf-button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer"></div>
            @endif
        </div>
    </div>
</div>
<!---Container Fluid-->

@endsection

<script>
function confirmDelete(url) {
    if (confirm('Are you sure you want to delete this details?')) {
        window.location.href = url;
    }
}
</script>
