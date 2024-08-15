
@extends('school.layout.main')

@Section('main-container')


 


    <section class="contact-section padding">
    
        <!-- /#google_map -->
        <div class="container">
            <div class="section-heading text-center mb-40">
                <h2>Get In Touch</h2>
               <div style="height: 3px;width: 50px;background-color: #1dd1a1;margin:  auto; margin-top:5px;margin-bottom: 15px ;"></div>
                <p>Help today because tomorrow you may be the one who <br> needs more helping!</p>
            </div>
            <div class="row contact-wrap">
                <div class="col-md-6 xs-padding">
                    <div class="contact-info">
                        <h3>Get in touch</h3>
                        <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless.</p>
                        <p>The secret to happiness lies in helping others. Never underestimate the difference.</p>
                        <ul>
                            <li><i class="fa-solid fa-location-dot ani-li" style="color: 1dd1a1;"></i> 315 West 33rd Street New York, NY 10001</li>
                            <li><i class="fa-solid fa-phone ani-li" style="color: 1dd1a1 !important;"></i> +1 212 425 8617, +1 212 425 8533</li>
                            <li><i class="fa-solid fa-envelope ani-li" style="color: 1dd1a1;"></i> Youremail@companyname.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 xs-padding">
                    <div class="contact-form">

                        @if(session('success'))
                        <div class="alert alert-success text-center alert-dismissible fade show" role="alert"">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        
                    @endif

                        <h3>Drop us a line</h3>
                        {{-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> --}}
                        
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                        
                        <form action="{{route('contact.send.message')}}" method="post"  class="form-horizontal">
                            @csrf
                            <div class="form-group colum-row row">
                                <div class="col-sm-6">
                                    <select class="form-control" id="exampleFormControlSelect1" name="school" style="height: 45px">
                                        <option selected disabled>Choose</option>
                                        @foreach($schoollist as $item)
                                        @if($item->status == 1)
                                        <option value="{{$item->id}}" {{session('schoolname') == $item->schoolname? 'selected':''}}>{{$item->schoolname}}</option>
                                        @endif
                                      @endforeach
                                      </select>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" id="name" name="name" class="form-control" value="{{old('name')}}" placeholder="Name">
                                </div>
                            </div>
                          
                            <div class="form-group colum-row row">
                                <div class="col-sm-6">
                                    <input type="text" id="name" name="contact" class="form-control" value="{{old('contact')}}" placeholder="Contact no.">
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" id="email" name="email" class="form-control" value="{{old('email')}}" placeholder="Email" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <textarea id="message" name="message" cols="30" rows="5" class="form-control message" placeholder="Message">{{old('message')}}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <button id="submit" class="default-btn default-btn1" type="submit" style="background: #1dd1a1;">Send Message</button>
                                </div>
                            </div>
                            <div id="form-messages" class="alert" role="alert"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Contact Section -->

  @endsection