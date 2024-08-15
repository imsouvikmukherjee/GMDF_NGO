@extends('admin.layout.main')

@Section('main-container')

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Manage Membership</h1>
           
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
              
                @if ($records->isEmpty())
                <p class="text-center text-muted my-3">No data available</p>
                @else

                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact Number</th>
                        
                        <th class="col-3">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                     
                      @foreach($records as $key => $item)
                      <tr>
                        <td><a href="#">{{$key+1}}</a></td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->contact}}</td>
                   
                        <td>
                          
                          <a href="javascript:void(0)" onclick="onDelete('{{url('/admin/membership-delete')}}/{{encrypt($item->id)}}')" class="btn btn-sm btn-danger" id="pdf-button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="bi bi-trash"></i></a>
                         
                          <a href="{{url('/admin/membership-details')}}/{{encrypt($item->id)}}" class="btn btn-sm btn-info" id="pdf-button" data-bs-toggle="tooltip" data-bs-placement="top" title="View Details"><i class="bi bi-card-checklist"></i> </a>
                        </td>
                      </tr>
                      @endforeach

                      
                    </tbody>
                  </table>
                  @endif
                </div>
                <div class="card-footer">
                  <div>
                    {{$records->links('pagination::bootstrap-5')}}
                  </div>
                </div>
              </div>
            </div>
           

        

        </div>
        <!---Container Fluid-->
      
@endsection

<script>
  function onDelete(url){
    if(confirm('Are you sure you want to delete this data?')){
      window.location.href = url;
    }
  }
</script>