@extends('admin.layout.main')

@Section('main-container')

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add Student Credentials</h1>
           
          </div>

         
            <!-- Invoice Example -->
            <div class="col-xl-12 col-lg-12 mb-4">
              <div class="card">
              
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between text-dark">
                    <!-- <h6 class="m-0 font-weight-bold">Fund Details</h6> -->
                    <a href="{{route('school.students')}}" class=" btn btn-sm btn-light"><i class="bi bi-arrow-90deg-left"></i> Back</a>
                 
                  </div>

                  <div class="card-body">
                  <div class="container">
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">
                            <form>

                               

                                <div class="form-group">
                                  <label for="exampleInputEmail1">School Name</label>
                                  <input type="text" class="form-control" id="exampleInputEmail1" value="abc modern school" aria-describedby="emailHelp"
                                     readonly>
                                 
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Student Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name" aria-describedby="emailHelp">
                                   
                                  </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                      placeholder="Enter email">
                                   
                                  </div>

                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Contact No.</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                      placeholder="Enter contact no.">
                                   
                                  </div>

                                  
                               
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                      placeholder="**********">
                                   
                                  </div>

                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Confirm Password</label>
                                    <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                      placeholder="**********">
                                   
                                  </div>
                              
                                
                                <button type="submit" class="btn btn-primary px-3 d-block mx-auto">Add</button>
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