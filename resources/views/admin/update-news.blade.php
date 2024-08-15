@extends('admin.layout.main')

@Section('main-container')

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Update News</h1>
           
          </div>

         
            <!-- Invoice Example -->
            <div class="col-xl-12 col-lg-12 mb-4">
              <div class="card">
              
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between text-dark">
                 
                    <a href="{{route('admin.news')}}" class=" btn btn-sm btn-light"><i class="bi bi-arrow-90deg-left"></i> Back</a>
                  
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

                            <form action="{{url('/admin/edit-news-store')}}/{{encrypt($data->id)}}" method="POST" enctype="multipart/form-data">
                              @csrf

                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">News Category</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="categoryname">
                                      <option selected disabled>Select Category</option>
                                      @foreach($newscategory as $item)

                                    @if($item->status == 1)
                                    <option value="{{$item->id}}" {{$item->id == $data->category_id ? 'selected':''}}>
                                      {{$item->categoryname}}
                                    </option>
                                    @endif

                                      @endforeach

                                      
                                      
                                    </select>
                                  </div>

                                <div class="form-group">
                                  <label for="exampleInputEmail1">News Title</label>
                                  <input type="text" class="form-control" name="newstitle" value="{{$data->newstitle}}" id="exampleInputEmail1" aria-describedby="emailHelp"
                                    placeholder="Enter title">
                                 
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">News Description</label>
                                    <textarea class="form-control" id="editor" rows="5" name="newsdescription" placeholder="Enter description " cols="7">{{$data->newsdescription}}</textarea>
                                    
                                  </div>
                              
                                <label for="exampleInputEmail1">News Image</label>
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" name="newsimage" id="inputGroupFile02">
                                    <label class="input-group-text" for="inputGroupFile02 ">Browse</label>
                                  </div>

                                  <div class="container-fluid">
                                    <div class="row mb-4">
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-8">
                                            <img src="{{url('img/'.$data->newsimage)}}" class="img-fluid" alt="News Image">
                                        </div>
                                        <div class="col-sm-2"></div>
                                    </div>
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