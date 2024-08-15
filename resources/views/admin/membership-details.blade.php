@extends('admin.layout.main')

@Section('main-container')

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Student Details</h1>
           
          </div>

         
            <!-- Invoice Example -->
            <div class="col-xl-12 col-lg-12 mb-4">
              <div class="card">
              
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between text-dark">
                    <!-- <h6 class="m-0 font-weight-bold">Fund Details</h6> -->
                    <a href="{{route('ngo.membership')}}" class=" btn btn-sm btn-light" ><i class="bi bi-arrow-90deg-left"></i> Back</a>
                    <!-- <a class="m-0 float-right btn btn-light btn-sm" href="#" onclick="printPage()"><i class="bi bi-printer-fill" ></i> Print</a> -->
                  </div>

                <div class="table-responsive" id="show">
                  <table class="table align-items-center table-flush">
                   
                    <tbody>
                      <tr>
                        <th>Sr No.</th>
                        <td>1</td>
                      </tr>

                      <tr>
                        <th>Name</th>
                        <td>{{$data->name}}</td>
                      </tr>

                      <tr>
                        <th>Email</th>
                        <td>{{$data->email}}</td>
                      </tr>

                      <tr>
                        <th>Contact Number</th>
                        <td>{{$data->contact}}</td>

                      <tr>
                        <th>Address</th>
                        <td>{{$data->address}}</td>
                      </tr>

                      <tr>
                        <th>Document (Aadhaar/Voter id/Driving Licence)</th>
                        <td><a href="{{url('img/'.$data->photoid)}}" download>Download</a></td>
                      </tr>

                      <tr>
                        <th>Payment Recipt</th>
                        <td><a href="{{url('img/'.$data->paymentrecipt)}}" download>Download</a></td>
                      </tr>

                      <tr>
                        <th>Application Date</th>
                        <td>{{$data->created_at}}</td>
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