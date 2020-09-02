<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Checkout</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="{{URL::to('/')}}/css/bootstrap.min.css" rel="stylesheet">      
		<link href="{{URL::to('/')}}/css/bootstrap-responsive.min.css" rel="stylesheet">		
		<link href="{{URL::to('/')}}/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="{{URL::to('/')}}/css/flexslider.css" rel="stylesheet"/>
		<link href="{{URL::to('/')}}/css/main.css" rel="stylesheet"/>

		<!-- scripts -->
		<script src="{{URL::to('/')}}/js/jquery-1.7.2.min.js"></script>
		<script src="{{URL::to('/')}}/js/bootstrap.min.js"></script>				
		<script src="{{URL::to('/')}}/js/superfish.js"></script>	
		<script src="{{URL::to('/')}}/js/jquery.scrolltotop.js"></script>
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
	
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	</head>
    <body>		



<!--header side start!>			
		
<d!-- start navbar -->
<nav class="navbar navbar-expand-sm navbar-dark bg-dark ">
<a href="homepage" class="navbar-brand">
<img src="{{URL::to('/')}}/images/mono.png" alt="pic" width="210px" height="55px"> 
</a>

<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar">
<span class="navbar-toggler-icon"></span>

</button>

<div class="collapse navbar-collapse" id="navbar">
<ul class="navbar-nav text-center">
<li class="nav-item"> <a href="{{url('service')}}" class="nav-link" style="font-size:20px">
<svg class="bi bi-grid-3x3-gap-fill" width="1.3em" height="1.3em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M1 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V2zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V2zM1 7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V7zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V7zM1 12a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-2zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-2zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-2z"/>
</svg> Service</a> </li>
<li class="nav-item"> <a href="{{url('documents/create')}}" class="nav-link" style="font-size:20px">
<svg class="bi bi-receipt-cutoff" width="1.4em" height="1.4em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v13h-1V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51L2 2.118V15H1V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zM0 15.5a.5.5 0 0 1 .5-.5h15a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z"/>
  <path fill-rule="evenodd" d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-8a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z"/>
</svg> Verify Documents</a> </li>
<li class="nav-item"> <a href="{{url('laywer')}}" class="nav-link" style="font-size:20px">
<svg class="bi bi-layers-fill" width="1.4em" height="1.4em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M7.765 1.559a.5.5 0 0 1 .47 0l7.5 4a.5.5 0 0 1 0 .882l-7.5 4a.5.5 0 0 1-.47 0l-7.5-4a.5.5 0 0 1 0-.882l7.5-4z"/>
  <path fill-rule="evenodd" d="M2.125 8.567l-1.86.992a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882l-1.86-.992-5.17 2.756a1.5 1.5 0 0 1-1.41 0l.418-.785-.419.785-5.169-2.756z"/>
</svg> Hier Lawyer</a> </li>
<li class="nav-item"> <a href="{{url('product')}}" class="nav-link" style="font-size:20px">
<svg class="bi bi-cart-fill" width="1.3em" height="1.3em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
</svg> Stamp Papers</a> </li>
<li class="nav-item"> <a href="{{url('team')}}" class="nav-link" style="font-size:20px">
<svg class="bi bi-people-fill" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
</svg> Team Members</a> </li>
</ul>


<div class="navbar-buttons "><a class="btn btn-primary " href="{{url('adminPage')}}">
                    
                    Admin Side
                </a></div>
                          

</div>

</nav>
<!-- end navbar -->


<div id="top-bar" class="container">
			<div class="row">
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">				
						<li><a href="{{URL::to('/product')}}">Stamp Papers</a></li>
							<li><a href="{{URL::to('/product/cart')}}">View Cart</a></li>
							<li><a href="{{URL::to('/product/checkout')}}">Checkout</a></li>					
										
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
		
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="index.html" class="logo pull-left"><img src="{{URL::to('/')}}/images/logoo.png" class="site_logo" alt="pic"></a>
					<nav id="menu" class="pull-right">
					</nav>
				</div>
			</section>				
			<section class="header_text sub">
			<img class="pageBanner" src="{{URL::to('/')}}/images/court_pic.jpg" alt="New products" >
				<h4><span>Online Check Out</span></h4>
			

			</section>	


