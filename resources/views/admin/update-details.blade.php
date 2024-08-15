@extends('admin.layout.main')

@Section('main-container')

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add School Details</h1>
           
          </div>

         
            <!-- Invoice Example -->
            <div class="col-xl-12 col-lg-12 mb-4">
              <div class="card">
              
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between text-dark">
                    <!-- <h6 class="m-0 font-weight-bold">Fund Details</h6> -->
                    <a href="{{route('manage.school')}}" class=" btn btn-sm btn-light"><i class="bi bi-arrow-90deg-left"></i> Back</a>
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

                      @if(session('success'))
                      <div class="alert alert-success text-center alert-dismissible fade show" role="alert"">
                          {{ session('success') }}
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      
                  @endif

                 

                            <form action="{{url('admin/school/details-update-store')}}/{{encrypt($data->schooldetails_id)}}" method="POST" enctype="multipart/form-data">
                              @csrf

                              <div class="form-group">
                                {{-- <label for="exampleFormControlTextarea1">School Name</label>
                                <input type="text" value="{{$schoolname}}" class="form-control" id="fileInput1" disabled>
                                <input type="hidden" value="{{$schoolname}}" name="schoolname" class="form-control" id="fileInput1" disabled> --}}
                                
                                <select class="form-control" id="exampleFormControlSelect1" name="school_name">
                                  <option selected disabled>Select School</option>
                                  @foreach($uniqueUsers as $item)
                                    @if($item->status == 1)
                                    <option value="{{$item->id}}" {{session('schoolname') == $item->schoolname? 'selected':''}}>{{$item->schoolname}}</option>
                                    @endif
                                  @endforeach
                                </select>

                              </div> 

                              

                                <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="fileInput1">Upload Banner</label>
                                        <input type="file" class="form-control" name="banner" id="fileInput1">
                                      </div>
                                      <div class="container-fluid">
                                        <div class="row mb-4">
                                            <div class="col-sm-2"></div>
                                            <div class="col-sm-8">
                                                <img src="{{url('school_img/'.$data->banner)}}" class="img-fluid" alt="News Image">
                                            </div>
                                            <div class="col-sm-2"></div>
                                        </div>
                                      </div>

                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="fileInput2">Upload Logo</label>
                                        <input type="file" class="form-control" name="logo" id="fileInput2">
                                      </div>

                                      <div class="container-fluid">
                                        <div class="row mb-4">
                                            <div class="col-sm-2"></div>
                                            <div class="col-sm-8">
                                                <img src="{{url('school_img/'.$data->logo)}}" class="img-fluid" alt="News Image">
                                            </div>
                                            <div class="col-sm-2"></div>
                                        </div>
                                      </div>

                                    </div>
                                  </div>
                                   

                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">About Us</label>
                                    <textarea class="form-control" id="editor" rows="5" name="about" placeholder="Enter about school " cols="7">{{$data->about}}</textarea>
                                    
                                  </div>

                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="fileInput1">Email</label>
                                        <input type="text" placeholder="Enter email" name="email" value="{{$data->showemail}}" class="form-control" id="fileInput1" >
                                        {{-- <input type="hidden" placeholder="Enter email" value="{{$email}}" name="email" class="form-control" id="fileInput1" disabled> --}}
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="fileInput2">Contact No</label>
                                        <input type="text" placeholder="Enter contact no." name="contact" value="{{$data->showcontact}}" class="form-control" id="fileInput2" >
                                        {{-- <input type="hidden" placeholder="Enter contact no." value="{{$contact}}" name="contact" class="form-control" id="fileInput2" disabled> --}}
                                      </div> 
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="exampleFormControlTextarea1">School Address</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="address" placeholder="Enter school address">{{$data->address}}</textarea>
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