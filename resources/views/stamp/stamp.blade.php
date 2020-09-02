@extends('masterpage\master')
@section('stamp')



<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v4.2.3, https://mobirisethemes.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.2.3, mobirisethemes.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
  <meta name="description" content="Bootstrap features blocks - with images and videos as backgrounds, images, icons, titles. Animated features blocks.">
  <title>Online Purchase Stamp Paper</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <style>
  .inner:hover img{
    transform: scale(1.5);
}
.inner{
overflow: hidden;
}
.inner img{
    transition: all 1.5s ease;
}
  
  
  </style>
  
  
</head>
<body>


<section class="features3 cid-qpV9Up2ikH" id="features3-8s" data-rv-view="7440">

    

    
    <div class="container" ><br><br><br><br>
    
    <h1> <center> Stamp <strong>Paper</strong> </center></h1>
    
        <div class="media-container-row">
        @foreach($students as $row)
            <div class="card p-3 col-12 col-md-6 col-lg-4">
            
                <div class="card-wrapper">
                
                    <div class="card-img">
                    
         <div class="inner">     <a href="{{url('stamppaperdata')}}">       <img src="{{ asset('PFC/StampPaper/Stamp_pic/' . $row['stamp_pic']) }}" alt="pic" width="250px" height="500px"> </a></div>  
                    </div>
                    <div class="card-box">
                        <h4 class="card-title pb-3 mbr-fonts-style display-7">
                        <br><br><br>
                           <center><b>{{$row['stamp_title']}} </b></center> 
                        </h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                        {{$row['stamp_detail']}}
                        </p>
                        
                    </div>
                    
                        <div class="mbr-section-btn text-center">
                            <a href="#" class="btn btn-primary">
                                Purchase
                            </a>
                            
                        </div>
                        
                </div>
                
            </div>
            
            

            
            
            @endforeach 

            
        </div>
       
    </div>
    
</section>






  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touch-swipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/jarallax/jarallax.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>

@endsection