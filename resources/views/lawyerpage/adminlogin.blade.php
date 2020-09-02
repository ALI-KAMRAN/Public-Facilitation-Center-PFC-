<!DOCTYPE html>
<html lang="en">
<head>
  <title>login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- Site Icons -->
<link rel="shortcut icon" href="{{URL::to('/')}}/images/favicon.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{URL::to('/')}}/public/images/apple-touch-icon.png">
<style type="text/css">
  
.form-container{
 
 box-shadow: 0px 0px 10px 0px #000;
 border-radius: 2px;
 padding: 30px;
top:20vh;
position: absolute;
width: 110%;

}

.bg{
background-image: url('{{URL::to('')}}/images/hello.png');
background-size: cover;
background-repeat: no-repeat;
height: 100vh;



}

</style>

</head>

<body class="bg">
@if ($errors->any())
    <div class="alert alert-dark">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

  <section class="container-fluid">
    <section class="row justify-content-center">
      
<section class="col-12 col-sm-6 col-md-3">

  <form action="{{URL::to('/')}}/adminloginauth" method="post" class="form-container">
    @csrf
    <center> <h3>Admin Login</h3> </center>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" >
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
    </div>
    
<br>
    <button type="submit" class="btn btn-primary btn-block bt">Submit</button><br>
    <a href="{{URL::to('/adminsignup')}}" class="text-danger" style="text-decoration:none;"> Sign Up here!</a> 
  </form>
</section>
 </section>
  </section>



</body>
</html>