@extends('admin.layout.main')

@Section('main-container')

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Manage Sliders</h1>
           
          </div>

         
            <!-- Invoice Example -->
            <div class="col-xl-12 col-lg-12 mb-4">
              <div class="card">
              
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between text-dark">
                   
                    <a class="m-0 float-right btn btn-dark btn-sm" href="{{route('show.main.slider.form')}}">Add Slider <i
                        class="fas fa-chevron-right"></i></a>
                  </div>

                  @if(session('success'))
                  <div class="alert alert-success text-center alert-dismissible fade show" role="alert"">
                      {{ session('success') }}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  
              @endif

              @if ($records->isEmpty())
              <p class="text-center text-muted my-3">No data available</p>
              @else

                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th>Sr No.</th>
                        <th>Banner Title</th>
                        <th>Banner Description</th>
                        <th>Banner Image</th>
                        <th>Status</th>
                        <th class="col-3">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                      @foreach($records as $key => $item)
                      <tr>
                        <td><a href="#">{{$key+1}}</a></td>
                        <td>{{$item->title}}</td>
                        <td>{{$item->description}}</td>
                        <td>
                            <img src="{{url('img/'.$item->image)}}" height="45px" width="85px" alt="" srcset="">
                        </td>

                        @if($item->status == 1)
                        <td><span class="badge badge-success">Active</span></td>
                        @else
                        <td><span class="badge badge-danger">Inactive</span></td>
                        @endif

                       
                        <td>
                          <a href="{{url('admin/slider-edit')}}/{{encrypt($item->id)}}" class="btn btn-sm btn-primary" id="pdf-button" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="bi bi-pencil-square"></i></a>
                          <a href="javascript:void(0)" onclick="confirmDelete('{{url('/admin/slider-delete')}}/{{encrypt($item->id)}}')" class="btn btn-sm btn-danger" id="pdf-button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="bi bi-trash"></i></a>
                          <a href="#" onclick="changeSliderStatus({{$item->id}})" class="btn btn-sm btn-dark" id="pdf-button" data-bs-toggle="tooltip" data-bs-placement="top" title="Changed Status"><i class="bi bi-toggle-on"></i> </a>
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
      function confirmDelete(url){
        // alert(url);
        if(confirm('Are you sure, you want to delete this slider?')){
          window.location.href = url;
        }
      }
     </script>

<script>
  function changeSliderStatus(id){
                     var val1 = id;
                 var csrf = $("meta[name='csrf-token']").attr("content");
                //  alert(val1);
                    $.ajax({
                    type: 'POST',
                    url: '/admin/change-slider-status',
                    data: { id: val1,
                         _token: csrf },
                    success: function(response) {
                  
                  location.reload();
           
          }
      });
     }
</script>