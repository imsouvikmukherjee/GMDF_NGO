@extends('admin.layout.main')

@Section('main-container')

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Manage Notes | School</h1>
           
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
                    <a class="m-0 float-right btn btn-dark btn-sm" href="{{route('add.notes')}}">Add Notes <i
                        class="fas fa-chevron-right"></i></a>
                        @endif
                  </div>

                  @if ($noteslist->isEmpty())
                  <p class="text-center text-muted my-3">No data available</p>
                  @else

                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th>Id</th>
                        <th>Subject</th>
                        <th>Class</th>
                        <th>Title</th>
                        
                       
                        <th class="col-3">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                      @foreach($noteslist as $key => $note)

                      <tr>
                        <td><a href="#">{{$key+1}}</a></td>
                        <td>{{$note->subject}}</td>
                        <td>
                           {{$note->class}}
                        </td>
                        <td>{{$note->title}}</td>
                       
                        <td>
                          {{-- <a href="#" class="btn btn-sm btn-primary" id="pdf-button" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="bi bi-pencil-square"></i></a> --}}
                          <a href="javascript:void(0)" onclick="confirmDelete('{{url('admin/school/deletenote')}}/{{encrypt($note->id)}}')" class="btn btn-sm btn-danger" id="pdf-button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="bi bi-trash"></i></a>
                          {{-- <a href="#" class="btn btn-sm btn-dark" id="pdf-button" data-bs-toggle="tooltip" data-bs-placement="top" title="Changed Status"><i class="bi bi-toggle-on"></i> </a> --}}
                          @if($note->notes_pdf != null)
                          
                          <a href="{{url('notesdetails/'.$note->notes_pdf)}}" download class="btn btn-sm btn-info"  id="pdf-button" data-bs-toggle="tooltip" data-bs-placement="top" title="Download Note"><i class="bi bi-cloud-arrow-down"></i> </a>
                          @endif
                          @if($note->notes_pdf != null)
                          <a href="{{url('/admin/school/notes-video')}}/{{encrypt($note->id)}}" class="btn  btn-sm video-button btn-success"><i class="bi bi-play-btn-fill"></i></a>
                          @endif
                        </td>
                      </tr>

                      @endforeach
                    </tbody>
                  </table>
                  @endif
                </div>
              
                <div class="card-footer">
                  <div>
                    {{$noteslist->links('pagination::bootstrap-5')}}
                  </div>
                </div>
              </div>
            </div>
           

        

        </div>
        <!---Container Fluid-->
      
     @endsection

     <script>
      function confirmDelete(url){
        if(confirm('Are you sure you want to delete this note?')){
          window.location.href = url;
        }
      }
     </script>