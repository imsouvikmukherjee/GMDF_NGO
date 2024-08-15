@extends('admin.layout.main')

@Section('main-container')

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Upload Schedule</h1>

          </div>


            <!-- Invoice Example -->
            <div class="col-xl-12 col-lg-12 mb-4">
              <div class="card">

                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between text-dark">
                    <!-- <h6 class="m-0 font-weight-bold">Fund Details</h6> -->
                    <a href="{{route('school.schedule')}}" class=" btn btn-sm btn-light"><i class="bi bi-arrow-90deg-left"></i> Back</a>
                    <!-- <a class="m-0 float-right btn btn-dark btn-sm" href="news.html">Manage News <i -->
                        <!-- class="fas fa-chevron-right"></i></a> -->
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

                            <form action="{{route('add.schedule.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Select School</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="school">
                                      <option selected disabled>Choose</option>
                                      @foreach($schoollist as $item)
                                      @if($item->status == 1)
                                      <option value="{{$item->id}}" {{session('schoolname') == $item->schoolname? 'selected':''}}>{{$item->schoolname}}</option>
                                      @endif
                                    @endforeach

                                    </select>
                                  </div>

                                  <div class="form-group">
                                    <label for="exampleFormControlSelect1">Select Class</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="class">
                                      <option disabled selected>Choose</option>
                                      @foreach($classdata as $class)
                                          <option value="{{$class->id}}" {{old('class') == $class->id? 'selected':''}}>{{$class->class}}</option>
                                          @endforeach


                                    </select>

                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Select Section</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="section">
                                  <option disabled selected>Choose</option>
                                  @foreach($sectiondata as $section)
                                  <option value="{{$section->sectionid}}" {{old('section') == $section->id? 'selected':''}}>{{'Class: '.$section->class.' - '.'Section: '.$section->section}}</option>
                                  @endforeach


                                </select>

                        </div>



                                <label for="">Upload Schedule (pdf)</label>
                                <div class="input-group mb-3">

                                  <input type="file" class="form-control" id="inputGroupFile02" name="scheduledocument">
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
