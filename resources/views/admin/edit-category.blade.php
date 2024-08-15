
@extends('admin.layout.main')

@Section('main-container')


        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Update Category</h1>
           
          </div>

         
            <!-- Invoice Example -->
            <div class="col-xl-12 col-lg-12 mb-4">
              <div class="card">
              
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between text-dark">
                   
                    <a href="{{route('news.category')}}" class=" btn btn-sm btn-light"><i class="bi bi-arrow-90deg-left"></i> Back</a>
                    
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

                            {{-- <h1>{{$data->id}}</h1> --}}
                            <form method="POST" action="{{url('/admin/edit-category-store')}}/{{encrypt($data->id)}}">
                                
                              @csrf
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Category Name</label>
                                  <input type="text" class="form-control" id="exampleInputEmail1" value="{{$data->categoryname}}" name="categoryname" aria-describedby="emailHelp"
                                    placeholder="Enter category ">
                                 
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Category Description</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" value="{{$data->categorydescription}}" name="categorydescription" aria-describedby="emailHelp"
                                      placeholder="Enter description">
                                   
                                  </div> 
                                <button type="submit" class="btn btn-primary px-3 d-block mx-auto">Update</button>
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