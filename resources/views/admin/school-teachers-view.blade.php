@extends('admin.layout.main')

@Section('main-container')

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Teacher Details</h1>
           
          </div>

         
            <!-- Invoice Example -->
            <div class="col-xl-12 col-lg-12 mb-4">
              <div class="card">
              
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between text-dark">
                    <!-- <h6 class="m-0 font-weight-bold">Fund Details</h6> -->
                    <a href="{{route('school.teacher')}}" class=" btn btn-sm btn-light" ><i class="bi bi-arrow-90deg-left"></i> Back</a>
                    <a class="m-0 float-right btn btn-light btn-sm" href="#" onclick="printPage()"><i class="bi bi-printer-fill" ></i> Print</a>
                  </div>

                <div class="table-responsive" id="show">
                  <table class="table align-items-center table-flush">
                   
                    <tbody>
                      <tr>
                        <th>Sr No.</th>
                        <td>1</td>
                      </tr>

                      <tr>
                        <th>Teacher's Id</th>
                        <td>{{$data->contact}}</td>
                      </tr>

                      <tr>
                        <th>School Name</th>
                        <td>{{$data->schoolname}}</td>
                      </tr>

                      <tr>
                        <th>Name</th>
                        <td>{{$data->name}}</td>

                      <tr>
                        <th>Email</th>
                        <td>{{$data->email}}</td>
                      </tr>

                      <tr>
                        <th>Contact No.</th>
                        <td>{{$data->contact}}</td>
                      </tr>

                      <tr>
                        <th>Gender</th>
                        <td>{{$data->gender}}</td>
                      </tr>

                      <tr>
                        <th>Date of Birth</th>
                        <td>{{$data->dateofbirth}}</td>
                      </tr>

                      <tr>
                        <th>Joining Date</th>
                        <td>{{$data->dateofjoining}}</td>
                      </tr>

                     


                      

                      

                      <tr>
                        <th>Full Address</th>
                        <td>{{$data->address}}</td>
                      </tr>

                      

                      <tr>
                        <th>Blood Group</th>
                        <td>{{$data->bloodgroup}}</td>
                      </tr>
                     

                      <tr>
                        <th>Designation / Role</th>
                      
                        <td>{{$data->designation}}</td>
                      </tr>

                  
                      <tr>
                        <th>Document of Teacher</th>
                        <td><a href="{{url('studentdetails/'.$data->teacherdocument)}}" download>Download</a></td>
                      </tr>
                      {{-- <tr>
                        <th>Created_at</th>
                      
                        <td>{{$data->created_at}}</td>
                      </tr>
                      
  
                      <tr>
                        <th>Updated_at</th>
                      @if($data->updated_at == null)
                      <p class="text-muted">Not updated yet</p>
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