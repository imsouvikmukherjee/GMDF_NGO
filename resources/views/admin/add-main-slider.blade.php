@extends('admin.layout.main')

@Section('main-container')

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add Sliders</h1>
           
          </div>

         
            <!-- Invoice Example -->
            <div class="col-xl-12 col-lg-12 mb-4">
              <div class="card">
              
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between text-dark">
                  
                    <a href="{{route('show.slider')}}" class=" btn btn-sm btn-light"><i class="bi bi-arrow-90deg-left"></i> Back</a>
                  
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

                            <form action="{{route('slider.store')}}" method="POST" enctype="multipart/form-data">
                              @csrf
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Slider Title</label>
                                  <input type="text" class="form-control" id="exampleInputEmail1"  value="{{old('title')}}" name="title" aria-describedby="emailHelp"
                                    placeholder="Enter description">
                                 
                                </div>

                                <div class="form-group">
                                  <label for="exampleInputEmail1">Slider Description</label>
                                  <input type="text" class="form-control" id="exampleInputEmail1"  value="{{old('description')}}" name="description" aria-describedby="emailHelp"
                                    placeholder="Enter description">
                                 
                                </div>
                                <label for="exampleInputEmail1">Upload Slider</label>
                                <div class="input-group mb-3">
                                  
                                    <input type="file" class="form-control" name="image" id="inputGroupFile02">
                                    <label class="input-group-text" for="inputGroupFile02 ">Browse</label>
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