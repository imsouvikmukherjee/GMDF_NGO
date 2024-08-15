@extends('admin.layout.main')

@Section('main-container')

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add User Credential</h1>
           
          </div>

         
            <!-- Invoice Example -->
            <div class="col-xl-12 col-lg-12 mb-4">
              <div class="card">
              
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between text-dark">
                    <!-- <h6 class="m-0 font-weight-bold">Fund Details</h6> -->
                    {{-- <a href="{{route('NGO.school')}}" class=" btn btn-sm btn-light"><i class="bi bi-arrow-90deg-left"></i> Back</a> --}}
                    
                  </div>

                  <div class="card-body">
                  <div class="container">
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">
                          @if ($errors->any())
                          <div class="alert alert-danger">
                              <ul>
                                  @foreach ($errors->all() as $error)
                                      <li>{{ $error }}</li>
                                  @endforeach
                              </ul>
                          </div>
                      @endif

                      @if(session('success'))
                      <div class="alert alert-success text-center alert-dismissible fade show" role="alert"">
                          {{ session('success') }}
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      
                  @endif

                      @php
                          
                        $schoolname = session('schoolname');
                      @endphp
                
                            <form action="{{route('add.user.store')}}" method="POST">

                               @csrf

                                <div class="form-group">
                                  <label for="exampleInputEmail1">School Name</label>
                                  <input type="text" class="form-control" id="exampleInputEmail1"  value="{{$schoolname}}" aria-describedby="emailHelp"
                                    placeholder="Enter school name" disabled>
                                    <input type="hidden" class="form-control" id="exampleInputEmail1" name="schoolname" value="{{$schoolname}}" aria-describedby="emailHelp"
                                    placeholder="Enter school name">
                                 
                                </div>
                                

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="{{old('name')}}" aria-describedby="emailHelp"
                                      placeholder="Enter email">
                                   
                                  </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="email" value="{{old('email')}}" aria-describedby="emailHelp"
                                      placeholder="Enter email">
                                   
                                  </div>

                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Contact No.</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="contact" value="{{old('contact')}}" aria-describedby="emailHelp"
                                      placeholder="Enter contact no.">
                                   
                                  </div>

                                  
                               
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputEmail1" name="password" aria-describedby="emailHelp"
                                      placeholder="**********">
                                   
                                  </div>

                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Confirm Password</label>
                                    <input type="password" class="form-control" id="exampleInputEmail1" name="password_confirmation" aria-describedby="emailHelp"
                                      placeholder="**********">
                                   
                                  </div>

                                  <div class="form-group">
                                    <label for="exampleFormControlSelect1">Select User Type</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="usertype">
                                      <option selected disabled>Select usertype</option>
                                      <option value="Student">Student</option>
                                      <option value="Teacher">Teacher</option>
                                     
                                    </select>  
                                  </div>                      
                                
                                <button type="submit" class="btn btn-primary px-3 d-block mx-auto mt-4">Add</button>
                              </form>
                        </div>
                        <div class="col-sm-2"></div>
                    </div>
                  </div>
                  </div>
               
                <div class="card-footer"></div>
              </div>
            </div>
           

        

        </div>
        <!---Container Fluid-->
      
    @endsection