<form class="form-design" action="{{URL::to('/product/payment')}}" method="post" enctype="multipart/form-data">
			<h4><b>Your Personal Details </b> </h4>


			<br>
@if(count($errors) > 0)
<ul>
@foreach($errors->all() as $error)
<div class="alert alert-danger" role="alert">{{$error}}</div>
@endforeach
</ul>
@endif
@if(\Session::has('success'))
<div class="alert alert-success" role="alert">
<p>{{\Session::get('success')}} </p>
</div>
@endif
@csrf




			<br>
  <div class="row">
    <div class="col">
	<label for="exampleFormControlInput1"> <h5> Name </h5> </label>
      <input type="text" class="form-control" placeholder="Enter User Name" name="name">
    </div>
    <div class="col">
	<label for="exampleFormControlInput1"><h5>Father Name </h5></label>
      <input type="text" class="form-control" placeholder="Enter User Father Name" name="f_name">
    </div>
  </div>


<br>
  <div class="row">
    <div class="col">
	<label for="exampleFormControlInput1"> <h5>Email Address </h5> </label>
      <input type="text" class="form-control" placeholder="Enter Email Address" name="email">
    </div>
    <div class="col">
	<label for="exampleFormControlInput1"><h5>Telephone Number </h5></label>
      <input type="text" class="form-control" placeholder="Enter Telephone Number" name="cell_no">
    </div>
  </div>


  <br>
  <div class="row">
    <div class="col">
	<label for="exampleFormControlInput1"> <h5>Home Address </h5> </label>
      <input type="text" class="form-control" placeholder="User Address" name="address">
    </div>
    <div class="col">
	<label for="exampleFormControlInput1"><h5>CNIC Number </h5></label>
      <input type="text" class="form-control" placeholder="Enter User CNIC Number" name="cnic">
    </div>
  </div>



  <br>
  <div class="row">
    <div class="col">
    <label for="exampleFormControlInput1"><h5>Payment Method</h5></label> 

    <select class="custom-select" name="payment_method">
    
  <option value="Online">Online</option>
  
</select>

    </div>
    <div class="col">
     <label for="exampleFormControlInput1"><h5>Purpose</h5></label>
    <select class="custom-select"  name="purpose">

  <option value="Biyan E Halfi">Biyan E Halfi</option>
  <option value="Himself" >Iqrar Namma</option>
  <option value="triple talaq" >triple talaq</option>
  </select>
</div>
</div>




  <br>
  <div class="row">
    <div class="col">

     <label for="exampleFormControlInput1"><h5>Select Stamp Purchase Byes/Himself</h5></label>
    <select class="custom-select" name="purchase">
  
  <option value="Byes">Byes</option>
  <option value="Himself">Himself</option>
</select>
  </div>
  
 <div class="col">
   <label for="exampleFormControlInput1"><h5>Select Stamp Price</h5></label>
        <select class="custom-select" name="price">
		
    <option value="RS 50">RS 50 Stamp</option>
    <option value="RS 100">RS 100 Stamp</option>
    <option value="Bank Stamp">Bank Stamp</option>
    <option value="Biyan Halfi">Biyan Halfi</option>
    <option value="Iqrar Namma">Iqrar Namma</option>
    <option value="Affidavid">Affidavid for University</option>
	</select>
  </div>
  </div>



  <br>
  <div class="row">
    <div class="col">
    <label for="exampleFormControlInput1"><h5>User Comments</h5></label> 
<textarea name="comments" placeholder="Write Here User Comments" cols="157" rows="8" style="resize:none"></textarea>
</div>
</div>



 


<br><br><center>
<button type="submit" class="btn btn-primary">Conform Order Online</button>
<!-- Button trigger modal -->

</form>	</center>






			

			
					
			<hr>
			<section id="copyright">
				<span>Copyright 2020 All right reserved.</span>
			</section>
		</div>
		<script src="{{URL::to('/')}}/js/common.js"></script>
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>



<!-- Large modal -->


<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

    <div class="embed-responsive embed-responsive-21by9">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/VLFbCmiJ3OE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>

    </div>
  </div>
</div>