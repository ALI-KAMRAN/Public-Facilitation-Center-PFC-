<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/css/lawyerprofile.css">
<script src="{{URL::to('/')}}/js/jquery-3.5.0.min.js"></script>
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
    <title>Client Profile</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{URL::to('/laravel/laravel_chat')}}/images/favicon.png" type="image/x-icon" />
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


</style>

<style type="text/css">
		

.divco{
	background-image: url('');
	background-repeat: no-repeat;
	background-size: cover;
	width: 100%;
	height: 300px;
	 
}
.bc{
	background-image: url('{{URL::to('/')}}/images/b.jpg');
	background-repeat: no-repeat;
	background-size: cover;
	width: 100%;
	height: auto;
	 
}

	</style>
</head>

<?php
            
            foreach(session('dat') as $val)
            {
                foreach($val as $key => $v)
                {
                                      if($key=="id"){
                       $id=$v;
                    }
                }
            }
            ?>


   <?php
            
            foreach(session('dat') as $val)
            {
                foreach($val as $key => $v)
                {
                                      if($key=="image"){
                      $img=$v;
                    
                      
                     
                    
                    }
                }
            }
            ?>



 <?php
            
            foreach(session('dat') as $val)
            {
                foreach($val as $key => $v)
                {
                                      if($key=="name"){
                           $name=$v;
                    }
                }
            }
            ?>


  <?php
            
            foreach(session('dat') as $val)
            {
                foreach($val as $key => $v)
                {
                                      if($key=="contact"){
                      
                    }
                }
            }
            ?>
           
       <?php
            
            foreach(session('dat') as $val)
            {
                foreach($val as $key => $v)
                {
                                      if($key=="city"){
                      $city=$v;
                    }
                }
            }
            ?>
          
       
       <?php
            
            foreach(session('dat') as $val)
            {
                foreach($val as $key => $v)
                {
                                      if($key=="country"){
                      
                    }
                }
            }
            ?>


 <?php
            
            foreach(session('dat') as $val)
            {
                foreach($val as $key => $v)
                {
                                      if($key=="lname"){
                      $lname=$v;
                    }
                }
            }
            ?>
      
    
  
      <?php
            
            foreach(session('dat') as $val)
            {
                foreach($val as $key => $v)
                {
                                      if($key=="password"){
                      $password=$v;
                    }
                }
            }
            ?>
            
            

     
   
  
  <?php
            
            foreach(session('dat') as $val)
            {
                foreach($val as $key => $v)
                {
                                      if($key=="email"){
                      $email=$v;
                    }
                }
            }
            ?>
  
  
  
    <?php
            
            foreach(session('dat') as $val)
            {
                foreach($val as $key => $v)
                {
                                      if($key=="country"){
                    $country=$v;
                    }
                }
            }
            ?>
    
    
    


 <?php
            
            foreach(session('dat') as $val)
            {
                foreach($val as $key => $v)
                {
                                      if($key=="contact"){
                      $contact= $v;
                    }
                }
            }
            ?>
    <?php
            
            foreach(session('dat') as $val)
            {
                foreach($val as $key => $v)
                {
                                      if($key=="education"){
                      $education= $v;
                    }
                }
            }
            ?>
    <?php
            
            foreach(session('dat') as $val)
            {
                foreach($val as $key => $v)
                {
                                      if($key=="birth"){
                      $birth= $v;
                    }
                }
            }
            ?>
      <?php
            
            foreach(session('dat') as $val)
            {
                foreach($val as $key => $v)
                {
                                      if($key=="gender"){
                      $gender=$v;
                    }
                }
            }
            ?>
            

 <?php
            
            foreach(session('dat') as $val)
            {
                foreach($val as $key => $v)
                {
                                      if($key=="comment"){
                      $comment=$v;
                    
                    }
                }
            }
            ?>
