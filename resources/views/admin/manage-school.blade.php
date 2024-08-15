@extends('admin.layout.main')

@Section('main-container')

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Manage School</h1>
           
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
                    <!-- <h6 class="m-0 font-weight-bold">Fund Details</h6> -->
                    <a href="" class=" btn btn-sm btn-light" style="display: none;"><i class="bi bi-arrow-90deg-left"></i> Back</a>
                    @if (session('usertype') != 'Superadmin')
                    <a class="m-0 float-right btn btn-dark btn-sm" href="{{route('add.school.details')}}">Add Details <i
                        class="fas fa-chevron-right"></i></a>
                        @endif
                  </div>

                  @if($data == null)
                    <p class="text-center text-muted mt-4">No details are added yet</p>
                  @else

                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th>Id</th>
                        <th>School Name</th>
                        <th>Login Email</th>
                        <th>View Email</th>
                        
                        
                        <th class="col-3">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><a href="#">1</a></td>
                        <td>{{$data->schoolname}}</td>
                        <td>
                            {{$data->email}}
                        </td>
                        <td>
                            {{$data->showemail}}
                        </td>
                       
                       
                        <td>
                          <a href="{{url('/admin/school/update-details')}}/{{encrypt($data->schooldetails_id)}}" class="btn btn-sm btn-primary" id="pdf-button" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="bi bi-pencil-square"></i></a>
                          {{-- <a href="javascript:void(0)" onclick="dataDelete('{{url('/admin/school/details-delete')}}/{{encrypt($data->id)}}')" class="btn btn-sm btn-danger" id="pdf-button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="bi bi-trash"></i></a> --}}
                          <a href="{{url('/admin/school/school-details')}}" class="btn btn-sm btn-info" id="pdf-button" data-bs-toggle="tooltip" data-bs-placement="top" title="View Details"><i class="bi bi-card-checklist"></i> </a>
                            
                        </td>
                      </tr>
                    
                    </tbody>
                  </table>
                </div>
                @endif
                <div class="card-footer"></div>
              </div>
            </div>
           

        

        </div>
        <!---Container Fluid-->
      
     @endsection

     <script>
      function dataDelete(url){
        if(confirm('Are you sure you want to delete this data?')){
          window.location.href = url;
        }
      }
     </script>