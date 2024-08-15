@extends('admin.layout.main')

@Section('main-container')

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add Notice | School</h1>
           
          </div>

         
            <!-- Invoice Example -->
            <div class="col-xl-12 col-lg-12 mb-4">
              <div class="card">
              
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between text-dark">
                    <!-- <h6 class="m-0 font-weight-bold">Fund Details</h6> -->
                    <a href="{{route('school.notice')}}" class=" btn btn-sm btn-light"><i class="bi bi-arrow-90deg-left"></i> Back</a>
                    <!-- <a class="m-0 float-right btn btn-dark btn-sm" href="news.html">Manage News <i -->
                        <!-- class="fas fa-chevron-right"></i></a> -->
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

                            <form action="{{route('add.school.notice.store')}}" method="POST">
                              @csrf

                              <div class="form-group">
                              
                                <select class="form-control" id="exampleFormControlSelect1" name="schoolid">
                                  <option selected disabled>Select School</option>
                                  @foreach($schoollist as $item)
                                    @if($item->status == 1)
                                    <option value="{{$item->id}}" {{session('schoolname') == $item->schoolname? 'selected':''}}>{{$item->schoolname}}</option>
                                    @endif
                                  @endforeach  
                                </select>

                              </div> 

                                <div class="form-group">
                                  <label for="exampleInputEmail1"> Title</label>
                                  <input type="text" class="form-control" id="exampleInputEmail1" value="{{old('title')}}" aria-describedby="emailHelp"
                                    placeholder="Enter title" name="title">
                                 
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1"> Description</label>
                                    <textarea class="form-control" id="editor" rows="5" placeholder="Enter description " cols="7" name="description">{{old('description')}}</textarea>
                                    
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