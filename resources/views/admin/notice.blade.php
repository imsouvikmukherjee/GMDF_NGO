@extends('admin.layout.main')

@Section('main-container')

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Manage Notice</h1>
           
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
                    <a class="m-0 float-right btn btn-dark btn-sm" href="{{route('ngo.add.notice')}}">Add Notice <i
                        class="fas fa-chevron-right"></i></a>
                  </div> 

                  @if($records->isEmpty())
                  <p class="text-muted text-center my-3">No data available</p>
                @else


                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th>Id</th>
                        <th class="col-4">Title</th>
                        <th class="col-10">Description</th>
                        <th>Created_at</th>
                        <th class="col-3">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                     
                      @foreach($records as $key => $item)
                      <tr>
                        <td><a href="#">{{$key+1}}</a></td>
                        <td>{{$item->title}}</td>
                        <td>
                          {{strip_tags($item->description)}}
                        </td>
                        <td>{{$item->created_date}}</td>
                        <td>
                          <a href="{{url('admin/edit-ngo-notice')}}/{{encrypt($item->id)}}" class="btn btn-sm btn-primary" id="pdf-button" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="bi bi-pencil-square"></i></a>
                          <a href="javascript:void(0)" onclick="confirmDelete('{{url('admin/ngo-notice-delete')}}/{{encrypt($item->id)}}')" class="btn btn-sm btn-danger" id="pdf-button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="bi bi-trash"></i></a>
                           
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
      function confirmDelete(url) {
        if(confirm('Are you sure, you want to delete this notice?')){
          window.location.href=url;
        }
        }
    </script>