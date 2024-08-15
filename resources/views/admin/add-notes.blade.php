@extends('admin.layout.main')

@Section('main-container')

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add Notes</h1>
           
          </div>

         
            <!-- Invoice Example -->
            <div class="col-xl-12 col-lg-12 mb-4">
              <div class="card">
              
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between text-dark">
                    <!-- <h6 class="m-0 font-weight-bold">Fund Details</h6> -->
                    <a href="{{route('school.notes')}}" class=" btn btn-sm btn-light"><i class="bi bi-arrow-90deg-left"></i> Back</a>
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

                            <form action="{{route('add.notes.store')}}" method="POST" enctype="multipart/form-data">
                              @csrf

                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Select Subject</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="subject">
                                      <option selected disabled>Choose</option>
                                      @foreach($subjectlist as $item)
                                      <option value="{{$item->id}}" {{old('subject') == $item->id?'selected':''}}>{{$item->subject}}</option>
                                      @endforeach
                                    
                                    </select>
                                  </div>

                                  <div class="form-group">
                                    <label for="exampleFormControlSelect1">Select Class</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="class">
                                      <option selected disabled>Choose</option>
                                      @foreach($classlist as $item)
                                      <option value="{{$item->id}}" {{old('class') == $item->id?'selected':''}}>{{$item->class}}</option>
                                      @endforeach
                                    
                                    </select>
                                  </div>

                                <div class="form-group">
                                  <label for="exampleInputEmail1">Notes Title</label>
                                  <input type="text" class="form-control" id="exampleInputEmail1" name="title" aria-describedby="emailHelp"
                                    placeholder="Enter title">
                                 
                                </div>

                                <label for="">Upload Book Pdf</label>
                                <div class="input-group mb-3">
                                  
                                  <input type="file" class="form-control" name="notes_pdf" id="inputGroupFile02">
                                  <!-- <label class="input-group-text" for="inputGroupFile02 ">Book Pdf</label> -->
                                </div>
                              
                              

                                <label for="">Upload Video</label>
                                <div class="input-group mb-3">
                                  
                                  <input type="file" class="form-control" name="notes_video" id="inputGroupFile02">
                                  <!-- <label class="input-group-text" for="inputGroupFile02 ">Browse</label> -->
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