@extends('admin.layout.main')

@Section('main-container')

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Manage Gallery</h1>
           
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
                   
                    <a class="m-0 float-right btn btn-dark btn-sm" href="{{route('show.galleryimage.form')}}">Add Image <i
                        class="fas fa-chevron-right"></i></a>
                  </div>

                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th>Image ID</th>
                        <th>Image Description</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th class="col-3">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                     
                      @foreach($records as $key => $item)
                      <tr>
                        <td><a href="#">{{$key+1}}</a></td>
                        <td>{{$item->title}}</td>
                        <td>
                            <img src="{{url('img/'.$item->image)}}" height="45px" width="85px" alt="" srcset="">
                        </td>
                       
                        @if($item->status == 1)
                        <td><span class="badge badge-success">Active</span></td>
                        @else
                        <td><span class="badge badge-danger">Inactive</span></td>
                        @endif

                        <td>
                          <a href="{{url('/admin/image-edit')}}/{{encrypt($item->id)}}" class="btn btn-sm btn-primary"><i class="bi bi-pencil-square" id="pdf-button" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i></a>
                          <a href="javascript:void(0)" onclick="confirmDelete('{{url('admin/gallery-delete')}}/{{encrypt($item->id)}}')" class="btn btn-sm btn-danger"><i class="bi bi-trash" id="pdf-button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"></i></a>
                          <a href="#" onclick="changeImageStatus({{$item->id}})" class="btn btn-sm btn-dark"><i class="bi bi-toggle-on" id="pdf-button" data-bs-toggle="tooltip" data-bs-placement="top" title="Changed Status"></i> </a>
                        </td>
                      </tr>
                      @endforeach
                     
                     
                     
                     
                    </tbody>
                  </table>
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
      function confirmDelete(url){
          if(confirm('Are you sure you want to delete this image?')){
            window.location.href = url;
          }
      }
    </script>

<script>
  function changeImageStatus(id){
                     var val1 = id;
                 var csrf = $("meta[name='csrf-token']").attr("content");
                //  alert(val1);
                    $.ajax({
                    type: 'POST',
                    url: '/admin/change-image-status',
                    data: { id: val1,
                         _token: csrf },
                    success: function(response) {
                  
                  location.reload();
           
          }
      });
     }
</script>