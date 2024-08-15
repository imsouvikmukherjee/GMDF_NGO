@extends('admin.layout.main')

@Section('main-container')

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add Teacher Details</h1>
           
          </div>

         
            <!-- Invoice Example -->
            <div class="col-xl-12 col-lg-12 mb-4">
              <div class="card">
              
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between text-dark">
                    <!-- <h6 class="m-0 font-weight-bold">Fund Details</h6> -->
                    <a href="{{route('school.teacher')}}" class=" btn btn-sm btn-light"><i class="bi bi-arrow-90deg-left"></i> Back</a>
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

                            <form action="{{route('add.teacher.details.store')}}" method="POST" enctype="multipart/form-data">
                              @csrf

                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="exampleFormControlSelect1">School</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="school">

                                      <option disabled selected>Choose</option>
                                      @foreach($schoollist as $item)
                                      @if($item->status == 1)
                                      <option value="{{$item->id}}" {{session('schoolname') == $item->schoolname? 'selected':''}}>{{$item->schoolname}}</option>
                                      @endif
                                      @endforeach
                                     
                                     
                                    </select>
                                 
                            </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="exampleFormControlSelect1">Select Teacher</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="teacher">
                                      <option disabled selected>Choose</option>
                                      @foreach($teacherlist as $item)
                                      <option value="{{$item->id}}" {{old('teacher') == $item->id? 'selected':''}}>{{$item->name}}</option>
                                      @endforeach
                                     
                                     
                                    </select>
                                 
                            </div>                                          
      
                                </div>
                              </div>
                               
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="exampleFormControlSelect1">Gender</label>
                              <select class="form-control" id="exampleFormControlSelect1" name="gender">
                                <option disabled selected>Choose</option>
                                <option value="Male" {{old('gender') == 'Male'? 'selected':''}}>Male</option>
                                <option value="Female" {{old('gender') == 'Female'? 'selected':''}}>Female</option>
                                <option value="Other" {{old('gender') == 'Other'? 'selected':''}}>Other</option>
                               
                              </select>
                           
                      </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="exampleFormControlSelect1">Blood Group</label>
                              <select class="form-control" id="exampleFormControlSelect1" name="bloodgroup">
                                <option disabled selected>Choose</option>
                                <option value="A+" {{old('bloodgroup') == 'A+'?'selected':''}}>A+</option>
                                <option value="A-" {{old('bloodgroup') == 'A-'?'selected':''}}>A-</option>
                                <option value="B+" {{old('bloodgroup') == 'B+'?'selected':''}}>B+</option>
                                <option value="B-" {{old('bloodgroup') == 'B-'?'selected':''}}>B-</option>
                                <option value="AB+" {{old('bloodgroup') == 'AB+'?'selected':''}}>AB+</option>
                                <option value="AB-" {{old('bloodgroup') == 'AB-'?'selected':''}}>AB-</option>
                                <option value="O+" {{old('bloodgroup') == 'O+'?'selected':''}}>O+</option>
                                <option value="O-" {{old('bloodgroup') == 'O-'?'selected':''}}>O-</option>
                               
                              </select>
                           
                      </div>                                          

                          </div>
                        </div>

                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="fileInput1">Date of Birth</label>
                                        <input type="date" placeholder="Enter name" class="form-control" id="fileInput1" name="dateofbirth" value="{{old('dateofbirth')}}">
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="fileInput2">Date of Joining</label>
                                        <input type="date" placeholder="Enter email" class="form-control" id="fileInput2" name="dateofjoining" value="{{old('dateofjoining')}}">
                                      </div>
                                    </div>
                                  </div>

                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="fileInput1">Designation/Role</label>
                                        <input type="text" placeholder="Enter Designation" class="form-control" id="fileInput1" name="designation" value="{{old('designation')}}">
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="fileInput2">Document (Adhar Card / Pan Card /  Driving License as pdf)</label>
                                        <input type="file" placeholder="Enter email" class="form-control" id="fileInput2" name="teacherdocument">
                                      </div>
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Full Address</label>
                                    <textarea class="form-control" placeholder="Enter address" name="address" id="exampleFormControlTextarea1" rows="3">{{old('address')}}</textarea>
                                  </div>

                                
                                 

                                 
                                
                                <button type="submit" class="btn btn-primary px-3 d-block mx-auto">Add</button>
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