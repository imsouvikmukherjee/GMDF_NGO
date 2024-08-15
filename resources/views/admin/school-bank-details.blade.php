@extends('admin.layout.main')

@Section('main-container')

    <!-- Container Fluid-->
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add Bank Details</h1>

        </div>


        @if (session('success'))
            <div class="alert alert-success text-center alert-dismissible fade show" role="alert"">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <!-- Invoice Example -->
        <div class="col-xl-12 col-lg-12 mb-4">
            <div class="card">

                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between text-dark">
                    <!-- <h6 class="m-0 font-weight-bold">Fund Details</h6> -->
                    <a href="" class=" btn btn-sm btn-light" style="display: none;"><i
                            class="bi bi-arrow-90deg-left"></i> Back</a>
                    <a class="m-0 float-right btn btn-dark btn-sm" href="{{ route('bank.details.view') }}">View Bank Details
                        <i class="fas fa-chevron-right"></i></a>
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


                                <form action="{{ route('bank.details.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">School Name</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="school">
                                            <option selected disabled>Choose</option>
                                            @foreach ($schoollist as $item)
                                                @if ($item->status == 1)
                                                    <option value="{{ $item->id }}"
                                                        {{ session('schoolname') == $item->schoolname ? 'selected' : '' }}>
                                                        {{ $item->schoolname }}</option>
                                                @endif
                                            @endforeach
                                        </select>

                                    </div>


                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Bank Name</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            value="{{ old('bank_name') }}" aria-describedby="emailHelp"
                                            placeholder="Enter bank name" name="bank_name">

                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Account Number</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            value="{{ old('account_number') }}" aria-describedby="emailHelp"
                                            placeholder="Enter account number" name="account_number">

                                    </div>

                                    {{-- <div class="form-group">
                                    <label for="exampleInputEmail1">Confirm Account Number</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                      placeholder="Confirm account number" value="{{$data->account_number}}" name="confirm_account_number">
                                   
                                  </div> --}}

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">IFSC Code</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            value="{{ old('ifsc_code') }}" aria-describedby="emailHelp"
                                            placeholder="Enter ifsc code" name="ifsc_code">

                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Branch</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            value="{{ old('branch') }}" aria-describedby="emailHelp"
                                            placeholder="Enter branch" name="branch">

                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Account's Holder Name</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            value="{{ old('branch') }}" aria-describedby="emailHelp"
                                            placeholder="Enter branch" name="account_holder_name">

                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">UPI Id</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            value="{{ old('upi_id') }}" aria-describedby="emailHelp"
                                            placeholder="Enter upi id" name="upi_id">

                                    </div>

                                    <label for="">Upload QR Code</label>
                                    <div class="input-group mb-3">

                                        <input type="file" class="form-control" id="inputGroupFile02" name="qr_code">
                                        <!-- <label class="input-group-text" for="inputGroupFile02 ">Book Pdf</label> -->
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
