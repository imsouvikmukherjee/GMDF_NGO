@extends('admin.layout.main')

@Section('main-container')

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">School Details</h1>
           
          </div>

          @if(session('success'))
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
                    <a href="" class=" btn btn-sm btn-light" style="display: none;"><i class="bi bi-arrow-90deg-left"></i> Back</a>
                    <a class="m-0 float-right btn btn-light btn-sm" href="{{route('register')}}"><i class="bi bi-arrow-90deg-left"></i> Back</a>
                  </div>

                  
                  <div id="wrapper">
                    <div id="tabContainer">
                        <div id="tabs">
                            <ul>
                                <li id="tabHeader_1">School</li>
                                <li id="tabHeader_2">Teacher</li>
                                <li id="tabHeader_3">Student</li>
                            </ul>
                        </div>

                        

                        <div id="tabscontent">

                            {{-- school details --}}

                          
                            <div class="tabpage" id="tabpage_1">
                               
                                @if($schooldata->isEmpty())
                                <p class="text-center text-muted my-4">No data found</p>
                                @else

                                <div class="table-responsive">
                                    <table class="table align-items-center table-flush">
                                      <thead class="thead-light">
                                        <tr>
                                          <th>Id</th>
                                          <th>School Name</th>
                                          <th>Name</th>
                                          <th>Email</th>
                                          <th>Contact</th>
                                          
                                        
                                          <th>Created_at</th>
                                          <th class="col-3">Action</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                  
                  
                                     @foreach($schooldata as $key => $schoolitem)
                                     <tr>
                                        <td><a href="#">{{$key+1}}</a></td>
                                        <td>{{$schoolitem->schoolname}}</td>
                                        <td> {{$schoolitem->name}} </td>
                                        <td>{{$schoolitem->email}}</td>
                                        <td>{{$schoolitem->contact}}</td>
                
                                      

                                        <td>{{$schoolitem->created_at}}</td>

                                        <td>
                                          <a href="{{url('/admin/school/edit-school-credential')}}/{{encrypt($schoolitem->id)}}" class="btn btn-sm btn-primary" id="pdf-button" data-bs-toggle="tooltip" data-bs-placement="top" title="Change Credential"><i class="bi bi-pencil-square"></i></a>
                                          <a href="javascript:void(0)" onclick="confirmDelete('{{url('/admin/school/school-delete')}}/{{encrypt($schoolitem->id)}}')" class="btn btn-sm btn-danger" id="pdf-button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="bi bi-trash"></i></a>
                                          {{-- <a href="#" " class="btn btn-sm btn-dark" id="pdf-button" data-bs-toggle="tooltip" data-bs-placement="top" title="Changed Status"><i class="bi bi-toggle-on"></i> </a> --}}
                                           
                                        </td>
                                      </tr>
                                     @endforeach
                                       
                                      </tbody>
                                    </table>
                                  </div>
                                  @endif
                            </div>

                            {{-- Teacher details --}}

                           
                            <div class="tabpage hidden" id="tabpage_2">
                                @if($teacherdata->isEmpty())
                                <p class="text-center text-muted my-4">No data found</p>
                                @else
                                <div class="table-responsive">
                                    
                                    <table class="table align-items-center table-flush">
                                        <thead class="thead-light">
                                            <tr>
                                              <th>Id</th>
                                              <th>School Name</th>
                                              <th>Teacher Name</th>
                                              <th>Teacher Email</th>
                                              <th>Teacher Contact</th>
                                              
                                           
                                              <th>Created_at</th>
                                              {{-- <th class="col-3">Action</th> --}}
                                            </tr>
                                          </thead>
                                          <tbody>

                                         @foreach($teacherdata as $key => $teacheritem)
                                         <tr>
                                            <td><a href="#">{{$key+1}}</a></td>
                                            <td>{{$teacheritem->schoolname}}</td>
                                            <td> {{$teacheritem->name}} </td>
                                            <td>{{$teacheritem->email}}</td>
                                            <td>{{$teacheritem->contact}}</td>
                    
                                          
    
                                            <td>{{$teacheritem->created_at}}</td>
    
                                           
                                          </tr>
                                         @endforeach
                               
                                      </tbody>
                                    </table>
                                  
                                  </div>
                                  @endif
                            </div>


                            {{-- Student Details --}}

                            <div class="tabpage hidden" id="tabpage_3">
                              @if($studentdata->isEmpty())
                              <p class="text-center text-muted my-4">No data found</p>
                              @else
                                <div class="table-responsive">
                                    <table class="table align-items-center table-flush">
                                        <thead class="thead-light">
                                            <tr>
                                              <th>Id</th>
                                              <th>School Name</th>
                                              <th>Student Name</th>
                                              <th>Student Email</th>
                                              <th>Student Contact</th>
                                              
                                           
                                              <th>Created_at</th>
                                              
                                            </tr>
                                          </thead>
                                          <tbody>

                                         @foreach($studentdata as $key => $studentitem)
                                         <tr>
                                            <td><a href="#">{{$key+1}}</a></td>
                                            <td>{{$studentitem->schoolname}}</td>
                                            <td> {{$studentitem->name}} </td>
                                            <td>{{$studentitem->email}}</td>
                                            <td>{{$studentitem->contact}}</td>
                    
                                           
                                            <td>{{$studentitem->created_at}}</td>
    
                                          
                                          </tr>
                                         @endforeach                     
                                      </tbody>
                                    </table>
                                  
                                  </div>
                                  @endif
                            </div>
                        </div>
                    </div>
                </div>
                
                
                <div class="card-footer"></div>
              </div>
            </div>
           

        
            

        </div>
        <!---Container Fluid-->
      
     @endsection

     <script>
      
window.onload=function() {


var container = document.getElementById("tabContainer");
var tabcon = document.getElementById("tabscontent");

var navitem = document.getElementById("tabHeader_1");


var ident = navitem.id.split("_")[1];

navitem.parentNode.setAttribute("data-current",ident);

navitem.setAttribute("class","tabActiveHeader");



var pages = tabcon.getElementsByClassName("tabpage");
for (var i = 0; i < pages.length; i++) {
    var comp=i+1;
    if(ident!=comp) {
        pages.item(i).style.display = "none";
    }
};


var tabs = container.getElementsByTagName("li");
for (var i = 0; i < tabs.length; i++) {
    tabs[i].onclick=displayPage;
}
}


function displayPage() {
var current = this.parentNode.getAttribute("data-current");

document.getElementById("tabHeader_" + current).removeAttribute("class");
document.getElementById("tabpage_" + current).style.display="none";

var ident = this.id.split("_")[1];


this.setAttribute("class","tabActiveHeader");
document.getElementById("tabpage_" + ident).style.display="block";
this.parentNode.setAttribute("data-current",ident);
}
     </script>


<script>
  function confirmDelete(url) {
    if(confirm('Are you sure you want to delete this record?')){
      window.location.href = url;
    }
    }
</script>