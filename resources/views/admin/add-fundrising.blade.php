@extends('admin.layout.main')

@Section('main-container')

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add Fundrising Post</h1>
           
          </div>

         
            <!-- Invoice Example -->
            <div class="col-xl-12 col-lg-12 mb-4">
              <div class="card">
              
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between text-dark">
                  
                    <a href="{{route('ngo.fundrising')}}" class=" btn btn-sm btn-light"><i class="bi bi-arrow-90deg-left"></i> Back</a>
                  
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

                            <form action="{{route('fundrising.store')}}" method="POST" enctype="multipart/form-data">
                              @csrf
                               

                                <div class="form-group">
                                  <label for="exampleInputEmail1"> Title</label>
                                  <input type="text" class="form-control" name="title" value="{{old('title')}}" id="exampleInputEmail1" aria-describedby="emailHelp"
                                    placeholder="Enter title">
                                 
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1"> Description</label>
                                    <textarea class="form-control" id="editor" name="description" rows="5" placeholder="Enter description " cols="7">{{old('description')}}</textarea>
                                    
                                  </div>

                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Fund Goal (₹)</label>
                                    <input type="text" class="form-control" name="fundgoal" value="{{old('fundgoal')}}" id="exampleInputEmail1" aria-describedby="emailHelp"
                                      placeholder="00.00">
                                   
                                  </div>
  
                              
                                <label for="exampleInputEmail1">Upload Image</label>
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" name="image" id="inputGroupFile02">
                                    <label class="input-group-text" for="inputGroupFile02 ">Browse</label>
                                  </div>

                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Bank Name</label>
                                    <input type="text" class="form-control" name="bank_name" value="{{old('bank_name')}}" id="exampleInputEmail1" aria-describedby="emailHelp"
                                      placeholder="Bank name">
                                   
                                  </div>


                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Account Number</label>
                                    <input type="text" class="form-control" name="account_number" value="{{old('account_number')}}" id="exampleInputEmail1" aria-describedby="emailHelp"
                                      placeholder="Account number">
                                   
                                  </div>


                                  <div class="form-group">
                                    <label for="exampleInputEmail1">IFCS Code</label>
                                    <input type="text" class="form-control" name="ifsc_code" value="{{old('ifsc_code')}}" id="exampleInputEmail1" aria-describedby="emailHelp"
                                      placeholder="IFSC code">
                                   
                                  </div>


                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Branch</label>
                                    <input type="text" class="form-control" name="branch" value="{{old('branch')}}" id="exampleInputEmail1" aria-describedby="emailHelp"
                                      placeholder="Branch">
                                   
                                  </div>

                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Account Holder's Name</label>
                                    <input type="text" class="form-control" name="account_holders_name" value="{{old('account_holders_name')}}" id="exampleInputEmail1" aria-describedby="emailHelp"
                                      placeholder="Account holder's name">
                                   
                                  </div>

                                  <div class="form-group">
                                    <label for="exampleInputEmail1">UPI Id</label>
                                    <input type="text" class="form-control" name="upi_id" value="{{old('upi_id')}}" id="exampleInputEmail1" aria-describedby="emailHelp"
                                      placeholder="UPI id">
                                   
                                  </div>

                                  <label for="exampleInputEmail1">Upload QR</label>
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" name="qr_code" id="inputGroupFile02">
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