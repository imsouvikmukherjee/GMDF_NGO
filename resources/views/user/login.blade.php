<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    {{-- login page resources --}}

    <link rel="stylesheet" type="text/css" href="{{url('user-asset/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('user-asset/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('user-asset/css2/iofrm-style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('user-asset/css2/iofrm-theme27.css')}}">
</head>
<body>
    <div class="form-body without-side">
        <div class="website-logo">
            <a href="index.html">
                <div class="logo">
                    <!-- <img class="logo-size" src="images/logo-light.svg" alt=""> -->
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="images/graphic8.svg" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <div class="form-icon">
                           
                                <img src="{{url('user-asset/img/logo.jpg')}}" alt="" style="border-radius: 50%; height: 70px; width: 70px; margin-left: 0px; margin-top: 10px;">
                           
                        </div>
                        <h3 class="form-title-center">Sign in and get access</h3>
                        <form action="school/index.html">
                            <input class="form-control" type="text" name="username" placeholder="E-mail Address" >
                            <input class="form-control" type="password" name="password" placeholder="Password" >
                            <div class="form-button">
                                <a href="school/index.html" >
                                    <button class="ibtn ibtn-full">Login</button>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>