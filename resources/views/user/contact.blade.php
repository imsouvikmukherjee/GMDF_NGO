@extends('user.layout.main')

@section('main-container')

    <div class="header-height"></div>

    <div class="pager-header">
        <div class="container">
            <div class="page-content">
                <h2>Contact With Us</h2>
                <p>Help today because tomorrow you may be the one who <br>needs more helping!</p>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('show.home.page') }}">Home</a></li>
                    <li class="breadcrumb-item active">Contact</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    <section class="contact-section padding">
        {{-- <div id="google_map"></div> --}}
        <!-- /#google_map -->
        <div class="section-heading text-center mb-40">
            <h2>Contact With Us</h2>
            <span class="heading-border"></span>
            <p>Help today because tomorrow you may be the one who <br> needs more helping!</p>
        </div>
        <div class="container ">
            <div class="row contact-wrap">
                <div class="col-md-6 xs-padding">
                    <div class="contact-info">
                        <h3>Get in touch</h3>
                        <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make
                            in the lives of the poor, the abused and the helpless.</p>
                        <p>The secret to happiness lies in helping others. Never underestimate the difference.</p>
                        <ul>
                            <li><i class="fa-solid fa-location-dot"></i> {{$settingdata->address}}</li>
                            <li><i class="fa-solid fa-phone"></i> +91 {{$settingdata->contact}}</li>
                            <li><i class="fa-solid fa-envelope"></i> {{$settingdata->email}}</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 xs-padding">
                    <div class="contact-form">
                        <h3>Drop us a line</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

                        @if (session('success'))
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
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('contact.store') }}" method="post" class="form-horizontal">
                            @csrf
                            <div class="form-group colum-row row">
                                <div class="col-sm-6">
                                    <input type="text" id="name" name="name" value="{{ old('name') }}"
                                        class="form-control" placeholder="Name">
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" id="email" name="email" class="form-control"
                                        placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <textarea id="message" name="message" cols="30" rows="5" class="form-control message"
                                        placeholder="Message">{{ old('message') }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <button id="submit" class="default-btn" type="submit">Send Message</button>
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
