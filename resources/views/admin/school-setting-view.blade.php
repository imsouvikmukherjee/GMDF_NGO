@extends('admin.layout.main')

@section('main-container')

<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Manage Setting</h1>
    </div>

    <!-- Invoice Example -->
    <div class="col-xl-12 col-lg-12 mb-4">
        <div class="card">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between text-dark">
                <a href="{{ route('school.setting') }}" class="btn btn-sm btn-light"><i class="bi bi-arrow-90deg-left"></i> Back</a>
            </div>

            @if ($records == null)
                <p class="text-center text-muted my-3">No data available</p>
            @else
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th>Email</th>
                                <th>Contact</th>
                                <th>Address</th>
                                <th class="col-3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $records->email }}</td>
                                <td>{{ $records->contact }}</td>
                                <td>{{ $records->address }}</td>
                                <td>
                                    @if($records->facebook != null)
                                        <a href="{{ $records->facebook }}" class="btn btn-sm btn-dark" id="pdf-button" data-bs-toggle="tooltip" data-bs-placement="top" title="Facebook"><i class="bi bi-facebook"></i></a>
                                    @endif

                                    @if($records->twitter != null)
                                        <a href="{{ $records->twitter }}" class="btn btn-sm btn-light" id="pdf-button" data-bs-toggle="tooltip" data-bs-placement="top" title="Twitter"><i class="bi bi-twitter"></i></a>
                                    @endif

                                    @if($records->instagram != null)
                                        <a href="{{ $records->instagram }}" class="btn btn-sm btn-dark" id="pdf-button" data-bs-toggle="tooltip" data-bs-placement="top" title="Instagram"><i class="bi bi-instagram"></i></a>
                                    @endif

                                    @if($records->linkdin != null)
                                        <a href="{{ $records->linkdin }}" class="btn btn-sm btn-light" id="pdf-button" data-bs-toggle="tooltip" data-bs-placement="top" title="Linkdin"><i class="bi bi-linkedin"></i></a>
                                    @endif

                                    <a href="javascript:void(0)" onclick="confirmDelete('{{ url('/admin/school/school-setting-delete')}}/{{encrypt($records->id)}}')" class="btn btn-sm btn-danger" id="pdf-button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="bi bi-trash"></i></a>
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
    if (confirm('Are you sure you want to delete your setting?')) {
        window.location.href = url;
    }
}
</script>
