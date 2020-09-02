<!DOCTYPE html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- Basic -->
    <meta charset="utf-8">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>OnceLawyer</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{URL::to('/')}}/images/t.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{URL::to('/')}}/public/images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->

    <!-- Site CSS -->
    <link rel="stylesheet" href="{{URL::to('/')}}/style.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="{{URL::to('/')}}/css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{URL::to('/')}}/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{URL::to('/')}}/css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="{{URL::to('/')}}/js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style type="text/css">
	.log{
		height: 70px;
	}
.law{
	border: solid black;
	border-radius: 5px;
	color: white;
	background-color: black;
	outline: none;
	padding: 10px;
}
.bc{
	background-image: url('{{URL::to('/')}}/images/b.jpg');
	background-repeat: no-repeat;
	background-size: cover;
	width: 100%;
	height: auto;
	 
}


* {box-sizing: border-box;}
/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/send button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

</style>
</head>
<body class="host_version"> 

	<!-- Modal -->
	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header tit-up">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Customer Login</h4>
			</div>
			<div class="modal-body customer-box">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs">
					<li><a class="active" href="#Login" data-toggle="tab">Login</a></li>
					<li><a href="#Registration" data-toggle="tab">Registration</a></li>
				</ul>
				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane active" id="Login">
						<form role="form" class="form-horizontal">
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="email1" placeholder="Name" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="exampleInputPassword1" placeholder="Email" type="email">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-10">
									<button type="submit" class="btn btn-light btn-radius btn-brd grd1">
										Submit
									</button>
									<a class="for-pwd" href="javascript:;">Forgot your password?</a>
								</div>
							</div>
						</form>
					</div>
					<div class="tab-pane" id="Registration">
						<form role="form" class="form-horizontal">
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" placeholder="Name" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="email" placeholder="Email" type="email">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="mobile" placeholder="Mobile" type="email">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="password" placeholder="Password" type="password">
								</div>
							</div>
							<div class="row">							
								<div class="col-sm-10">
									<button type="button" class="btn btn-light btn-radius btn-brd grd1">
										Save &amp; Continue
									</button>
									<button type="button" class="btn btn-light btn-radius btn-brd grd1">
										Cancel</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	  </div>
	</div>

    <!-- LOADER -->
	<div id="preloader">
		<div class="loader-container">
			<div class="progress-br float shadow">
				<div class="progress__item"></div>
			</div>
		</div>
	</div>
	<!-- END LOADER -->	
	
	
    <!-- Start header -->
	<header class="top-navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html">
          <img src="{{URL::to('/')}}/images/adminlogo.png" class="log" alt="" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
          <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbars-host" >
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a class="nav-link"href="{{URL::to('/')}}/clientindex/clientprofile">MyAccount</a></li>
            <li class="nav-item "><a class="nav-link" href="/laravel/public/clientindex">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="/laravel/public/clientindex">About Us</a></li>
            <li class="nav-item dropdown" id="lawyer">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown" id="lawyer">Lawyers</a>
              <div class="dropdown-menu" aria-labelledby="dropdown-a">
                <a class="dropdown-item" href="/laravel/public/clientindex/criminallawyer" id="lawyer">Criminal Lawyer </a>
                <a class="dropdown-item" href="/laravel/public/clientindex/familylawyer" id="lawyer">Family Lawyer </a>
                <a class="dropdown-item" href="/laravel/public/clientindex/immigrationlawyer" id="lawyer">Immigration Lawyer</a>
              </div>
            </li>
            
            <li class="nav-item "><a class="nav-link" id="client" href="/laravel/public/clientindex/clients">Clients</a></li>
           
                    
          </ul>

    
		  <li><a href="/laravel/public/index" class="btn btn-danger">LogOut</a></li>

          
        </div>
      </div>
    </nav>
  </header>
  <!-- End header -->

	@if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{{ session('success') }}</li>
        </ul>
    </div>
@endif

<?php     
    $abc= $data->image;



