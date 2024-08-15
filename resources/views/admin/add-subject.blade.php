@extends('admin.layout.main')

@Section('main-container')

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add Subject | School</h1>
           
          </div>

         
            <!-- Invoice Example -->
            <div class="col-xl-12 col-lg-12 mb-4">
              <div class="card">
              
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between text-dark">
                    <!-- <h6 class="m-0 font-weight-bold">Fund Details</h6> -->
                    <a href="{{route('school.subject')}}" class=" btn btn-sm btn-light"><i class="bi bi-arrow-90deg-left"></i> Back</a>
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

                            <form action="{{route('add.subject.store')}}" method="POST">
                              @csrf

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

                        <div class="form-group">
                          <label for="exampleFormControlSelect1">Select Teacher</label>
                          <select class="form-control" id="exampleFormControlSelect1" name="teacher">
                            <option disabled selected>Choose</option>
                            @foreach($teacherlist as $item)
                            <option value="{{$item->id}}" {{old('teacher') == $item->id? 'selected':''}}>{{$item->name}}</option>
                            @endforeach
                           
                           
                          </select>
                       
                  </div>  

                        <div class="form-group">
                          <label for="exampleFormControlSelect1">Select Class</label>
                          <select class="form-control" id="exampleFormControlSelect1" name="class">
                            <option disabled selected>Choose</option>
                            @foreach($classlist as $item)
                            <option value="{{$item->id}}" {{old('class') == $item->id? 'selected':''}}>{{$item->class}}</option>
                           @endforeach
                           
                          </select>
                       
                  </div>
                               

                                <div class="form-group">
                                  <label for="exampleInputEmail1">Subject Name</label>
                                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                    placeholder="Enter subject name" name="subject" value="{{old('subject')}}">
                                 
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Description</label>
                                    <textarea class="form-control" placeholder="Enter description" id="exampleFormControlTextarea1" rows="3" name="description">{{old('description')}}</textarea>
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