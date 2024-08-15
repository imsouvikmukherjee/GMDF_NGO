@extends('admin.layout.main')

@Section('main-container')

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">User Profile</h1>
           
          </div>

         
            <!-- Invoice Example -->
            <div class="col-xl-12 col-lg-12 mb-4">
              <div class="card">
              
               

                  <div class="card-body">
                  <div class="container">
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">
                            <form>

                               

                                <div class="form-group">
                                  <label for="exampleInputEmail1">Old Password</label>
                                  <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                    placeholder="**********">
                                 
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">New Password</label>
                                    <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                      placeholder="**********">
                                   
                                  </div>

                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Confirm Password</label>
                                    <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                      placeholder="**********">
                                   
                                  </div>

                              

                                 
                                
                                <button type="submit" class="btn btn-primary px-3 d-block mx-auto">Save</button>
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