@extends('school.studentlayout.main')

@Section('main-container')

    <div class="container-fluid">
        <div class="row">
            <h3 class="text-center text-primary mt-4">Student Fees</h3>
            <div
                style="height: 3px;width: 50px;background-color: #1dd1a1;margin:  auto; margin-top:5px;margin-bottom: 15px ;">
            </div>
            <p class="text-center text-muted mt-2 mb-4">You can pay your fees using the provided bank details and then upload
                your payment information</p>
            <div class="col-sm-7">
                <div class="sec-1">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    @if (session('success'))
                        <div class="alert alert-success text-center alert-dismissible fade show" role="alert"">
                            {{ session('success') }}
                            {{-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button> --}}
                        </div>
                    @endif

                    <form action="{{route('student.fees.store')}}" method="POST" enctype="multipart/form-data" class="m-4">
                        @csrf

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-muted">School</label>
                            <select class=" form-select py-2" id="exampleFormControlSelect1" name="school">

                                <option disabled selected>Choose</option>
                                @foreach ($schoollist as $item)
                                    @if ($item->status == 1)
                                        <option value="{{ $item->id }}"
                                            {{ session('schoolname') == $item->schoolname ? 'selected' : '' }}>
                                            {{ $item->schoolname }}</option>
                                    @endif
                                @endforeach


                            </select>

                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-muted">Student ID</label>
                            <input type="text" class="form-control py-2" value="{{ session('contact') }}"
                                placeholder="Enter student id" name="studentid" id="exampleInputEmail1" aria-describedby="emailHelp">

                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-muted">Student Name</label>
                            <input type="text" class="form-control py-2" placeholder="Enter student name"
                                value="{{ session('name') }}" name="studentname" id="exampleInputEmail1" aria-describedby="emailHelp">

                        </div>


                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-muted">Class</label>
                            <select class="form-select py-2" id="exampleFormControlSelect1" name="class">
                                <option disabled selected>Choose</option>
                                @foreach ($classlist as $class)
                                    <option value="{{ $class->id }}" {{ old('class') == $class->id ? 'selected' : '' }}>
                                        {{ $class->class }}</option>
                                @endforeach


                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-muted">Section</label>
                            <select class="form-select py-2" id="exampleFormControlSelect1" name="section">
                                <option disabled selected>Choose</option>

                                @foreach ($sectiondata as $section)
                                    <option value="{{ $section->sectionid }}"
                                        {{ old('section') == $section->id ? 'selected' : '' }}>
                                        {{ 'Class: ' . $section->class . ' - ' . 'Section: ' . $section->section }}</option>
                                @endforeach


                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="formFile" class="form-label text-muted">Payment Recipt</label>
                            <input class="form-control py-2" type="file" name="paymentrecipt" id="formFile">
                        </div>

                        <button type="submit" class="btn btn-primary d-block mx-auto px-3">Upload</button>
                    </form>

                </div>
            </div>
            <div class="col-sm-5">
                <div class="sec-2 ">
                    <!-- <span>Bank-Name:</span><span>State Bank Of India</span><br><br>
            <span>Account No:</span><span>XXXXXXX2564</span><br><br>
            <span>IFSC Code:</span><span>XXXXXXSW58</span><br><br>
            <span>Branch:</span><span>Kampa</span><br><br> -->


            @if($bankdetails != null)
                    <div class="">

                        <p class="text-muted">Bank Name : <span>{{ $bankdetails->bank_name }}</span></p>
                        <p class="text-muted">Account Number : <span>{{ $bankdetails->account_number }}</span></p>
                        <p class="text-muted">IFSC Code : <span>{{ $bankdetails->ifsc_code }}</span></p>
                        <p class="text-muted">Branch : <span>{{ $bankdetails->branch }}</span></p>
                        <p class="text-muted">Account Holder's Name : <span>{{$bankdetails->account_holder_name}}</span></p>
                        <p class="text-muted">UPI Id : <span>{{ $bankdetails->upi_id }}</span></p>
                        <p class="text-muted">QR Code : </p>

                    </div>

         

                    <div class="mx-auto">

                    </div>

                    <!-- <div class="container">
            
            <div class="row">
              <div class="col"> -->
                    <!-- <div class="mx-auto " > Adjust width as needed -->
                    <!-- Your content here -->


                    <img src="{{ url('otherstoredfiles/' . $bankdetails->qr_code) }}" alt="QR Code" class="img">
                    <!-- </div>
              </div>
            </div>
          </div> -->

          @else

          <p class="text-center text-muted">No bank details are provided yet!</p>
  @endif

                </div>
            </div>
        </div>

    </div>

    <div class="fees-main">




    </div>


    </div>

@endsection
