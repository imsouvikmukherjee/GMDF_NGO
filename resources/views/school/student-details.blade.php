@extends('school.studentlayout.main')

@Section('main-container')


    <div class="child2">
    <img src="{{url('studentdetails/'.$studentprofiledata[0]->studentpicture)}}" alt="Student_Picture">
    <a href="{{url('/school/student-idcard')}}" class="btn btn-primary btn-sm" id="button" ><i class="bi bi-person-vcard"></i></i> Id card</a>
    
    <h4><span class="text-danger">Name</span>: <span class="text-muted">
      @if($studentprofiledata != null)
      {{session('name')}}
      @endif
    </span></h4>
    <h4><span class="text-danger">Student Id:</span>  <span class="text-muted">
      @if($studentprofiledata != null)
      {{$studentprofiledata[0]->contact}}
      @endif
    </span></h4>
    {{-- <h4><span class="text-danger">Registration no </span>: <span class="text-muted">5565SD52</span></h4> --}}
    <h4><span class="text-danger">Roll no</span>:  <span class="text-muted">
      @if($studentprofiledata != null)
      {{$studentprofiledata[0]->rollno}}
      @endif
    </span></h4>
    {{-- <hr> --}}
    <h4><span class="text-danger">Email</span>:  <span class="text-muted">
      {{session('email')}} 
    </span></h4>
    
    <h4><span class="text-danger">Contact</span>: <span class="text-muted">
      @if($studentprofiledata != null)
      {{$studentprofiledata[0]->contact}}
      @endif  
    </span></h4>
    <h4><span class="text-danger">D.O.B</span>:  <span class="text-muted"> 
      @if($studentprofiledata != null)
      {{$studentprofiledata[0]->dateofbirth}}
      @endif
      <span></span></span></h4>

      <h4><span class="text-danger">Gender</span>:  <span class="text-muted"> 
        @if($studentprofiledata != null)
        {{$studentprofiledata[0]->gender}}
        @endif
        <span></span></span></h4>

  </div>


    <div class="child3">
    <h4 class="long"><span class="text-danger">Document of student (Aadhar card/PAN card)&nbsp&nbsp;<span class="text-muted">as pdf</b>:</span>&nbsp&nbsp&nbsp&nbsp;
      @if($studentprofiledata != null)
      <a href="{{url('studentdetails/'.$studentprofiledata[0]->documentofstudent)}}" download style="text-decoration: none;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;View</a>
      @endif   
    </h4>
      <h4><span class="text-danger">Guardian's name </span>: <span class="text-muted">
        @if($studentprofiledata != null)
        {{$studentprofiledata[0]->gurdiansname}}
        @endif  
      </span></h4>

    <h4><span class="text-danger">Guardian's contact </span>:  <span class="text-muted">
      @if($studentprofiledata != null)
      {{$studentprofiledata[0]->gurdianscontact}}
      @endif
    </span></h4>

    <h4><span class="text-danger">Guardian's contact (Secondary)</span>:  <span class="text-muted">
      @if($studentprofiledata != null)
      {{$studentprofiledata[0]->optionalcontact}}
      @endif
    </span></h4>

    <h4><span class="text-danger">Guardian's email </span>:  <span class="text-muted">
      @if($studentprofiledata != null)
      {{$studentprofiledata[0]->gurdiansemail}}
      @endif
    </span></h4>

    <h4 class="long"><span class="text-danger">Document of Parent (Aadhar card/PAN card) as pdf</span>:
      @if($studentprofiledata != null)
      <a href="{{url('studentdetails/'.$studentprofiledata[0]->documentofparent)}}" download style="text-decoration: none;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;View</a>
     @endif
    </h4>

    <h4 class="long"><span class="text-danger">Permanent address</span>:  <span class="text-muted">
      @if($studentprofiledata != null)
      {{$studentprofiledata[0]->parmanentaddress}}
      @endif
    </span></h4>

    <h4 class="long"><span class="text-danger">Current address</span>:  <span class="text-muted">
      @if($studentprofiledata != null)
      {{$studentprofiledata[0]->currentaddress}}
      @endif
    </span></h4>

    <h4><span class="text-danger">Blood group</span>:  <span class="text-muted">
      @if($studentprofiledata != null)
      {{$studentprofiledata[0]->bloodgroup}}
      @endif  
    </span></h4>

    <h4><span class="text-danger">Class</span>:  <span class="text-muted">
      @if($studentprofiledata != null)
      {{$studentprofiledata[0]->class}}
      @endif
      <sup>th</sup></span></h4>
    <h4><span class="text-danger">Section</span>:  <span class="text-muted">
      @if($studentprofiledata != null)
      {{$studentprofiledata[0]->section}}
      @endif  
    </span></h4>
    {{-- <h4><span class="text-danger">Joining date</span>:  <span class="text-muted">01 april 2009</span></h4> --}}
    <h4><span
    span class="text-danger">QR code</span></h4>
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d0/QR_code_for_mobile_English_Wikipedia.svg/1200px-QR_code_for_mobile_English_Wikipedia.svg.png" alt="">

    </div>

  </div>




 @endsection