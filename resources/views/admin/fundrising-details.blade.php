@extends('admin.layout.main')

@Section('main-container')

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Fundrising Details</h1>
           
          </div>

         
            <!-- Invoice Example -->
            <div class="col-xl-12 col-lg-12 mb-4">
              <div class="card">
              
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between text-dark">
                    <!-- <h6 class="m-0 font-weight-bold">Fund Details</h6> -->
                    <a href="" class=" btn btn-sm btn-light" style="display: none;"><i class="bi bi-arrow-90deg-left"></i> Back</a>
                    <a class="m-0 float-right btn btn-light btn-sm" href="{{route('ngo.fundrising')}}"><i class="bi bi-arrow-90deg-left"></i> Back</a>
                  </div>

                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                   
                    <tbody>
                      <tr>
                        <th>Sr No.</th>
                        <td>1</td>
                      </tr>

                      <tr>
                        <th>Title</th>
                        <td>{{$data->title}}</td>
                      </tr>

                      <tr>
                        <th>Description</th>
                        <td>{!!$data->description!!}</td>
                      </tr>

                      <tr>
                        <th>Goal</th>
                        <td>₹{{$data->price}}</td>
                      </tr>

                     
                      <tr>
                        <th>Post Image</th>
                        <td><img src="{{url('img/'.$data->image)}}" width="180px" height="120px" alt=""></td>
                      </tr>

                      <tr>
                        <th>Bank Name</th>
                        <td>{{$data->bank_name}}</td>
                      </tr>

                      <tr>
                        <th>Account Number</th>
                        <td>{{$data->account_number}}</td>
                      </tr>

                      <tr>
                        <th>IFSC Code</th>
                        <td>{{$data->ifsc_code}}</td>
                      </tr>

                      <tr>
                        <th>Branch</th>
                        <td>{{$data->branch}}</td>
                      </tr>

                      <tr>
                        <th>Account Holder's Name</th>
                        <td>{{$data->account_holders_name}}</td>
                      </tr>

                      <tr>
                        <th>UPI Id</th>
                        <td>{{$data->upi_id}}</td>
                      </tr>

                      <tr>
                        <th>QR Code</th>
                        <td><img src="{{url('img/'.$data->qr_code)}}" width="180px" height="180px" alt=""></td>
                      </tr>

                      <tr>
                        <th>Created_at</th>
                        @if($data->created_date == null)
                          <td>Invalid Date</td>
                        @else
                        <td>{{$data->created_date}}</td>
                        @endif
                      </tr>

                      <tr>
                        <th>Updated_at</th>
                        @if($data->updated_date == null)
                        <td>Not updated yet</td>
                      @else
                      <td>{{$data->updated_date}}</td>
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