@extends('admin.layout.main')

@Section('main-container')

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">School Details</h1>
           
          </div>

         
            <!-- Invoice Example -->
            <div class="col-xl-12 col-lg-12 mb-4">
              <div class="card">
              
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between text-dark">
                    <!-- <h6 class="m-0 font-weight-bold">Fund Details</h6> -->
                    <a href="" class=" btn btn-sm btn-light" style="display: none;"><i class="bi bi-arrow-90deg-left"></i> Back</a>
                    <a class="m-0 float-right btn btn-light btn-sm" href="{{route('manage.school')}}"><i class="bi bi-arrow-90deg-left"></i> Back</a>
                  </div>

                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                   
                    <tbody>
                      <tr>
                        <th>Sr No.</th>
                        <td>1</td>
                      </tr>

                      <tr>
                        <th>School Name</th>
                        <td>{{$data->schoolname}}</td>
                      </tr>

                      <tr>
                        <th>Banner</th>
                        <td><img src="{{url('school_img/'.$data->banner)}}" width="180px" height="120px" alt=""></td>
                      </tr>

                      <tr>
                        <th>Logo</th>
                        <td><img src="{{url('school_img/'.$data->logo)}}" width="180px" height="120px" alt=""></td>

                      <tr>
                        <th>About Us</th>
                        <td>{!!$data->about!!}</td>
                      </tr>

                      <tr>
                        <th>Login Email</th>
                        <td>{{$data->email}}</td>
                      </tr>

                      <tr>
                        <th>View Email</th>
                        <td>{{$data->showemail}}</td>
                      </tr>

                      <tr>
                        <th>Login Contact No</th>
                        <td>{{$data->contact}}</td>
                      </tr>

                      <tr>
                        <th>View Contact No</th>
                        <td>{{$data->showcontact}}</td>
                      </tr>

                      <tr>
                        <th>School Address</th>
                        <td>{{$data->address}}</td>
                      </tr>

                     
                      

                      <tr>
                        <th>School Details Created_at</th>
                        @if($data->created_at == null)
                          <p class="text-center text-muted">Invalid Date</p>
                        @else
                        <td>{{$data->created_at}}</td>
                        @endif
                      </tr>

                      <tr>
                        <th>Updated_at</th>
                        @if($data->updated_at != null)
                        <td>{{$data->updated_at}}</td>
                      
                        
                        @endif
                      </tr>

                      {{-- <tr>
                        <th>Updated_at</th>
                        @if($data->updated_at == null)
                          <p class="text-center text-muted">Not updated yet</p>
                        @else
                        <td>{{$data->updated_at}}</td>
                        @endif
                      </tr> --}}
                     
                      
                      
                    </tbody>
                  </table>
                </div>
                <div class="card-footer"></div>
              </div>
            </div>
           

        

        </div>
        <!---Container Fluid-->
      
     @endsection