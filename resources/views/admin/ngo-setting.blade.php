@extends('admin.layout.main')

@Section('main-container')

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">NGO | Setting</h1>
           
          </div>

         


            <!-- Invoice Example -->
            <div class="col-xl-12 col-lg-12 mb-4">
              <div class="card">
              
                

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

                            <form action="{{url('admin/ngo-setting-update')}}/{{encrypt(1)}}" method="POST">
                              @csrf
                               

                                <div class="form-group">
                                  <label for="exampleInputEmail1">Email</label>
                                  <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="{{$data->email}}" aria-describedby="emailHelp"
                                    placeholder="Enter email">
                                 
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Contact No</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="contact" value="{{$data->contact}}" aria-describedby="emailHelp"
                                      placeholder="Enter contact no.">
                                   
                                  </div>

                                  
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Facebook</label>
                                    <input type="url" class="form-control" id="exampleInputEmail1" name="facebook" value="{{$data->facebook}}" aria-describedby="emailHelp"
                                      placeholder="Paste URL">
                                   
                                  </div>


                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Twitter</label>
                                    <input type="url" class="form-control" id="exampleInputEmail1" name="twitter" value="{{$data->twitter}}" aria-describedby="emailHelp"
                                      placeholder="Paste URL">
                                   
                                  </div>

                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Instagram</label>
                                    <input type="url" class="form-control" id="exampleInputEmail1" name="instagram" value="{{$data->instagram}}" aria-describedby="emailHelp"
                                      placeholder="Paste URL">
                                   
                                  </div>

                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Linkdin</label>
                                    <input type="url" class="form-control" id="exampleInputEmail1" name="linkdin" value="{{$data->linkdin}}" aria-describedby="emailHelp"
                                      placeholder="Paste URL">
                                   
                                  </div>

                                  <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Company Address</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="address" placeholder="Enter address" rows="3">{{$data->address}}</textarea>
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