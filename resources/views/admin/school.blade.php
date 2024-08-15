@extends('admin.layout.main')

@Section('main-container')

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">NGO | Manage School Credential</h1>
           
          </div>

         
            <!-- Invoice Example -->
            <div class="col-xl-12 col-lg-12 mb-4">
              <div class="card">
              
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between text-dark">
                    <!-- <h6 class="m-0 font-weight-bold">Fund Details</h6> -->
                    <a href="" class=" btn btn-sm btn-light" style="display: none;"><i class="bi bi-arrow-90deg-left"></i> Back</a>
                    <a class="m-0 float-right btn btn-dark btn-sm" href="{{route('add.school.credential')}}">Add School <i
                        class="fas fa-chevron-right"></i></a>
                  </div>

                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th>Id</th>
                        <th>School Name</th>
                        <th>Email</th>
                        <th>Contact No.</th>
                        
                        <th>Status</th>
                        <th class="col-3">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><a href="#">1</a></td>
                        <td>XYZ modern school</td>
                        <td>
                            xyz@gmail.com
                        </td>
                        <td>346744435</td>
                        <td><span class="badge badge-success">Active</span></td>
                        <td>
                          <a href="#" class="btn btn-sm btn-primary" id="pdf-button" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="bi bi-pencil-square"></i></a>
                          <a href="#" class="btn btn-sm btn-danger" id="pdf-button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="bi bi-trash"></i></a>
                          <a href="#" class="btn btn-sm btn-dark" id="pdf-button" data-bs-toggle="tooltip" data-bs-placement="top" title="Changed Status"><i class="bi bi-toggle-on"></i> </a>
                            {{-- <a href="{{route('school.details.view')}}" class="btn btn-sm btn-info" id="pdf-button" data-bs-toggle="tooltip" data-bs-placement="top" title="View Details"><i class="bi bi-card-checklist"></i> </a> --}}
                        </td>
                      </tr>
                      <tr>
                        <td><a href="#">2</a></td>
                        <td>abc high school</td>
                        <td>
                            abc@gmail.com
                        </td>
                        <td>346744435</td>
                        <td><span class="badge badge-danger">Inactive</span></td>
                        <td>
                          <a href="#" class="btn btn-sm btn-primary" id="pdf-button" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="bi bi-pencil-square"></i></a>
                          <a href="#" class="btn btn-sm btn-danger" id="pdf-button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="bi bi-trash"></i></a>
                          <a href="#" class="btn btn-sm btn-dark" id="pdf-button" data-bs-toggle="tooltip" data-bs-placement="top" title="Changed Status"><i class="bi bi-toggle-on"></i> </a>
                            {{-- <a href="{{route('school.details.view')}}" class="btn btn-sm btn-info" id="pdf-button" data-bs-toggle="tooltip" data-bs-placement="top" title="View Details"><i class="bi bi-card-checklist"></i> </a> --}}
                        </td>
                      </tr>
                      <tr>
                        <td><a href="#">3</a></td>
                        <td>rupsa girls high school</td>
                        <td>
                            rupsa@gmail.com
                        </td>
                        <td>346744435</td>
                        <td><span class="badge badge-danger">Inactive</span></td>
                        <td>
                          <a href="#" class="btn btn-sm btn-primary" id="pdf-button" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="bi bi-pencil-square"></i></a>
                          <a href="#" class="btn btn-sm btn-danger" id="pdf-button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="bi bi-trash"></i></a>
                          <a href="#" class="btn btn-sm btn-dark" id="pdf-button" data-bs-toggle="tooltip" data-bs-placement="top" title="Changed Status"><i class="bi bi-toggle-on"></i> </a>
                            {{-- <a href="{{route('school.details.view')}}" class="btn btn-sm btn-info" id="pdf-button" data-bs-toggle="tooltip" data-bs-placement="top" title="View Details"><i class="bi bi-card-checklist"></i> </a> --}}
                        </td>
                      </tr>
                      <tr>
                        <td><a href="#">4</a></td>
                        <td>Demo school</td>
                        <td>
                            demo@gmail.com
                        </td>
                        <td>346744435</td>
                        <td><span class="badge badge-danger">Inactive</span></td>
                        <td>
                          <a href="#" class="btn btn-sm btn-primary" id="pdf-button" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="bi bi-pencil-square"></i></a>
                          <a href="#" class="btn btn-sm btn-danger" id="pdf-button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="bi bi-trash"></i></a>
                          <a href="#" class="btn btn-sm btn-dark" id="pdf-button" data-bs-toggle="tooltip" data-bs-placement="top" title="Changed Status"><i class="bi bi-toggle-on"></i> </a>
                            {{-- <a href="{{route('school.details.view')}}" class="btn btn-sm btn-info" id="pdf-button" data-bs-toggle="tooltip" data-bs-placement="top" title="View Details"><i class="bi bi-card-checklist"></i> </a> --}}
                        </td>
                      </tr>
                      <tr>
                        <td><a href="#">5</a></td>
                        <td>Technology school</td>
                        <td>
                            technology@gmail.com
                        </td>
                        <td>346744435</td>
                        <td><span class="badge badge-success">Active</span></td>
                        <td>
                          <a href="#" class="btn btn-sm btn-primary" id="pdf-button" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="bi bi-pencil-square"></i></a>
                          <a href="#" class="btn btn-sm btn-danger" id="pdf-button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="bi bi-trash"></i></a>
                          <a href="#" class="btn btn-sm btn-dark" id="pdf-button" data-bs-toggle="tooltip" data-bs-placement="top" title="Changed Status"><i class="bi bi-toggle-on"></i> </a>
                            {{-- <a href="{{route('school.details.view')}}" class="btn btn-sm btn-info" id="pdf-button" data-bs-toggle="tooltip" data-bs-placement="top" title="View Details"><i class="bi bi-card-checklist"></i> </a> --}}
                        </td>
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