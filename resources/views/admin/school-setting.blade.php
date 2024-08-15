@extends('admin.layout.main')

@Section('main-container')

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">School | Setting</h1>
           
          </div>

          @if(session('success'))
          <div class="alert alert-success text-center alert-dismissible fade show" role="alert"">
              {{ session('success') }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          
      @endif
         
            <!-- Invoice Example -->
            <div class="col-xl-12 col-lg-12 mb-4">
              <div class="card">
              
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between text-dark">
                  <!-- <h6 class="m-0 font-weight-bold">Fund Details</h6> -->
                  <a href="" class=" btn btn-sm btn-light" style="display: none;"><i class="bi bi-arrow-90deg-left"></i> Back</a>
                  <a class="m-0 float-right btn btn-dark btn-sm" href="{{route('school.setting.view')}}">View Details <i
                      class="fas fa-chevron-right"></i></a>
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


                            <form action="{{route('school.setting.store')}}" method="POST">
                              @csrf

                              <div class="form-group">
                                <label for="exampleInputEmail1">School Name</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="school">
                                  <option selected disabled>Choose</option>
                                  @foreach($schoollist as $item)
                                  @if($item->status == 1)
                                  <option value="{{$item->id}}" {{session('schoolname') == $item->schoolname? 'selected':''}}>{{$item->schoolname}}</option>
                                  @endif
                                @endforeach
                                </select>
                               
                              </div>

                                <div class="form-group">
                                  <label for="exampleInputEmail1">Email</label>
                                  <input type="email" class="form-control" id="exampleInputEmail1"   aria-describedby="emailHelp"
                                    placeholder="Enter email" name="email" value="{{old('email')}}">
                                 
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Contact No</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp"
                                      placeholder="Enter contact no." name="contact" value="{{old('contact')}}">
                                   
                                  </div>

                                  
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Facebook</label>
                                    <input type="url" class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp"
                                      placeholder="Paste URL" name="facebook" value="{{old('facebook')}}">
                                   
                                  </div>


                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Twitter</label>
                                    <input type="url" class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp"
                                      placeholder="Paste URL" name="twitter" value="{{old('twitter')}}">
                                   
                                  </div>

                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Instagram</label>
                                    <input type="url" class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp"
                                      placeholder="Paste URL" name="instagram" value="{{old('instagram')}}">
                                   
                                  </div>

                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Linkdin</label>
                                    <input type="url" class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp"
                                      placeholder="Paste URL" name="linkdin" value="{{old('linkdin')}}">
                                   
                                  </div>

                                  <div class="form-group">
                                    <label for="exampleFormControlTextarea1">School Address</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="address" placeholder="Enter address" rows="3">{{old('address')}}</textarea>
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