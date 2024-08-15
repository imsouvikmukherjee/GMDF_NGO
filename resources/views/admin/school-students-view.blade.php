@extends('admin.layout.main')

@Section('main-container')

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Student Details</h1>
           
          </div>

         
            <!-- Invoice Example -->
            <div class="col-xl-12 col-lg-12 mb-4">
              <div class="card">
              
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between text-dark">
                    <!-- <h6 class="m-0 font-weight-bold">Fund Details</h6> -->
                    <a href="{{route('school.students')}}" class=" btn btn-sm btn-light" ><i class="bi bi-arrow-90deg-left"></i> Back</a>
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
                        <th>Student Id</th>
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
                        <th>Guardian's Name</th>
                        <td>{{$data->gurdiansname}}</td>
                      </tr>

                      <tr>
                        <th>Guardian's Contact No.</th>
                        <td>{{$data->gurdianscontact}}</td>
                      </tr>

                      <tr>
                        <th>Another Contact No. (Optional)</th>
                        @if($data->optionalcontact != null)
                        <td>
                         
                          {{$data->optionalcontact}}
                        </td>
                        @else
                        <td><p class="text-muted">Not available</p></td>
                        @endif
                      </tr>

                      <tr>
                        <th>Gurdian's Email (Optional)</th>
                        @if($data->gurdiansemail != null)
                        <td>
                         
                          {{$data->gurdiansemail}}
                        </td>
                        @else
                        <td><p class="text-muted">Not available</p></td>
                        @endif
                      </tr>

                      <tr>
                        <th>Student Image</th>
                        <td><img src="{{url('studentdetails/'.$data->studentpicture)}}" width="150px" height="150px" alt="" srcset=""></td>
                      </tr>

                      <tr>
                        <th>Parmanent Address</th>
                        <td>{{$data->parmanentaddress}}</td>
                      </tr>

                      <tr>
                        <th>Current Address</th>
                        <td>{{$data->currentaddress}}</td>
                      </tr>

                      <tr>
                        <th>Blood Group</th>
                        <td>{{$data->bloodgroup}}</td>
                      </tr>

                      <tr>
                        <th>Roll No.</th>
                        <td>{{$data->rollno}}</td>
                      </tr>

                      <tr>
                        <th>Class</th>
                        <td>{{$data->class}}</td>
                      </tr>

                      <tr>
                        <th>Section</th>
                        <td>{{$additionaldata->section}}</td>
                      </tr>

                     

                    

                      
                      <tr>
                        <th>Student QR</th>
                        <td><img src="{{url('admin-asset/img/qr.png')}}" width="150px" height="150px" alt="" srcset=""></td>
                      </tr>

                     
                      
                    </tbody>
                  </table>
                </div>


                <div class="table-responsive" id="download" >
                  <table class="table align-items-center table-flush">
                    <tr>
                      <th>Document of Student</th>
                      <td><a href="{{url('studentdetails/'.$data->documentofstudent)}}" download>Download</a></td>
                    </tr>
                  
                    
                    <tr>
                      <th>Document of Parents</th>
                      <td><a href="{{url('studentdetails/'.$data->documentofparent)}}" download>Download</a></td>
                    </tr>
                    <tr>
                      <th>Created_at</th>
                      <td>{{$data->created_at}}</td>
                    </tr>
                    

                    <tr>
                      <th>Updated_at</th>
                      <td>
                        @if($data->updated_at == null)
                          <p class="text-muted">Not updated yet</p>
                        @else
                        {{$data->updated_at}}
                        @endif
                      </td>
                    </tr>
                   
                    
                    
                      
                      
                    </tbody>
                  </table>
                </div>

                
                <div class="card-footer"></div>
              </div>
            </div>
           

        

        </div>
        <!---Container Fluid-->
      
      @endsection