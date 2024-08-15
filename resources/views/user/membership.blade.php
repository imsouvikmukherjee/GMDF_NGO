@extends('user.layout.main')

@section('main-container')

    <div class="header-height"></div>

    <div class="pager-header">
        <div class="container">
            <div class="page-content">
                <h2>Membership</h2>
                <p>Help today because tomorrow you may be the one who <br>needs more helping!</p>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('show.home.page')}}">Home</a></li>
                    <li class="breadcrumb-item active">Membership</li>
                </ol>
            </div>
        </div>
    </div>

<!-- <div class="mb-5"></div> -->
<section class="membership-section ">
    <div class="container mt-5" style="">
        <div class="row " style="justify-content: space-between;">
            <div class="col-lg-7">
                <div class="contact-form " style="position: relative;">
                    <h3>Apply For Membership</h3>
                    <p class="mb-4">Empower change, your donation brings hope and brighter futures.</p>
              

                    @if(session('success'))
                    <div class="alert alert-success text-center alert-dismissible fade show" role="alert"">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    
                @endif

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error}}</li>
                        @endforeach
                       
                    </ul>
                </div>
            @endif


                    <form action="{{url('/add-membership')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                        @csrf
                        <div class="form-group colum-row row">
                            <div class="col-sm-6">
                                <label for="" class=" form-label">Name</label>
                                <input type="text" id="name" name="name" value="{{old('name')}}" class="form-control" placeholder="Enter your name">
                            </div>
                            <div class="col-sm-6">
                                <label for="" class=" form-label">Email</label>
                                <input type="email" id="email" name="email" value="{{old('email')}}" class="form-control" placeholder="Enter a valid email">
                            </div>
                        </div>
                        <div class="form-group colum-row row">
                            <div class="col-sm-6">
                                <label for="" class=" form-label">Contact number</label>
                                <input type="text" id="email" name="contact" value="{{old('contact')}}" class="form-control" placeholder="Enter a valid number">
                            </div>
                            <div class="col-sm-6">
                                <label for="" class=" form-label">Photo Id (Aadhaar/Voter/Driving Licence)</label>
                                <input type="file" id="email" name="photoid" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group colum-row row">
                            <div class="col-sm-12">
                                <label for="" class=" form-label">Payment Receipt</label>
                                <input type="file" id="email" name="paymentrecipt" class="form-control" placeholder="Enter a valid number">
                            </div>
                           
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="" class=" form-label">Full Address</label>
                                <textarea id="message" name="address" cols="30" rows="5" class="form-control message" placeholder="Enter full address">{{old('address')}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <button id="submit" class="default-btn mx-auto d-block mb-5" type="submit">Apply</button>
                            </div>
                        </div>
                        <div id="form-messages" class="alert" role="alert"></div>
                    </form>
                </div>
               
            </div>
            <div class="col-lg-4 pl-5">
                <div class="contact-form">
                    <h3>Bank Details</h3>

                   {{-- <p>Empower change, your donation brings hope and brighter futures</p> --}}
               <div class="mt-5">
                <p class="text-muted">Bank Name : Indian Bank</p>
                <p class="text-muted">Account Number : 7711458340</p>
                <p class="text-muted">IFSC Code : IDIB000B619</p>
                <p class="text-muted">Branch : Banjetia</p>
                <p class="text-muted">Account Holder's Name : Global Model Development Foundation</p>
                <p class="text-muted">UPI Id : gmdf@indianbk</p>
                <p class="text-muted">QR Code : </p>
                    <img src="{{url('user-asset/img/GMDF_QR.png')}}" alt="" height="150px" width="150px" style="justify-content: center; margin-left: 20%;">

                </div>
            </div>
        </div>
    </div>

</section>

@endsection