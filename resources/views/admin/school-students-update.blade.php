@extends('admin.layout.main')

@Section('main-container')

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Update Students</h1>
           
          </div>

         
            <!-- Invoice Example -->
            <div class="col-xl-12 col-lg-12 mb-4">
              <div class="card">
              
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between text-dark">
                    <!-- <h6 class="m-0 font-weight-bold">Fund Details</h6> -->
                    <a href="{{route('school.students')}}" class=" btn btn-sm btn-light"><i class="bi bi-arrow-90deg-left"></i> Back</a>
                    <!-- <a class="m-0 float-right btn btn-dark btn-sm" href="news.html">Manage News <i -->
                        <!-- class="fas fa-chevron-right"></i></a> -->
                  </div>

                  <div class="card-body">
                  <div class="container">
                    <div class="row">
                        
                        <div class="col-sm-12">

                          @if ($errors->any())
                              <div class="alert alert-danger">
                                  <ul>
                                      @foreach ($errors->all() as $error)
                                          <li>{{ $error }}</li>
                                      @endforeach
                                  </ul>
                              </div>
                          @endif

                            <form action="{{url('/admin/school/student-update-store')}}/{{encrypt($studentlist->id)}}" method="POST" enctype="multipart/form-data">
                              @csrf

                              {{-- <div class="form-group">
                                <label for="exampleFormControlSelect1">Select Student</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="student_id">
                                  <option disabled selected>Choose</option>
                                  
                                @foreach($studentlist as $students)
                                  <option value="{{$students->id}}" {{old('student') == $students->id? 'selected':''}} >{{$students->name}}</option>
                                @endforeach
                                 
                                 
                                 
                                </select>
                             
                        </div> --}}

                        

                              <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Select Class</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="class">
                                          <option disabled selected>Choose</option>
                                          
                                          @foreach($classdata as $class)
                                          <option value="{{$class->class}}" {{$studentlist->class == $class->class? 'selected':''}}>{{$class->class}}</option>
                                          @endforeach
                                         
                                         
                                        </select>
                                     
                                </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Select Section</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="section">
                                          <option disabled selected>Choose</option>
                                        
                                          @foreach($sectiondata as $section)
                                          <option value="{{$section->sectionid}}" {{$studentlist->section == $section->sectionid? 'selected':''}}>{{'Class: '.$section->class.' - '.'Section: '.$section->section}}</option>
                                          @endforeach
                                        
                                         
                                        </select>
                                     
                                </div>
                                </div>
                              </div>

                                  <div class="form-group">
                                    <label for="exampleFormControlSelect1">Gender</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="gender">
                                      <option disabled selected>Choose</option>
                                      <option value="Male" {{$studentlist->gender == 'Male'? 'selected':''}}>Male</option>
                                      <option value="Female" {{$studentlist->gender == 'Female'? 'selected':''}}>Female</option>
                                      <option value="Other" {{$studentlist->gender == 'Other'? 'selected':''}}>Other</option>
                                     
                                    </select>
                                 
                            </div>
                                 

                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="fileInput1">Date of Birth</label>
                                        <input type="date" value="{{$studentlist->dateofbirth}}" placeholder="Enter name" name="dateofbirth" class="form-control" id="fileInput1">
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="fileInput2">Document of Student (Adhar / Pan / TC Certificate as pdf)</label>
                                        <input type="file" placeholder="Enter email" name="documentofstudent" class="form-control" id="fileInput2">
                                      </div>

                                      <div class="container-fluid">
                                        <div class="row mb-4">
                                            <div class="col-sm-2"></div>
                                            <div class="col-sm-8">
                                                <iframe src="{{url('studentdetails/'.$studentlist->documentofstudent)}}" class="img-fluid" alt="News Image">
                                                
                                                </iframe>
                                            </div>
                                            <div class="col-sm-2"></div>
                                        </div>
                                      </div>

                                    </div>
                                  </div>

                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="fileInput1">Guardian's Name</label>
                                        <input type="text" placeholder="Enter guardian's name" name="gurdiansname" value="{{$studentlist->gurdiansname}}" class="form-control" id="fileInput1">
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="fileInput2">Guardian's Contact No.</label>
                                        <input type="text" placeholder="Enter gurdian's no." name="gurdianscontact" value="{{$studentlist->gurdianscontact}}" class="form-control" id="fileInput2">
                                      </div>
                                    </div>
                                  </div>

                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="fileInput1">Another Contact No. (Optional)</label>
                                        <input type="text" placeholder="Enter guardian's name" name="optionalcontact" value="{{$studentlist->optionalcontact}}" class="form-control" id="fileInput1">
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="fileInput2">Gurdian's Email (Optional)</label>
                                        <input type="text" placeholder="Enter gurdian's email" name="gurdiansemail" value="{{$studentlist->gurdiansemail}}" class="form-control" id="fileInput2">
                                      </div>
                                    </div>
                                  </div>

                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="fileInput1">Student Picture</label>
                                        <input type="file" placeholder="Enter guardian's name" name="studentpicture" class="form-control" id="fileInput1">
                                      </div>

                                      <div class="container-fluid">
                                        <div class="row mb-4">
                                            <div class="col-sm-2"></div>
                                            <div class="col-sm-8">
                                                <img src="{{url('studentdetails/'.$studentlist->studentpicture)}}" class="img-fluid" alt="News Image">
                                                
                                               
                                            </div>
                                            <div class="col-sm-2"></div>
                                        </div>
                                      </div>

                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="fileInput2">Document of Parents (Adhar Card / Pan Card / Voter ID as pdf)</label>
                                        <input type="file" placeholder="Enter email" name="documentofparent" class="form-control" id="fileInput2">
                                      </div>

                                      <div class="container-fluid">
                                        <div class="row mb-4">
                                            <div class="col-sm-2"></div>
                                            <div class="col-sm-8">
                                                <iframe src="{{url('studentdetails/'.$studentlist->documentofparent)}}" class="img-fluid"  alt="News Image">
                                                
                                                </iframe>
                                            </div>
                                            <div class="col-sm-2"></div>
                                        </div>
                                      </div>

                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Parmanent Address</label>
                                    <textarea class="form-control" placeholder="Enter parmanent address" name="parmanentaddress" id="exampleFormControlTextarea1" rows="3">{{$studentlist->parmanentaddress}}</textarea>
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Current Address</label>
                                    <textarea class="form-control" placeholder="Enter current address" name="currentaddress" id="exampleFormControlTextarea1" rows="3">{{$studentlist->currentaddress}}</textarea>
                                  </div>

                                  <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Blood Group</label>
                                            <select class="form-control" id="exampleFormControlSelect1" name="bloodgroup">
                                              <option disabled selected>Choose</option>
                                              <option value="A+" {{$studentlist->bloodgroup == 'A+'? 'selected':''}}>A+</option>
                                              <option value="A" {{$studentlist->bloodgroup == 'A'? 'selected':''}}>A-</option>
                                              <option value="B+" {{$studentlist->bloodgroup == 'B+'? 'selected':''}}>B+</option>
                                              <option value="B-" {{$studentlist->bloodgroup == 'B-'? 'selected':''}}>B-</option>
                                              <option value="AB+" {{$studentlist->bloodgroup == 'AB+'? 'selected':''}}>AB+</option>
                                              <option value="AB-" {{$studentlist->bloodgroup == 'AB-'? 'selected':''}}>AB-</option>
                                              <option value="O+" {{$studentlist->bloodgroup == 'O+'? 'selected':''}}>O+</option>
                                              <option value="O-" {{$studentlist->bloodgroup == 'O-'? 'selected':''}}>O-</option>
                                             
                                            </select>
                                         
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="fileInput2">Roll No.</label>
                                        <input type="text" placeholder="Enter email" name="rollno" value="{{$studentlist->rollno}}" class="form-control" id="fileInput2">
                                      </div>
                                    </div>
                                  </div>

                                  

                              
                                 

                                 
                                
                                <button type="submit" class="btn btn-primary px-3 d-block mx-auto">Save</button>
                              </form>
                        </div>
                        
                    </div>
                  </div>
                  </div>
               
                <div class="card-footer"></div>
              </div>
            </div>
           

        

        </div>
        <!---Container Fluid-->
      
     @endsection