?>
<div class="bc">
<div class="d-sm-flex   ">
<div class="p-1 pl-1  flex-fill " style="width:100%;height:400px;">
<img src="{{URL::to('/')}}/storage/upload/{{$data->image}}"  alt="abc"   height="250" width="300">
<br>
<h5 class="text-primary"><strong class="text-light">Name:</strong> {{$data->name}} </h5>
<h5 class="text-primary"><strong class="text-light">LastName:</strong> {{$data->lname}}</h5>
<h5 class="text-primary"><strong class="text-light">Email:</strong> {{$data->email}} </h5>
<div id="watch-leftside">
<button class="btn btn-outline-danger but"><a href="https://api.whatsapp.com/send?phone={{$data->contact}}&text=Hi you can chat with your Lawyer on WhatsApp Please Click on Cntinue to Chat if you don,t have WhatsApp then download it and try again THANK YOU!"
onclick="gtag('event','WhatsApp',{'event_action':'Whatsapp_chat','event_category':'Chat','event_label':'Chat_WhatsApp'
});"target="_blank">WhatsApp Chat</a></button>
</div>
<div style="display:none">
</div>
  <a href="{{URL::to('/')}}/send-ma/{{$data->id}}"><button type="button" class="btn btn-outline-danger but"><i class="fa fa-handshake-o" aria-hidden="true"></i>Send Email</button></a>
<div><button class="btn text-secondary btn2"><i class="fa fa-exclamation-circle" aria-hidden="true"></i>Get Help</button></div>

</div>
<div class="p-2  "  style="width:100%;height:400px;">

<h5 class="text-light">Name:</h5>
<div style="width: 80%;height: 30px;background-color: #b3b3ff;">{{$data->name}}</div>
<h5 class="text-light">LastName:</h5>
<div style="width: 80%;height: 30px;background-color: #b3b3ff;"> {{$data->lname}}</div>
<h5 class="text-light">Education:</h5>
<div style="width: 80%;height: 30px;background-color: #b3b3ff;"> {{$data->contact}}</div>
<h5 class="text-light">country:</h5>
<div style="width: 80%;height: 30px;background-color: #b3b3ff;">{{$data->country}}</div>
<h5 class="text-light">Bith:</h5>
<div style="width: 80%;height: 30px;background-color: #b3b3ff;">{{$data->birth}}</div>

 </div>



  <div class="p-2 " style="width:100%;height:400px;">


<h5 class="text-light">Email:</h5>
<div style="width: 80%;height: 30px;background-color: #b3b3ff;">{{$data->email}}  </div>
<h5 class="text-light">Contact:</h5>
<div style="width: 80%;height: 30px;background-color: #b3b3ff;">{{$data->contact}}</div>
<h5 class="text-light">City:</h5>
<div style="width: 80%;height: 30px;background-color: #b3b3ff;">{{$data->contact}}</div>
<h5 class="text-light">Gender:</h5>
<div style="width: 80%;height: 30px;background-color: #b3b3ff;">{{$data->gender}}</div>


</div>

</div>
<br>
<h1 class="text-light"><strong>Experience:</strong></h1>
<hr>
<p class="text-primary">{{$data->experience}}</p>

</div>
<br>


</script>



<hr>



</div>
</div>

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-center">                   
                    <p class="footer-company-name">All Rights Reserved. &copy; 2018 <a href="#">SmartEDU</a> Design By : <a href="https://html.design/">html design</a></p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
   <!-- ALL JS FILES -->
   <script src="{{URL::to('/')}}/js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="{{URL::to('/')}}/js/custom.js"></script>
  <script src="{{URL::to('/')}}/js/timeline.min.js"></script>
  <script>
    timeline(document.querySelectorAll('.timeline'), {
      forceVerticalMode: 700,
      mode: 'horizontal',
      verticalStartPosition: 'left',
      visibleItems: 4
    });
  </script>
  <script type="text/javascript">
      
     $(document).ready(function () {
      $("#client").click(function (e) {
        alert("You dont have permission");
        return false;

    
      
      });
     });

    </script>
</body>
</html>