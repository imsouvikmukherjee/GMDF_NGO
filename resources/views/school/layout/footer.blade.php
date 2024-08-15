<section class="widget-section padding">
    <div class="container">
        <div class="widget-wrap row">
            <div class="col-md-4 xs-padding">
                <div class="widget-content">

                    @if ($schooldetails != null)
                        <img src="{{ url('school_img/' . $schooldetails->logo) }}" alt="logo" height="auto"
                            width="70px">
                    @else
                        <img src="{{ url('school-asset/img/logo.jpg') }}" alt="logo" height="auto" width="70px">
                    @endif

                    {{-- <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor</p> --}}
                    <ul class="social-icon" style="color: #1dd1a1;">

                        @if ($socialicones->facebook != null)
                            <li><a href="{{ $socialicones->facebook }}"><i class="fa-brands fa-facebook"
                                        style="color: #1dd1a1;"></i></a></li>
                        @endif

                        @if ($socialicones->twitter != null)
                            <li><a href="{{ $socialicones->twitter }}"><i class="fa-brands fa-twitter"
                                        style="color: #1dd1a1;"></i></a></li>
                        @endif
                        {{-- <li><a href="#"><i class="fa-brands fa-pinterest" style="color: #1dd1a1;"></i></a></li> --}}

                        @if ($socialicones->instagram != null)
                            <li><a href="{{ $socialicones->instagram }}"><i class="fa-brands fa-instagram"
                                        style="color: #1dd1a1;"></i></a></li>
                        @endif

                        @if ($socialicones->linkdin != null)
                            <li><a href="{{ $socialicones->linkdin }}"><i class="fa-brands fa-linkedin"
                                        style="color: #1dd1a1;"></i></a></li>
                        @endif
                    </ul>
                </div>
            </div>
            <div class="col-md-4 xs-padding">
                <div class="widget-content">
                    <h3>Recent Campaigns</h3>
                    <ul class="widget-link">
                        <li><a href="#">First charity activity of this summer. <span>-1 Year Ago</span></a></li>
                        <li><a href="#">Big charity: build school for poor children. <span>-2 Year Ago</span></a>
                        </li>
                        <li><a href="#">Clean-water system for rural poor. <span>-2 Year Ago</span></a></li>
                        <li><a href="#">Nepal earthqueak donation campaigns. <span>-3 Year Ago</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 xs-padding">
                <div class="widget-content">
                    <h3>NGO Location</h3>
                    <ul class="address">


                        <li><i class="fa-solid fa-envelope"></i> {{ $schooldetails->showemail }}</li>
                        <li><i class="fa-solid fa-phone"></i> +91 {{ $schooldetails->showcontact }}</li>
                        {{-- <li><i class="fa-solid fa-globe"></i> Www.YourWebsite.com</li> --}}
                        <li><i class="fa-solid fa-location-dot"></i> {{ $schooldetails->address }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ./Widget Section -->

<footer class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 sm-padding">
                <div class="copyright">&copy; 2024 Powered by Rupsa Network Pvt Ltd</div>
            </div>
            {{-- <div class="col-md-6 sm-padding">
                <ul class="footer-social">
                    <li><a href="#">Orders</a></li>
                    <li><a href="#">Terms</a></li>
                    <li><a href="#">Report Problem</a></li>
                </ul>
            </div> --}}
        </div>
    </div>
</footer>
<!-- /Footer Section -->

<a data-scroll href="#header" id="scroll-to-top" style="background-color: #1dd1a1;"><i
        class="fa-solid fa-arrow-up-long"></i></a>


<!-- bootstrap  -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
</script>

<!-- jQuery Lib -->
<script src="{{ url('school-asset/js/vendor/jquery-1.12.4.min.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ url('school-asset/js/vendor/bootstrap.min.js') }}"></script>
<!-- Tether JS -->
<script src="{{ url('school-asset/js/vendor/tether.min.js') }}"></script>
<!-- Imagesloaded JS -->
<script src="{{ url('school-asset/js/vendor/imagesloaded.pkgd.min.js') }}"></script>
<!-- OWL-Carousel JS -->
<script src="{{ url('school-asset/js/vendor/owl.carousel.min.js') }}"></script>
<!-- isotope JS -->
<script src="{{ url('school-asset/js/vendor/jquery.isotope.v3.0.2.js') }}"></script>
<!-- Smooth Scroll JS -->
<script src="{{ url('school-asset/js/vendor/smooth-scroll.min.js') }}"></script>
<!-- venobox JS -->
<script src="{{ url('school-asset/js/vendor/venobox.min.js') }}"></script>
<!-- ajaxchimp JS -->
<script src="{{ url('school-asset/js/vendor/jquery.ajaxchimp.min.js') }}"></script>
<!-- Counterup JS -->
<script src="{{ url('school-asset/js/vendor/jquery.counterup.min.js') }}"></script>
<!-- waypoints js -->
<script src="{{ url('school-asset/js/vendor/jquery.waypoints.v2.0.3.min.js') }}"></script>
<!-- Slick Nav JS -->
<script src="{{ url('school-asset/js/vendor/jquery.slicknav.min.js') }}"></script>
<!-- Nivo Slider JS -->
<script src="{{ url('school-asset/js/vendor/jquery.nivo.slider.pack.js') }}"></script>
<!-- Letter Animation JS -->
<script src="{{ url('school-asset/js/vendor/letteranimation.min.js') }}"></script>
<!-- Wow JS -->
<script src="{{ url('school-asset/js/vendor/wow.min.js') }}"></script>
<!-- Contact JS -->
<script src="{{ url('school-asset/js/contact.js') }}"></script>
<!-- Main JS -->
<script src="{{ url('school-asset/js/main.js') }}"></script>
<script>
    // Initialize tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBGm_weV-pxqGWuW567g78KhUd7n0p97RY"></script>
<script>
    (function($) {
        "use strict";

        /*=========================================================================
            Google Map Settings
        =========================================================================*/

        google.maps.event.addDomListener(window, 'load', init);

        function init() {

            var mapOptions = {
                zoom: 11,
                center: new google.maps.LatLng(40.6700, -73.9400),
                scrollwheel: false,
                navigationControl: false,
                mapTypeControl: false,
                scaleControl: false,
                draggable: false,
                styles: [{
                    "featureType": "administrative",
                    "elementType": "all",
                    "stylers": [{
                        "saturation": "-100"
                    }]
                }, {
                    "featureType": "administrative.province",
                    "elementType": "all",
                    "stylers": [{
                        "visibility": "off"
                    }]
                }, {
                    "featureType": "landscape",
                    "elementType": "all",
                    "stylers": [{
                        "saturation": -100
                    }, {
                        "lightness": 65
                    }, {
                        "visibility": "on"
                    }]
                }, {
                    "featureType": "poi",
                    "elementType": "all",
                    "stylers": [{
                        "saturation": -100
                    }, {
                        "lightness": "50"
                    }, {
                        "visibility": "simplified"
                    }]
                }, {
                    "featureType": "road",
                    "elementType": "all",
                    "stylers": [{
                        "saturation": "-100"
                    }]
                }, {
                    "featureType": "road.highway",
                    "elementType": "all",
                    "stylers": [{
                        "visibility": "simplified"
                    }]
                }, {
                    "featureType": "road.arterial",
                    "elementType": "all",
                    "stylers": [{
                        "lightness": "30"
                    }]
                }, {
                    "featureType": "road.local",
                    "elementType": "all",
                    "stylers": [{
                        "lightness": "40"
                    }]
                }, {
                    "featureType": "transit",
                    "elementType": "all",
                    "stylers": [{
                        "saturation": -100
                    }, {
                        "visibility": "simplified"
                    }]
                }, {
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [{
                        "hue": "#ffff00"
                    }, {
                        "lightness": -25
                    }, {
                        "saturation": -97
                    }]
                }, {
                    "featureType": "water",
                    "elementType": "labels",
                    "stylers": [{
                        "lightness": -25
                    }, {
                        "saturation": -100
                    }]
                }]
            };

            var mapElement = document.getElementById('google_map');

            var map = new google.maps.Map(mapElement, mapOptions);

            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(40.6700, -73.9400),
                map: map,
                title: 'Location!'
            });
        }

    })(jQuery);

    <
    /body>

    <
    /html>