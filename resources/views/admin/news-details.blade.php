@extends('admin.layout.main')

@Section('main-container')

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">News Details</h1>
           
          </div>

         
            <!-- Invoice Example -->
            <div class="col-xl-12 col-lg-12 mb-4">
              <div class="card">
              
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between text-dark">
              
                    <a href="" class=" btn btn-sm btn-light" style="display: none;"><i class="bi bi-arrow-90deg-left"></i> Back</a>
                    <a class="m-0 float-right btn btn-light btn-sm" href="{{route('admin.news')}}"><i class="bi bi-arrow-90deg-left"></i> Back</a>
                  </div>

                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                   
                    <tbody>
                      <tr>
                        <th>Sr No.</th>
                        <td>1</td>
                      </tr>

                      <tr>
                        <th>News Category</th>
                        
                          {{-- @if ( $data->category_id == $newscategory->id) --}}
                            <td>{{$data->categoryname}}</td>
                        {{-- @endif --}}
                    
                      </tr>

                      <tr>
                        <th>News Title</th>
                        <td>{{$data->newstitle}}</td>
                      </tr>

                      <tr>
                        <th>News Description</th>
                        <td>{!! $data->newsdescription !!}</td>
                      </tr>

                      <tr>
                        <th>News Banner</th>
                        <td><img src="{{url('/img/'.$data->newsimage)}}" width="180px" height="120px" alt=""></td>
                      </tr>

                      <tr>
                        <th>Created_at</th>
                          @if ($data->created_at == null)
                          <td>Not created yet</td>
                          @else
                          <td>{{$data->created_at}}</td>
                          @endif
                        
                      </tr>
                      

                      <tr>
                        <th>Updated_at</th>
                        @if ($data->updated_at == null)
                        <td>Not updated yet</td>
                        @else
                        <td>{{$data->updated_at}}</td>
                        @endif
                      </tr>

                      
                    
                    
                     
                      
                      
                    </tbody>
                  </table>
                </div>
                <div class="card-footer"></div>
              </div>
            </div>
           

        

        </div>
        <!---Container Fluid-->
      
     @endsection