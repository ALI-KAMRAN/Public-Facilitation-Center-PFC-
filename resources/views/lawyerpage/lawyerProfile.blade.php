<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/css/lawyerprofile.css">
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
    <title>Lawyer Profile</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{URL::to('/')}}/images/favicon.png" type="image/x-icon" />
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
<?php
            
            foreach(session('data') as $val)
            {
                foreach($val as $key => $v)
                {
                                      if($key=="image2"){
                       $image2=$v;
                    }
                }
            }
            ?>
<style type="text/css">
		

.divco{
	background-image: url('{{URL::to('/')}}/storage/jani/<?php echo $image2  ?>');
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

<?php
            
            foreach(session('data') as $val)
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
            
            foreach(session('data') as $val)
            {
                foreach($val as $key => $v)
                {
                                      if($key=="image"){
                      $image=$v;
                     
                    
                    }
                }
            }
            ?>



 <?php
            
            foreach(session('data') as $val)
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
            
            foreach(session('data') as $val)
            {
                foreach($val as $key => $v)
                {
                                      if($key=="contact"){
                      
                    }
                }
            }
            ?>
           
       <?php
            
            foreach(session('data') as $val)
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
            
            foreach(session('data') as $val)
            {
                foreach($val as $key => $v)
                {
                                      if($key=="country"){
                      
                    }
                }
            }
            ?>


 <?php
            
            foreach(session('data') as $val)
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
            
            foreach(session('data') as $val)
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
            
            foreach(session('data') as $val)
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
            
            foreach(session('data') as $val)
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
            
            foreach(session('data') as $val)
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
            
            foreach(session('data') as $val)
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
            
            foreach(session('data') as $val)
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
            
            foreach(session('data') as $val)
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
            
            foreach(session('data') as $val)
            {
                foreach($val as $key => $v)
                {
                                      if($key=="lawyerType"){
                      $lawyerType=$v;
                    }
                }
            }
            ?>

 <?php
            
            foreach(session('data') as $val)
            {
                foreach($val as $key => $v)
                {
                                      if($key=="experience"){
                      $experience=$v;
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
        <a class="navbar-brand" href="{{url('homepage')}}">
          <img src="{{URL::to('/')}}/images/adminlogo.png" class="log" alt="" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
          <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbars-host" >
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a class="nav-link" href="{{URL::to('/')}}/lawyerindex/lawyerprofile">MyAccount</a></li>
            <li class="nav-item "><a class="nav-link" href="{{URL::to('/')}}/lawyerindex">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="{{URL::to('/')}}/lawyerindex/about">About Us</a></li>
            <li class="nav-item dropdown" id="lawyer">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown" id="lawyer">Lawyers</a>
              <div class="dropdown-menu" aria-labelledby="dropdown-a">
                <a class="dropdown-item" href="{{URL::to('/')}}lawyerindex/criminallawyer" id="lawyer">Criminal Lawyer </a>
                <a class="dropdown-item" href="{{URL::to('/')}}/lawyerindex/familylawyer" id="lawyer">Family Lawyer </a>
                <a class="dropdown-item" href="{{URL::to('/')}}/lawyerindex/immigrationlawyer" id="lawyer">Immigration Lawyer</a>
              </div>
            </li>
            
            <li class="nav-item "><a class="nav-link"  href="/laravel/public/lawyerindex/clients">Clients</a></li>
           

                    
          </ul>

    
                   <li><a href="{{URL::to('/')}}/index" class="btn btn-danger">LogOut</a></li>
                   <li><a href="{{URL::to('/')}}/lawyerindex/lawyerprofile/lawyerprofiledelete/<?php echo $id  ?>" class="btn btn-danger">Delete</a></li>
                  
                   
          
        </div>
      </div>
    </nav>
  </header>
  <!-- End header -->


 <div class="bc">
<div class="d-sm-flex  bg-dark bc "   >
<div class="flex-fill " style="width:100%;height:400px;">
<img src="{{URL::to('/')}}/storage/upload/<?php echo $image?>" width="250" height="200" >
<br>
 <h1 class="name" style="color:white;"><strong><?php  echo $name ?></strong></h1>   
  <p class="type" style="color:white;">Lawyer</p>
  <p class="cityname" style="color:white;">Gujranwala Area</p>
 
 <br>


</div>
  <div class="m-2  "  style="width:100%;height:400px;">

<h5 class="text-light"><strong>Name:</strong></h5>
<div style="width: 80%;height: 30px;background-color: #b3b3ff;"><?php echo $name  ?></div>
<h5 class="text-light"><strong>LastName:</strong></h5>
<div style="width: 80%;height: 30px;background-color: #b3b3ff;"><?php echo $lname  ?> </div>
<h5 class="text-light"><strong>Password:</strong></h5>
<div style="width: 80%;height: 30px;background-color: #b3b3ff;"><?php echo $password  ?></div>

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
<div style="width: 80%;height: 30px;background-color: #b3b3ff;"><?php echo $lawyerType  ?></div>
<h5 class="text-light"><strong>Experience:</strong></h5>
<div style="width: 80%;height: 30px;background-color: #b3b3ff;"><?php echo $experience  ?></div>
</div>

</div>




</div>



    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-center">                   
                    <p class="footer-company-name">All Rights Reserved. &copy; 2020 <a href="{{url('homepage')}}">PFC</a> </p>
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
      $("#lawyer").click(function (e) {
        alert("You dont have permission");
        return false;

    
      
      });
     });

    </script>
</body>
</html>