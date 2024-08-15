<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .main{
            position: relative !important;
        }
        .main img{
            width: 50%;
        }
        .sc{
            position: absolute;
            z-index: 1;
            top:10px;
            left: 40%;
            font-size: clamp(0.5rem, 1vw, 1.5rem);
        }

        .name{
            position: absolute;
            z-index: 1;
            margin-top: 8%;
            top: 0;
            left: 50%;
            font-size: clamp(0.4rem, 2vw, 1.2rem);
        }
        .stid{
            position: absolute;
            z-index: 1;
            top:0;
            margin-top:12% ;
            left: 42%;
            font-size: clamp(0.6rem, 1.5vw, 1rem);
        }
        .class{
            position: absolute;
            z-index: 1;
            margin-top: 15%;
            top: 0;
            left: 42%;
            font-size: clamp(0.5rem, 1.5vw, 1rem);
        }
        .sec{
            position: absolute;
            z-index: 1;
            margin-top: 18%;
            top: 0;
            left: 42%;
            font-size: clamp(0.5rem, 1.5vw, 1rem);
        }
        .address{
            position: absolute;
            z-index: 1;
            margin-top: 24%;
            top: 0;
            left: 26%;
            /* width: 70% */
            font-size: clamp(0.5rem, 1.5vw, 1rem);
        }
        .dob{
            position: absolute;
            z-index: 1;
            margin-top: 21%;
            top: 0;
            left: 42%;
            font-size: clamp(0.5rem, 1.5vw, 1rem);
        }
        .qr{
            position: absolute;
            z-index: 1;
            margin-top: 9.1%;
            top: 0;
            left: 0;
            margin-left: 25%;
            /* font-size: clamp(0.5rem, 1.5vw, 1rem); */
            height: 45.4% !important;
            width: 15% !important;
        }
        .imgg{
            position: absolute;
            z-index: 2;
            margin-top: 11%;
            top: 0;
            left: 0;
            margin-left: 59%;
     
            height: 51.5% !important;
            width: 15% !important;
        }
        .logo{
            position: absolute;
            z-index: 3;
            margin-top: 1%;
            top: 0;
            left: 32%;
            height: 13%;
            width: 4% !important;
            font-size: clamp(0.8rem, 2vw, 1.2rem);
        }

        @media screen and (max-width:476px){
            .main img{
            width: 100%;
        }
        .sc{
            position: absolute;
            z-index: 1;
            top:5px;
            left: 32%;
            font-size: clamp(0.5rem, 1vw, 1rem);
        }
   
        .name{
            position: absolute;
            z-index: 1;
            margin-top: 15.5%;
            top: 0;
            left: 50%;
            font-size: clamp(0.8rem, 2vw, 1.2rem);
        }
        .stid{
            position: absolute;
            z-index: 1;
            top:0;
            margin-top:28% ;
            left: 35%;
            font-size: clamp(0.6rem, 1.5vw, 1rem);
        }
        .class{
            position: absolute;
            z-index: 1;
            margin-top: 32%;
            top: 0;
            left: 35%;
            font-size: clamp(0.5rem, 1.5vw, 1rem);
        }
        .sec{
            position: absolute;
            z-index: 1;
            margin-top: 36%;
            top: 0;
            left: 35%;
            font-size: clamp(0.5rem, 1.5vw, 1rem);
        }
        .address{
            position: absolute;
            z-index: 1;
            margin-top: 49%;
            top: 0;
            left: 5%;
            font-size: clamp(0.5rem, 1.5vw, 1rem);
        }
        .dob{
            position: absolute;
            z-index: 1;
            margin-top: 40%;
            top: 0;
            left: 35%;
            font-size: clamp(0.5rem, 1.5vw, 1rem);
        }
        .qr{
            position: absolute;
            z-index: 1;
            margin-top: 18.1%;
            top: 0;
            left: 0;
            margin-left: 0%;
            /* font-size: clamp(0.5rem, 1.5vw, 1rem); */
            height: 45.4% !important;
            width: 29% !important;
        }
        .imgg{
            position: absolute;
            z-index: 2;
            margin-top: 22%;
            top: 0;
            left: 0;
            margin-left: 69%;
     
            height: 51.5% !important;
            width: 29% !important;
        }
        .logo{
            position: absolute;
            z-index: 3;
            margin-top: 2%;
            top: 0;
            left: 14.5%;
            height: 12%;
            width: 8% !important;
            font-size: clamp(0.8rem, 2vw, 1.2rem);
        }
        }
    </style>
</head>
<body>
    
    
    <div class="container">
       
   <center> <div class="main">
        <img src="{{url('user-asset/img/ID_card.jpg')}}" alt="">
       <div class="sc"> <h2 class="school">{{$studentprofiledata[0]->schoolname}}</h2></div>
        <h2 class="name">Name: {{$studentprofiledata[0]->name}}</h2>
        <h2 class="stid">Student ID: {{$studentprofiledata[0]->contact}}</h2>
        <h2 class="class">Class: {{$studentprofiledata[0]->class}}</h2>
        <h2 class="sec">Section: {{$studentprofiledata[0]->section}} </h2>
        <h2 class="dob">DOB: {{$studentprofiledata[0]->dateofbirth}}</h2>
        <!-- <h2 class="age">Age: 30</h2> -->
        {{-- <h2 class="address">Address: {{$studentprofiledata[0]->parmanentaddress}}</h2> --}}
    <img src="{{url('user-asset/img/qr_id.jpg')}}" alt="" class="qr">
    <img src="{{url('studentdetails/'.$studentprofiledata[0]->studentpicture)}}" alt="" class="imgg">
    <img src="{{url('user-asset/img/logo_id.jpg')}}" alt="" class="logo">
       
        
    </div>
</center>
    </div>

    
</body>
</html>