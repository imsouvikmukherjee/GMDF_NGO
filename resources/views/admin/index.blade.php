@extends('admin.layout.main')

@Section('main-container')

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
           
          </div>

          <div class="row mb-3">
            @if (session('usertype') === 'Superadmin')
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100 text-white">
                <div class="card-body bg-gradient-info rounded-lg">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Members</div>
                      <div class="h5 mb-0 font-weight-bold">{{$membership}}</div>
                  
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fas fa-calendar fa-2x text-primary"></i> -->
                      <i class="bi bi-person-check-fill" style="font-size: 36px;"></i>
                     
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endif
            <!-- Earnings (Annual) Card Example -->
            @if (session('usertype') === 'Superadmin')

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100 text-white">
                <div class="card-body bg-gradient-secondary rounded-lg">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Schools</div>
                      <div class="h5 mb-0 font-weight-bold ">{{$school}}</div>
                     
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fas fa-shopping-cart fa-2x text-success"></i> -->
                      <i class="bi bi-building-fill-check" style="font-size: 36px;"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            @endif
            <!-- New User Card Example -->
            @if (session('usertype') === 'Superadmin')

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100 text-white">
                <div class="card-body bg-gradient-success rounded-lg">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Students</div>
                      <div class="h5 mb-0 mr-3 font-weight-bold ">{{$students}}</div>
                      
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fas fa-users fa-2x text-info"></i> -->
                      <i class="bi bi-people-fill" style="font-size: 36px;"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endif
            <!-- Pending Requests Card Example -->
            @if (session('usertype') === 'Superadmin')
            <div class="col-xl-3 col-md-6 mb-4 ">
              <div class="card h-100 text-white ">
                <div class="card-body text-white bg-gradient-primary rounded-lg">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Fundrising Post (Active)</div>
                      <div class="h5 mb-0 font-weight-bold ">{{$fundrisingpost}}</div>
                     
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fas fa-comments fa-2x text-warning"></i> -->
                      <i class="bi bi-sticky-fill" style="font-size: 36px;"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endif
            <!-- Another row of dashboard box -->
            @if (session('usertype') === 'Superadmin')
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100 text-white">
                <div class="card-body bg-gradient-warning rounded-lg">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Notice (GMDF)</div>
                      <div class="h5 mb-0 font-weight-bold">{{$notice}}</div>
                    
                    </div>
                    <div class="col-auto">
                     
                      <i class="bi bi-megaphone-fill" style="font-size: 36px;"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endif
            <!-- Earnings (Annual) Card Example -->
            @if (session('usertype') === 'Superadmin')
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100 text-white">
                <div class="card-body bg-gradient-success rounded-lg">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">News</div>
                      <div class="h5 mb-0 font-weight-bold ">{{$news}}</div>
                     
                    </div>
                    <div class="col-auto">
                     
                      <i class="bi bi-newspaper" style="font-size: 36px;"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endif
            <!-- New User Card Example -->
            @if (session('usertype') === 'Superadmin')
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100 text-white">
                <div class="card-body bg-gradient-info rounded-lg">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">News Category</div>
                      <div class="h5 mb-0 mr-3 font-weight-bold ">{{$newscategory}}</div>
                  
                    </div>
                    <div class="col-auto">
                    
                      <i class="bi bi-bookmark-plus-fill" style="font-size: 36px;"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endif
            <!-- Pending Requests Card Example -->
            @if (session('usertype') === 'Superadmin')
            <div class="col-xl-3 col-md-6 mb-4 ">
              <div class="card h-100 text-white ">
                <div class="card-body text-white bg-gradient-danger rounded-lg">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Contact Messages</div>
                      <div class="h5 mb-0 font-weight-bold ">{{$ngocontact}}</div>
                    
                    </div>
                    <div class="col-auto">
                    
                      <i class="bi bi-person-lines-fill" style="font-size: 36px;"></i>
                     
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endif






            {{-- for Others admin --}}






            @if (in_array(session('usertype'), ['Teacher', 'School']))
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100 text-white">
                <div class="card-body bg-gradient-info rounded-lg">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Teachers</div>
                      <div class="h5 mb-0 font-weight-bold">{{$teacher}}</div>
                  
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fas fa-calendar fa-2x text-primary"></i> -->
                      <i class="bi bi-person-check-fill" style="font-size: 36px;"></i>
                     
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endif
            <!-- Earnings (Annual) Card Example -->
            
            @if (in_array(session('usertype'), ['Teacher', 'School']))
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100 text-white">
                <div class="card-body bg-gradient-secondary rounded-lg">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Class</div>
                      <div class="h5 mb-0 font-weight-bold ">{{$class}}</div>
                     
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fas fa-shopping-cart fa-2x text-success"></i> -->
                      <i class="bi bi-building-fill-check" style="font-size: 36px;"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endif
          
            <!-- New User Card Example -->
        
            @if (in_array(session('usertype'), ['Teacher', 'School']))
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100 text-white">
                <div class="card-body bg-gradient-success rounded-lg">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Students</div>
                      <div class="h5 mb-0 mr-3 font-weight-bold ">{{$studentsSchool}}</div>
                      
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fas fa-users fa-2x text-info"></i> -->
                      <i class="bi bi-people-fill" style="font-size: 36px;"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endif
            <!-- Pending Requests Card Example -->
           
            @if (in_array(session('usertype'), ['Teacher', 'School']))
            <div class="col-xl-3 col-md-6 mb-4 ">
              <div class="card h-100 text-white ">
                <div class="card-body text-white bg-gradient-primary rounded-lg">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Subjects</div>
                      <div class="h5 mb-0 font-weight-bold ">{{$subjects}}</div>
                     
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fas fa-comments fa-2x text-warning"></i> -->
                      <i class="bi bi-sticky-fill" style="font-size: 36px;"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endif
            <!-- Another row of dashboard box -->
           
            @if (in_array(session('usertype'), ['Teacher', 'School']))
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100 text-white">
                <div class="card-body bg-gradient-warning rounded-lg">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Notice (School)</div>
                      <div class="h5 mb-0 font-weight-bold">{{$schoolnotice}}</div>
                    
                    </div>
                    <div class="col-auto">
                     
                      <i class="bi bi-megaphone-fill" style="font-size: 36px;"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endif
            <!-- Earnings (Annual) Card Example -->
         
            @if (in_array(session('usertype'), ['Teacher', 'School']))
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100 text-white">
                <div class="card-body bg-gradient-success rounded-lg">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Student Details (Pending)</div>
                      <div class="h5 mb-0 font-weight-bold ">{{$pendingStudentDetails}}</div>
                     
                    </div>
                    <div class="col-auto">
                     
                      <i class="bi bi-newspaper" style="font-size: 36px;"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
         @endif
            <!-- New User Card Example -->
          
            @if (in_array(session('usertype'), ['Teacher', 'School']))
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100 text-white">
                <div class="card-body bg-gradient-info rounded-lg">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Teacher Details (Pending)</div>
                      <div class="h5 mb-0 mr-3 font-weight-bold ">{{$pendingTeacherDetails}}</div>
                  
                    </div>
                    <div class="col-auto">
                    
                      <i class="bi bi-bookmark-plus-fill" style="font-size: 36px;"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
       @endif
            <!-- Pending Requests Card Example -->
           
            @if (in_array(session('usertype'), ['Teacher', 'School']))
            <div class="col-xl-3 col-md-6 mb-4 ">
              <div class="card h-100 text-white ">
                <div class="card-body text-white bg-gradient-danger rounded-lg">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Contact Messages</div>
                      <div class="h5 mb-0 font-weight-bold ">{{$ngocontact}}</div>
                    
                    </div>
                    <div class="col-auto">
                    
                      <i class="bi bi-person-lines-fill" style="font-size: 36px;"></i>
                     
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endif

          
            <!-- Invoice Example -->
            {{-- <div class="col-xl-12 col-lg-12 mb-4">
              <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between text-dark">
                  <h6 class="m-0 font-weight-bold">Fund Details</h6>
                
                </div>
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th>Fund ID</th>
                        <th>Donator Name</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><a href="#">RA0449</a></td>
                        <td>Udin Wayang</td>
                        <td>₹500</td>
                        <td><span class="badge badge-success">Delivered</span></td>
                        <td> <a href="#" class="btn btn-sm btn-info" id="pdf-button" data-bs-toggle="tooltip" data-bs-placement="top" title="View Details"><i class="bi bi-card-checklist"></i> </a></td>
                      </tr>
                      <tr>
                        <td><a href="#">RA5324</a></td>
                        <td>Jaenab Bajigur</td>
                        <td>₹7000</td>
                        <td><span class="badge badge-warning">Shipping</span></td>
                        <td> <a href="#" class="btn btn-sm btn-info" id="pdf-button" data-bs-toggle="tooltip" data-bs-placement="top" title="View Details"><i class="bi bi-card-checklist"></i> </a></td>
                      </tr>
                      <tr>
                        <td><a href="#">RA8568</a></td>
                        <td>Rivat Mahesa</td>
                        <td>₹5000</td>
                        <td><span class="badge badge-danger">Pending</span></td>
                        <td> <a href="#" class="btn btn-sm btn-info" id="pdf-button" data-bs-toggle="tooltip" data-bs-placement="top" title="View Details"><i class="bi bi-card-checklist"></i> </a></td>
                      </tr>
                      <tr>
                        <td><a href="#">RA1453</a></td>
                        <td>Indri Junanda</td>
                        <td>₹2000</td>
                        <td><span class="badge badge-info">Processing</span></td>
                        <td> <a href="#" class="btn btn-sm btn-info" id="pdf-button" data-bs-toggle="tooltip" data-bs-placement="top" title="View Details"><i class="bi bi-card-checklist"></i> </a></td>
                      </tr>
                      <tr>
                        <td><a href="#">RA1998</a></td>
                        <td>Udin Cilok</td>
                        <td>₹600</td>
                        <td><span class="badge badge-success">Delivered</span></td>
                        <td> <a href="#" class="btn btn-sm btn-info" id="pdf-button" data-bs-toggle="tooltip" data-bs-placement="top" title="View Details"><i class="bi bi-card-checklist"></i> </a></td>

                        <!-- <a href="#" class="btn btn-light btn-sm" id="pdf-button" data-bs-toggle="tooltip" data-bs-placement="top" title="View pdf"><i class="bi bi-eye-fill"></i></a> -->
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="card-footer"></div>
              </div>
            </div> --}}
          
          </div>
          <!--Row-->

        

        </div>
        <!---Container Fluid-->
      

      @endsection
    