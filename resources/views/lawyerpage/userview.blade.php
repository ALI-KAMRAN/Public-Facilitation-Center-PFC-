<!DOCTYPE html>
<html lang="en">
<head>
<!-- Site Icons -->
<link rel="shortcut icon" href="{{URL::to('/')}}/images/favicon.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{URL::to('/')}}/public/images/apple-touch-icon.png">
<!-- Latest compiled and minified CSS -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

  <link rel = "stylesheet" type = "text/css"   href="{{URL::to('/')}}/public/css/profile.css">
  </head>
<style>

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
                                      if($key=="birth"){
                       $birth=$v;
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
                                      if($key=="contact"){
                       $contact=$v;
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
                                      if($key=="id"){
                       $id=$v;
                    }
                }
            }
            ?>
</style>
<body class="body">
<div class="content-wrapper">


<div class="container emp-profile">

            @csrf
           <center> <h6><b>User Profile</b></h6></center>
@if(session('success'))
<div class='alert alert-success' role='lert'>
{{session('success')}}
</div>
@endif
@if(session('error'))
<div class='alert alert-danger' role='alert'>
{{session('error')}}
</div>
@endif
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img" height="50px" width="50px">
                        
                    
                        <img src="{{URL::to('/')}}/storage/upload/<?php echo $image  ?>" width="250" height="200" >
                           
                         
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                    <?php echo$name?> <?php echo$lname?>
                                    </h5>
                                    <h65>
                                      
                                    </h5>
                                    <p class="proile-rating"></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <h5 class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</h5>
                                </li>
                            
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p></p>
                            <a href=""></a><br/>
                           
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active " id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row border">
                                            <div class="col-md-6">
                                                <label>ID</label>
                                            </div>
                                            <div class="col-md-6">
                                                <label for=""><?php echo$id?></label>
                                            </div>
                                        </div>
                                        <div class="row border">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <label for=""><?php echo$email?></label>
                                            </div>
                                        </div>
                                        <div class="row border">
                                            <div class="col-md-6">
                                                <label>Phone Number</label>
                                            </div>
                                            <div class="col-md-6">
                                        <label for=""><?php echo$contact?></label>
                                            </div>
                                        </div>
                                        <div class="row border">
                                            <div class="col-md-6">
                                                <label>Gender</label>
                                            </div>
                                            <div class="col-md-6">
                                                <label for=""><?php echo$gender?></label>
                                            </div>
                                        </div>
                                        <div class="row border">
                                            <div class="col-md-6">
                                                <label>D.O.B</label>
                                            </div>
                                            <div class="col-md-6">
                                                <label for=""><?php echo$birth?></label>
                                            </div>
                                        </div>
                                        <div class="row border">
                                            <div class="col-md-6">
                                                <label>City</label>
                                            </div>
                                            <div class="col-md-6">
                                               <label for=""><?php echo$city?></label> 
                                            </div>
                                        </div>
                                        <div class="row border">
                                            <div class="col-md-6">
                                                <label>Country</label>
                                            </div>
                                            <div class="col-md-6">
                                            <label for=""><?php echo$country?></label>  
                                            <!-- <p>country</p> -->
                                            </div>
                                        </div>
                                      
                                        <div class="float-right mr-5">
                                        <a href="{{URL::to('')}}/userupdate/<?php echo $id?> "><button class="btn btn-primary">Update </button> </a> 
                                        <a href="{{URL::to('')}}/userdelete/<?php echo $id?> "><button class="btn btn-primary">Delete </button> </a>
</div>

                            </div>
                        
                        </div>
                    </div>
                </div>
                  
        
        </div>
      
</div>

</body></html>