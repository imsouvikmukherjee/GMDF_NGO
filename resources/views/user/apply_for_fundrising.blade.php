@extends('user.layout.main')

@section('main-container')

    <div class="header-height"></div>

    <div class="pager-header">
        <div class="container">
            <div class="page-content">
                <h2>Apply For Crowdfunding</h2>
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
                    <h3>Apply For Crowdfunding</h3>
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


                    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                        @csrf
                        <div class="form-group colum-row row">
                            <div class="col-sm-6">
                                <label for="" class=" form-label">Name</label>
                                <input type="text" id="name" name="name"  class="form-control" placeholder="Enter your name">
                            </div>
                            <div class="col-sm-6">
                                <label for="" class=" form-label">Email</label>
                                <input type="email" id="email" name="email"  class="form-control" placeholder="Enter a valid email">
                            </div>
                        </div>
                        <div class="form-group colum-row row">
                            <div class="col-sm-6">
                                <label for="" class=" form-label">Contact number</label>
                                <input type="text" id="email" name="contact"  class="form-control" placeholder="Enter a valid number">
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
                                <textarea id="message" name="address" cols="30" rows="5" class="form-control message" placeholder="Enter full address"></textarea>
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
                    {{-- <h3>Bank Details</h3> --}}

                   {{-- <p>Empower change, your donation brings hope and brighter futures</p> --}}
             {{-- <img src="{{url('user-asset/img/events-1.jpg')}}" alt="" class="img-fluid" srcset=""> --}}
            </div>
        </div>
    </div>

</section>

@endsection