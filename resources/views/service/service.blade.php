@extends('masterpage\master')
@section('service')

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>






    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/cssservice.css" media="screen">
    
 
</head>
<body>
    

 
 
 
 
 











<!-- Start Portfolio Section -->
<div class="section full-width-portfolio" id="our-services" style="border-top:0; border-bottom:0; background:#fff;">

    <!-- Start Big Heading -->
    <div class="big-title text-center" data-animation="fadeInDown" data-animation-delay="01">
        <h1>Our <strong>Services</strong></h1>
    </div>
    <!-- Start Recent Projects Carousel -->
            
    <ul id="portfolio-list" class="services-detail services-detail-mobile" data-animated="fadeIn">
        <a href="{{url('character/create')}}">
            <li>
                <img src="images/character.png" style="width:30%;" alt="" />
                <h4 class="panel-title services-title">
                    Character Certificate                </h4>
            </li>
        </a>

        <a href="{{url('birth/create')}}">
            <li>
                <img src="images/police verfication.png" style="width:30%;" alt="" />
                <h4 class="panel-title services-title">
                    Birth Certificate                </h4>
            </li>
        </a>


        <a href="{{url('marriage/create')}}">
            <li>
                <img src="images/marriage.png" style="width:30%;" alt="" />
                <h4 class="panel-title services-title">
                    Marriage Certificate                </h4>
            </li>
        </a>



        <a href="{{url('divorce/create')}}">
            <li>
                <img src="images/marriage.png" style="width:30%;" alt="" />
                <h4 class="panel-title services-title">
                    Divorce Certificate                </h4>
            </li>
        </a>








        <a href="{{url('death/create')}}">
            <li>
                <img src="images/police verfication.png" style="width:30%;" alt="pic" />
                <h4 class="panel-title services-title">
                    Death Certificate                </h4>
            </li>
        </a>
        <a href="{{url('license/create')}}">
            <li>
                <img src="images/licence.png" style="width:30%;" alt="pic" />
                <h4 class="panel-title services-title">
                    Learner Driving License                </h4>
            </li>
        </a>
       
       
        <a href="{{url('vehicle/create')}}">
            <li>
                <img src="images/vehicle verification.png" style="width:30%;" alt="pic" />
                <h4 class="panel-title services-title">
                    Vehicle Verification                </h4>
            </li>
        </a>

        <a href="{{url('loss/create')}}">
            <li>
                <img src="images/loss report.png" style="width:30%;" alt="pic" />
                <h4 class="panel-title services-title">
                    Loss Report                </h4>
            </li>
        </a>

        <a href="{{url('crime/create')}}">
            <li>
                <img src="images/crime.png" style="width:30%;" alt="pic" />
                <h4 class="panel-title services-title">
                    Crime Report                </h4>
            </li>
        </a>

        <a href="{{url('affidavit/create')}}">
            <li>
                <img src="images/loss report.png" style="width:30%;" alt="pic" />
                <h4 class="panel-title services-title">
                    Affidavit For University                </h4>
            </li>
        </a>

        


    </ul>


    </body>
</html>
@endsection