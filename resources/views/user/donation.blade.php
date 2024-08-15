@extends('user.layout.main')

@section('main-container')

    <div class="header-height"></div>

    <div class="pager-header">
        <div class="container">
            <div class="page-content">
                <h2>Donation</h2>
                <p>Help today because tomorrow you may be the one who <br>needs more helping!</p>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('show.home.page')}}">Home</a></li>
                    <li class="breadcrumb-item active">Donation</li>
                </ol>
            </div>
        </div>
    </div>

<!-- <div class="mb-5"></div> -->
{{-- <section class="membership-section ">
    <div class="container mt-5" style="">
        <div class="row " style="justify-content: space-between;">
           
           <div class="col-sm-4"></div>
           <div class="col-sm-4">
            <div class="col-lg-4 pl-5">
                <div class="contact-form">
                    <h3>Bank Details</h3>
                    <p>Bank Name : Bank Of India</p>
                    <p>Account Number : 475869721482</p>
                    <p>IFSC Code : BKID4275</p>
                    <p>Branch : Ranaghat</p>
                    <p>Account Holder's Name : Ani sardar</p>
                    <p>UPI Id : phone@lkdwjkj</p>
                    <p>QR Code : </p>
                    <img src="{{url('user-asset/img/qr.png')}}" alt="" height="150px" width="150px" style="justify-content: center; margin-left: 20%;">

                </div>
            </div>
           </div>
           <div class="col-sm-4"></div>
        </div>
    </div>

</section> --}}

<div class="container-fluid">
    <div class="row mt-5">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <div class="contact-form">
                <h3 class="text-center">Payment Details For Donation</h3>
                <p>Empower change, your donation brings hope and brighter futures</p>
               <div class="mt-5">
                <p class="text-muted">Bank Name : Indian Bank</p>
                <p class="text-muted">Account Number : 7711458340</p>
                <p class="text-muted">IFSC Code : IDIB000B619</p>
                <p class="text-muted">Branch : Banjetia</p>
                <p class="text-muted">Account Holder's Name : Global Model Development Foundation</p>
                <p class="text-muted">UPI Id : gmdf@indianbk</p>
                <p class="text-muted">QR Code : </p>
                <img src="{{url('user-asset/img/GMDF_QR.png')}}" alt="Donation QR" height="150px" width="150px" style="justify-content: center; margin-left: 20%;">

               </div>
            </div>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>

@endsection