<body class="host_version ">
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
            <li class="nav-item"><a class="nav-link" href="/laravel/public/clientindex/about">About Us</a></li>
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
                   <li><a href="{{URL::to('/')}}/clientindex/clientprofile/clientprofiledelete/<?php echo $id  ?>" class="btn btn-danger">Delete</a></li>
   
                   
          
        </div>
      </div>
    </nav>
  </header>
  <!-- End header -->

  <?php
               
               foreach(session('dat') as $val)
               {
                   foreach($val as $key => $v)
                   {
                                         if($key=="image"){
                         $img=$v;
                         
                        
                       
                       }
                   }
               }
               ?>
 <div class="bc">
<div class="d-sm-flex  bg-dark bc "   >
<div class="flex-fill " style="width:100%;height:400px;">
<img src="{{URL::to('/')}}/storage/upload/<?php echo $img;?>" width="250" height="200" >
<br>
 <h1 class="name" style="color:white;"><strong><?php  echo $name ?></strong></h1>   
  <p class="type" style="color:white;">Client</p>
  <p class="cityname" style="color:white;">Gujranwala Area </p>
 <a  href="/index"><button type="button" class="btn btn-outline-primary but"><i class="fa fa-power-off" aria-hidden="true"></i>Logout</button></a>
<br>


</div>
  <div class="m-2  "  style="width:100%;height:400px;">

<h5 class="text-light"><strong>Name :</strong></h5>
<div style="width: 80%;height: 30px;background-color: #b3b3ff;"><?php echo $name  ?></div>
<h5 class="text-light"><strong>LastName:</strong></h5>
<div style="width: 80%;height: 30px;background-color: #b3b3ff;"><?php echo $lname  ?> </div>
<h5 class="text-light"><strong>Password:</strong></h5>
<div style="width: 80%;height: 30px;background-color: #b3b3ff;"  ><?php echo $password  ?></div>

<h5 class="text-light"><strong>Education:</strong></h5>
<div style="width: 80%;height: 30px;background-color: #b3b3ff;"><?php echo $education  ?></div>
<h5 class="text-light"><strong>country:</strong></h5>
<div style="width: 80%;height: 30px;background-color: #b3b3ff;"><?php echo $country  ?></div>
<h5 class="text-light"><strong>Birth:</strong></h5>
<div style="width: 80%;height: 30px;background-color: #b3b3ff;"><?php echo $birth  ?></div>

 </div>



  <div class="m-2 " style="width:100%;height:400px;">


<h5 class="text-light"><strong>Email:</strong></h5>
<div style="width: 80%;height: 30px;background-color: #b3b3ff;"><?php echo $email  ?></div>
<h5 class="text-light"><strong>Contact:</strong></h5>
<div style="width: 80%;height: 30px;background-color: #b3b3ff;"><?php echo $contact  ?></div>
<h5 class="text-light"><strong>City:</strong></h5>
<div style="width: 80%;height: 30px;background-color: #b3b3ff;"><?php echo $city  ?></div>
<h5 class="text-light"><strong>Gender:</strong></h5>
<div style="width: 80%;height: 30px;background-color: #b3b3ff;"><?php echo $gender  ?></div>
<h5 class="text-light"><strong>LawyerType:</strong></h5>
<div style="width: 80%;height: 30px;background-color: #b3b3ff;"></div>

</div>

</div>


<hr>
<p class="text-danger"><?php echo $comment  ?></p>
<br>
</div>
<hr>

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-center">                   
                    <p class="footer-company-name">All Rights Reserved. &copy; 2020 <a href="{{url('homaepage')}}">PFC</a> </p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
   <!-- ALL JS FILES -->
   <script src="{{URL::to('/')}}/js/all.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyCKjLTXdq6Db3Xit_pW_GK4EXuPRtnod4o"></script>
	<!-- Mapsed JavaScript -->
	<script src="{{URL::to('/')}}/js/mapsed.js"></script>
	<script src="{{URL::to('/')}}/js/01-custom-places-example.js"></script>
    <!-- ALL PLUGINS -->
    <script src="{{URL::to('/')}}/js/custom.js"></script>
    <script type="text/javascript">
    	
     $(document).ready(function () {
     	$("#client").click(function () {
     		alert("You Dont have permission to view because you have already client");
     		return false;
     	});
     });

    </script>
</body>
</html>